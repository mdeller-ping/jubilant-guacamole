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

  <title>Partner Portal</title>
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
        <li class="nav-item text-muted">
          &nbsp;
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
    <div class="jumbotron alert-primary jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">TransUnion&reg; Business Products</h1>
            <p class="lead">TransUnion makes trust possible — ensuring consumers and organizations can transact with confidence and achieve great things.</p>
        </div>
    </div>
    <!-- /hero banner -->

    <div class="container mb-5">
        <hr>

        <div class="row">
            <div class="col-sm lead">
                <a href="#">Auditz Client Portal</a><br>
                <a href="#">Client Technical Services</a><br>
                <a href="#">eScan Client Portal</a><br>
            </div>
            <div class="col-sm lead">
                <a href="#">FactorTrust</a><br>
                <a href="#">Healthcare Solutions Portal</a><br>
                <a href="#">Partner Portal</a><br>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <hr>

        <div class="row">
            <div class="col-sm lead">
                <a href="#">STRINGRAY Login</a><br>
                <a href="#">TLOxp User Login</a><br>
                <a href="#">TransUnion ResidentScreening</a><br>
            </div>
            <div class="col-sm lead">
                <a href="#">TransUnion Direct</a><br>
                <a href="#">TransUnion SmartMove</a><br>
                <a href="#">TransUnion Background Data</a><br>
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
            <div class="col-sm lead">
            <a href="/debug/">Debug Information</a>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <hr>

        <div class="row">
            <div class="col-sm lead text-muted">
                Immutable Identifier<br />
                Account Creation<br />
                Last Modified<br />
                Last Password Change
            </div>
            <div class="col-sm lead text-muted">
                <?php echo $_SERVER['HTTP_X_PA_ENTRYUUID'] ?><br />
                <?php echo $_SERVER['HTTP_X_PA_CREATETIMESTAMP'] ?><br />
                <?php echo $_SERVER['HTTP_X_PA_MODIFYTIMESTAMP'] ?><br />
                <?php echo $_SERVER['HTTP_X_PA_PWDCHANGETIMESTAMP'] ?><br />
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
