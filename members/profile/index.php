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

    <div class="container mt-5">
        <h2 class="display-4">Account</h2>
    </div>

    <div class="container mb-5">
        <hr>

        <div class="row">
            <div class="col-sm lead">
                <strong>Contact Information</strong>
            </div>
            <div class="col-sm lead">
                <?php echo $_SERVER['HTTP_X_PA_CN'] ?><br>
                <?php echo $_SERVER['HTTP_X_PA_MAIL'] ?><br>
                <?php echo $_SERVER['HTTP_X_PA_MOBILE'] ?><br>
            </div>
            <div class="col-sm lead">
                <a href="/profile/personal/">Personal Information</a><br>
                <a href="/profile/email/">Change Account Email</a><br>
                <a href="/profile/telephone/">Change Phone Number</a><br>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <hr>

        <div class="row">
            <div class="col-sm lead">
                <strong>Security</strong>
            </div>
            <div class="col-sm lead">
                Password: ***********<br>
                MultiFactor: <?php if ($_SERVER['HTTP_X_PA_MFA'] == 'TRUE') { echo 'Enabled'; } else { echo 'Disabled'; } ?><br>
            </div>
            <div class="col-sm lead">
                <a href="/profile/password/">Change Password</a><br>
                <a href="/profile/multifactor/">MultiFactor</a><br>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <hr>

        <div class="row">
            <div class="col-sm lead">
                <strong>Membership & Billing</strong>
            </div>
            <div class="col-sm lead">
                <?php echo $_SERVER['HTTP_X_PA_PLAN'] ?>
            </div>
            <div class="col-sm lead">
                <a href="/profile/plan/">Change Plan</a>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <hr>

        <div class="row">
            <div class="col-sm lead">
                <strong>Preferences</strong>
            </div>
            <div class="col-sm lead">
                <a href="#">Communication Settings</a><br>
                <a href="#">Marketing Communications</a><br>
                <a href="#">Language</a><br>

            </div>
            <div class="col-sm lead">
                <a href="#">Delegated Consent</a><br>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <hr>

        <div class="row">
            <div class="col-sm lead">
                <strong>Immutable Identifier</strong>
            </div>
            <div class="col-sm lead">
                <?php echo substr($_SERVER['HTTP_X_PA_ENTRYUUID'], 0, 24) ?>...
            </div>
            <div class="col-sm lead">
                &nbsp;
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <!-- footer -->
    <nav class="navbar navbar-light bg-light">
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>