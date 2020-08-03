<?php

  require('httpful.phar');

  // ALL - get stuff from form post

  $referenceId = $_POST['REF'];
  $resumePath = $_POST['resumePath'];
  $definitionId = 'TransUnion_Terms_of_Service';

  date_default_timezone_set('UTC');
  $timestamp = date("F j, Y, g:i a");

  // reusable function to hand user back to pingfederate

  function handoff($resumePath, $entryUUID) {
    $url = "https://auth.tu.demoenvi.com:9031/ext/ref/dropoff";

    $response = \Httpful\Request::post($url)
    ->authenticateWith('ConsentAdapter', '2FederateM0re')
    ->sendsJson()
    ->body(['subject' => $entryUUID])
    ->send();

    $referenceId = "{$response->body->REF}";

    $url = "https://auth.tu.demoenvi.com:9031" . $resumePath . "?REF=" . $referenceId;

    header ("Location: " . $url);
  }

  // NONE - get rid of people who show up without referenceId or resumePath

  if (! $referenceId || ! $resumePath) {
    header ('Location: https://www.tu.demoenvi.com');
  }

  // NEW - was the consent form just submit?

  if (isset($_POST['acceptConsent']) && $_POST['acceptConsent'] == 'True') {

    $entryUUID = $_POST['entryUUID'];
    $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // record acceptance

    $url = "https://dir.tu.demoenvi.com:8443/consent/v1/consents";

    $json = json_encode(array(
      'status' => 'accepted',
      'subject' => $entryUUID,
      'actor' => $entryUUID,
      'audience' => 'ConsentAdapter',
      'definition' => array(
        'id' => 'TransUnion_Terms_of_Service',
        'version' => '1.2',
        'locale' => 'en'
      ),
      'dataText' => 'dataText',
      'purposeText' => 'purposeData',
      'data' => array(
        'timestamp' => $timestamp,
      ),
      'consentContext' => array(
        'captureMethod' => 'ConsentAdapter',
        'subject' => array (
          'userAgent' => $userAgent,
          'ipAddress' => $ipAddress
        )
      )
    ));

    $response = \Httpful\Request::post($url)
    ->authenticateWith('cn=Directory Manager', '2FederateM0re')
    ->sendsJson()
    ->body($json)
    ->send();

    $status = "{$response->body->status}";

    if ($status == 'accepted') {
      handoff($resumePath, $entryUUID);
    } else {
      //bad news bears
      exit();
    }

  } else {

    // UNKNOWN - query pingfederate for this referenceId
    
    $url = "https://auth.tu.demoenvi.com:9031/ext/ref/pickup?REF=" . $referenceId;

    $response = \Httpful\Request::get($url)
      ->authenticateWith('ConsentAdapter', '2FederateM0re')
      ->expectsJson()
      ->send();

    $entryUUID = "{$response->body->{'chainedattr.entryUUID'}}";

    if (! $entryUUID) {
      // NONE - should not happen
      echo "unable to translate reference id to entryuuid";
      exit();
    }

    // UNKNOWN - look in pingdirectory for current consent

    $url = "https://dir.tu.demoenvi.com:8443/consent/v1/consents?actor=" . $entryUUID;

    $response = \Httpful\Request::get($url)
    ->authenticateWith('cn=Directory Manager', '2FederateM0re')
    ->expectsJson()
    ->send();

    $responseCount = "{$response->body->size}";
    
    // iterate thru existing consents to find any

    for ($x = 0; $x < $responseCount; $x = $x + 1) {

      $id = "{$response->body->_embedded->consents[$x]->id}";
      $status = "{$response->body->_embedded->consents[$x]->status}";
      $version = "{$response->body->_embedded->consents[$x]->definition->version}";
      $currentVersion = "{$response->body->_embedded->consents[$x]->definition->version}";

      echo $id . "<br>";
      echo $status . "<br>";
      echo $version . "<br>";
      echo $currentVersion . "<br>";

      if ($status == 'accepted' && $version == $currentVersion) {

        // EXISTING - the consent is active and matches the current version of the definition

        echo "handoff<br>";
        
        // handoff($resumePath, $entryUUID);

      }

      exit();

    }

    // NEW - the user does not have a consent. look up definition

    $url = "https://dir.tu.demoenvi.com:8443/consent/v1/definitions/" . $definitionId . "/localizations/en";

    $response = \Httpful\Request::get($url)
    ->authenticateWith('cn=Directory Manager', '2FederateM0re')
    ->expectsJson()
    ->send();

    $titleText = "{$response->body->titleText}";
    $dataText = "{$response->body->dataText}";
    $purposeText = "{$response->body->purposeText}";

?>
<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="image/x-icon" href="//assets.transunion.com/resources/img/ico/favicon.ico" rel="shortcut icon">

    <title>Sign On</title>
</head>

<body>

    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
        <a class="navbar-brand mb-1">
            <img src="https://assets.transunion.com/resources/img/logo.svg" height="50" alt="">
        </a>
    </nav>
    <!-- /navigation -->

    <!-- user login -->
    <div class="container mt-5">
        <h2 class="display-4"><?php echo $titleText; ?></h2>
        <p><?php echo $dataText; ?></p>
        <p class="mb-5"><?php echo $purposeText; ?></p>
        <form method="POST">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="acceptConsent" name="acceptConsent" value="True" required />
                <label class="form-check-label" for="acceptConsent">I agree to the <?php echo $titleText; ?></label>
            </div>

            <input type="hidden" value="<?php echo $referenceId; ?>" name="REF" />
            <input type="hidden" value="<?php echo $resumePath; ?>" name="resumePath" />
            <input type="hidden" value="<?php echo $entryUUID; ?>" name="entryUUID" />

            <a href="javascript:postOk();" class="btn btn-primary mt-5">
                Continue
            </a>

        </form>
    </div>
    <!-- /user login -->

    <!-- Optional JavaScript -->

    <!-- iovation -->
    <script language="javascript" src="../assets/scripts/iovation_adapter_custom.js"></script>
    <script language="javascript" src="../assets/scripts/iovation_device_profiling.js"></script>
    <!-- /iovation -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script>
        function postOk() {
        
          if ($('#acceptConsent').is(":checked")) {
            document.forms[0].submit();
          }

        }

        function postOnReturn(e) {
            var keycode;
            if (window.event) keycode = window.event.keyCode;
            else if (e) keycode = e.which;
            else return true;

            if (keycode == 13) {
                postOk();
                return false;
            } else {
                return true;
            }
        }
    </script>

</body>

</html>
<?php  } ?>