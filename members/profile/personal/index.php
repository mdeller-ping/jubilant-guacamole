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

    <!-- personal info -->
    <div class="container mt-5" id="accountUpdateDiv">
        <h2 class="mt-4">Personal Information</h2>
        <form method="POST">
        <div class="form-row mt-5">
                <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" value="<?php echo $_SERVER['HTTP_X_PA_GIVENNAME'] ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputMiddleName">Middle Name (Optional)</label>
                    <input type="text" class="form-control" id="inputMiddleName" value="<?php echo $_SERVER['HTTP_X_PA_MIDDLENAME'] ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" value="<?php echo $_SERVER['HTTP_X_PA_SN'] ?>" required>
                </div>
            </div>

            <hr>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStreet">Address and Unit Number</label>
                    <input type="text" class="form-control" id="inputStreet" value="<?php echo $_SERVER['HTTP_X_PA_STREET'] ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" value="<?php echo $_SERVER['HTTP_X_PA_CITY'] ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" required>
            <option selected>Choose...</option>
            <option value="AL" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'AL') echo ' selected'; ?>>Alabama</option>
            <option value="AK" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'AK') echo ' selected'; ?>>Alaska</option>
            <option value="AZ" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'AZ') echo ' selected'; ?>>Arizona</option>
            <option value="AR" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'AR') echo ' selected'; ?>>Arkansas</option>
            <option value="CA" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'CA') echo ' selected'; ?>>California</option>
            <option value="CO" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'CO') echo ' selected'; ?>>Colorado</option>
            <option value="CT" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'CT') echo ' selected'; ?>>Connecticut</option>
            <option value="DE" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'DE') echo ' selected'; ?>>Delaware</option>
            <option value="DC" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'DC') echo ' selected'; ?>>District Of Columbia</option>
            <option value="FL" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'FL') echo ' selected'; ?>>Florida</option>
            <option value="GA" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'GA') echo ' selected'; ?>>Georgia</option>
            <option value="HI" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'HI') echo ' selected'; ?>>Hawaii</option>
            <option value="ID" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'ID') echo ' selected'; ?>>Idaho</option>
            <option value="IL" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'IL') echo ' selected'; ?>>Illinois</option>
            <option value="IN" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'IN') echo ' selected'; ?>>Indiana</option>
            <option value="IA" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'IA') echo ' selected'; ?>>Iowa</option>
            <option value="KS" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'KS') echo ' selected'; ?>>Kansas</option>
            <option value="KY" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'KY') echo ' selected'; ?>>Kentucky</option>
            <option value="LA" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'LA') echo ' selected'; ?>>Louisiana</option>
            <option value="ME" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'ME') echo ' selected'; ?>>Maine</option>
            <option value="MD" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'MD') echo ' selected'; ?>>Maryland</option>
            <option value="MA" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'MA') echo ' selected'; ?>>Massachusetts</option>
            <option value="MI" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'MI') echo ' selected'; ?>>Michigan</option>
            <option value="MN" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'MN') echo ' selected'; ?>>Minnesota</option>
            <option value="MS" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'MS') echo ' selected'; ?>>Mississippi</option>
            <option value="MO" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'MO') echo ' selected'; ?>>Missouri</option>
            <option value="MT" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'MT') echo ' selected'; ?>>Montana</option>
            <option value="NE" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'NE') echo ' selected'; ?>>Nebraska</option>
            <option value="NV" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'NV') echo ' selected'; ?>>Nevada</option>
            <option value="NH" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'NH') echo ' selected'; ?>>New Hampshire</option>
            <option value="NJ" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'NJ') echo ' selected'; ?>>New Jersey</option>
            <option value="NM" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'NM') echo ' selected'; ?>>New Mexico</option>
            <option value="NY" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'NY') echo ' selected'; ?>>New York</option>
            <option value="NC" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'NC') echo ' selected'; ?>>North Carolina</option>
            <option value="ND" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'ND') echo ' selected'; ?>>North Dakota</option>
            <option value="OH" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'OH') echo ' selected'; ?>>Ohio</option>
            <option value="OK" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'OK') echo ' selected'; ?>>Oklahoma</option>
            <option value="OR" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'OR') echo ' selected'; ?>>Oregon</option>
            <option value="PA" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'PA') echo ' selected'; ?>>Pennsylvania</option>
            <option value="RI" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'RI') echo ' selected'; ?>>Rhode Island</option>
            <option value="SC" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'SC') echo ' selected'; ?>>South Carolina</option>
            <option value="SD" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'SD') echo ' selected'; ?>>South Dakota</option>
            <option value="TN" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'TN') echo ' selected'; ?>>Tennessee</option>
            <option value="TX" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'TX') echo ' selected'; ?>>Texas</option>
            <option value="UT" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'UT') echo ' selected'; ?>>Utah</option>
            <option value="VT" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'VT') echo ' selected'; ?>>Vermont</option>
            <option value="VA" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'VA') echo ' selected'; ?>>Virginia</option>
            <option value="WA" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'WA') echo ' selected'; ?>>Washington</option>
            <option value="WV" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'WV') echo ' selected'; ?>>West Virginia</option>
            <option value="WI" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'WI') echo ' selected'; ?>>Wisconsin</option>
            <option value="WY" <?php if ($_SERVER['HTTP_X_PA_STATE'] == 'WY') echo ' selected'; ?>>Wyoming</option>
          </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPostal">Zip Code</label>
                    <input type="number" class="form-control" id="inputPostal" value="<?php echo $_SERVER['HTTP_X_PA_ZIP'] ?>" required>
                </div>
            </div>
            
            <a href="#" class="btn btn-primary mt-5 mb-5" onclick="javascript:updateAccount();">Update</a>
            <a href="/profile/" class="btn btn-danger">Cancel</a>
        </form>
    </div>
    <!-- personal info -->

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

        function updateAccount() {
            console.log('updateAccount function called');

            firstName = $('#inputFirstName').val();
            middleName = $('#inputMiddleName').val();
            lastName = $('#inputLastName').val();
            street = $('#inputStreet').val();
            city = $('#inputCity').val();
            state = $('#inputState').val();
            zip = $('#inputPostal').val();

            body = JSON.stringify({
                "givenName": [firstName],
                "transUnionMiddleName": middleName,
                "sn": [lastName],
                "street": [street],
                "l": [city],
                "st": [state],
                "postalCode": [zip]
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