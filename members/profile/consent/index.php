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
        <?php
          if ($_SERVER['HTTP_X_PA_PLAN'] != 'None') {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="/score/">Score</a>
        </li>
        <?php
        }
        ?>
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
            <h1 class="display-4">Two ways to be in the know with TransUnion &reg;</h1>
            <p class="lead">Know where you stand. Protect what you've built. See the way forward.</p>
        </div>
    </div>
    <!-- /hero banner -->

    <!-- accountUpdateDiv -->
    <div class="container mt-5" id="accountUpdateDiv">
        <h2 class="mt-4">Data Privacy</h2>
        <p>Would you like to consent to sharing your credit score with 3rd parties?</p>
        <form method="POST">
          <textarea class="form-control" style="height: 300px;" id="consentJson">
{
    "actor": "<?php echo $_SERVER['HTTP_X_PA_MAIL']?>",
    "subject": "<?php echo $_SERVER['HTTP_X_PA_MAIL']?>",
    "status": "accepted",
    "audience": "credit",
    "definition": {
        "id": "creditScore",
        "version": "1.0",
        "locale": "en-US"
    },
    "dataText": "You agree to share this data...",
    "purposeText": "This data will be used for...",
    "titleText": "Share Your Data!",
    "data": {
        "implicit": [
     	  {
     	      "timestamp": "2020-02-21T04:04:57.066Z",
     		    "expires": "2020-03-21T04:04:57.066Z"
 		    } ]
    },
    "consentContext": {
	      "captureMethod": "New Customer Registration",
  	    "subject": {
  	      "userAgent": "<?php echo $_SERVER['HTTP_USER_AGENT'] ?>",
	        "ipAddress": "<?php echo $_SERVER['HTTP_X_FORWARDED_FOR'] ?>"
	      }
    }
}
          </textarea>

          <a href="#" class="btn btn-primary mt-5 mb-5" onclick="javascript:updateAccount();">Update</a>
          <a href="/profile/" class="btn btn-danger">Cancel</a>
        </form>
    </div>
    <!-- /accountUpdateDiv -->

    <!-- all done -->
    <div class="container mt-5 collapse" id="allDoneDiv">
        <h2 class="mt-4">Thank You</h2>
        <p class="mt-5 mb-5">Your account has been updated.</p>
        <a href="/profile" class="btn btn-primary">Done</a>
    </div>
    <!-- /all done -->

    <!-- warningDiv -->
    <div class="container collapse mt-4" id="warningDiv">
        <div class="alert alert-warning" id="warningMessage">pending</div>
    </div>
    <!-- /warningDiv -->

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

        function prettyPrint() {
          var ugly = document.getElementById('consentJson').value;
          var obj = JSON.parse(ugly);
          var pretty = JSON.stringify(obj, undefined, 4);
          document.getElementById('consentJson').value = pretty;
        }

        function updateAccount() {
            console.log('updateAccount function called');

            body = JSON.stringify($('#consentJson').val());

            console.log(body);

        //     var settings = {
        //         "url": "https://" + pingDirectory + "/directory/v1/" + distinguishedName,
        //         "method": "PUT",
        //         "timeout": 0,
        //         "headers": {
        //             "Content-Type": "application/json",
        //             "Authorization": "Basic " + authHeader
        //         },
        //         "data": body
        //     };

        //     $.ajax(settings)
        //         .done(function(data) {
        //             console.log("Account Updated");
        //             $('#warningMessage').text('');
        //             $('#warningDiv').hide();
        //             $('#accountUpdateDiv').hide();
        //             $('#allDoneDiv').show();
        //         })
        //         .fail(function(data, status, error) {
        //             console.log("Unable to update");
        //             var responseText = $.parseJSON(data.responseText);
        //             $('#warningMessage').text(responseText.details[0].message);
        //             $('#warningDiv').show();
        //         })

        // }
        prettyPrint();
    </script>
</body>

</html>