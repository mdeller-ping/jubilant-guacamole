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

  <title>Member Portal</title>
</head>

<body>

  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
    <a class="navbar-brand mb-1" href="/">
      <img src="https://assets.transunion.com/resources/img/logo.svg" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mt-4">
        <li class="nav-item">
          <a class="nav-link" href="/report/">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/score/">Score</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile/">My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/help/">Help</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/education/">Education</a>
        </li>
      </ul>
      <ul class="navbar-nav text-right mt-4">
        <li class="nav-item">
          <a class="btn btn-outline-warning" href="/pa/oidc/logout">Log Out</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /navigation -->

    <!-- hero banner -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">My Consents</h1>
            <p class="lead">The list below shows your complete list of consents as well as their current status.</p>
        </div>
    </div>
    <!-- /hero banner -->

    <div class="container mt-5" style="height: 500px; overflow: auto;">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>Consent ID</td><td>Status</td><td>Date Created</td>
        </tr>
      </thead>
    </table>

    <div class="container">

      <br />
      <br />

      <a href="#" onclick="toggleRaw();">Toggle Raw</a>

      <br />
      <br />

      <div style="display:none" id="rawDiv">
        <pre class='alert alert-warning'>GET https://int-docker.anyhealth-demo.ping-eng.com:1443/consent/v1/consents</pre>
        <pre class='alert alert-primary' style="height: 500px;"><?php echo $response ?></pre>
      </div>

      <br />
      <br />

    </div>

    <!-- footer -->
    <nav class="navbar navbar-light bg-light mt-5">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.tu.demoenvi.com/registration/">Sign up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://members.tu.demoenvi.com/">Member login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terms of Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Privacy</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        let authHeader = 'Y249YWRtaW5pc3RyYXRvcjoyRmVkZXJhdGVNMHJl';
        let pingDirectory = 'auth.tu.demoenvi.com:1443'
        let distinguishedName = '<?php echo $_SERVER['HTTP_X_PA_DN'] ?>';

        function updateAccount() {
            console.log('updateAccount function called');

            consent = $('#inputConsent').val();
            consent = (consent == 'true');

            body = JSON.stringify({
                "transUnionActive": consent
            });

            var settings = {
                "url": "https://" + pingDirectory + "/directory/v1/" + distinguishedName,
                "method": "PUT",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Basic " + authHeader
                },
                "data": body
            };

            $.ajax(settings)
                .done(function(data) {
                    console.log("Account Updated");
                    $('#warningMessage').text('');
                    $('#warningDiv').hide();
                    $('#accountUpdateDiv').hide();
                    $('#allDoneDiv').show();
                })
                .fail(function(data, status, error) {
                    console.log("Unable to update");
                    var responseText = $.parseJSON(data.responseText);
                    $('#warningMessage').text(responseText.details[0].message);
                    $('#warningDiv').show();
                })

        }
    </script>
</body>

</html>
