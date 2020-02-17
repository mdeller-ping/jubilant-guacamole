<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Your Neighborhood Credit Union</title>
</head>

<body>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  echo "form was submit";

} else {

  echo "no form submit";
  
}


?>


  <nav class="navbar navbar-dark bg-dark">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Moola Credit Union</span></a>
    </div>
  </nav>

  <!-- pull credit report -->
  <div class="container mt-5" id="personalInfoDiv">
    <h2>Subscriber Information</h2>
    <form id="creditRequest" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputUsername">Identifier</label>
          <input type="text" class="form-control" id="inputUsername" required>
        </div>
      </div>
      <input type="submit" class="btn btn-primary mt-5 mb-5">
    </form>
  </div>
  <!-- /pull credit report -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>