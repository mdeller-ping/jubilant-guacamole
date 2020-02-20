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
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputDateOfBirth">Date of Birth (YYYY-MM-DD)</label>
                    <input type="text" class="form-control" id="inputDateOfBirth" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLastFour">Last 4 Digits of Social Security Number</label>
                    <input type="text" class="form-control" id="inputLastFour" required>
                </div>
            </div>

            <hr>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputMail">Email Address</label>
                    <input type="email" class="form-control" id="inputMail" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputMobile">Mobile Number</label>
                    <input type="tel" class="form-control" id="inputMobile" required>
                </div>
            </div>

            <hr>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStreet">Address and Unit Number</label>
                    <input type="text" class="form-control" id="inputStreet" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" required>
            <option selected>Choose...</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPostal">Zip Code</label>
                    <input type="number" class="form-control" id="inputPostal" required>
                </div>
            </div>

            <hr>

            <div class="form-row">
            </div>

            <p>Have you lived here for more than 6 months?</p>

            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inputSixMonths" id="inputSixMonths" value="true" checked>
                    <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inputSixMonths" id="inputSixMonths" value="false">
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <a href="#" class="btn btn-primary mt-5 mb-5" onclick="javascript:createPlaceHolder();">Next Step</a>
        </form>
    </div>
    <!-- /page 1 - personal info -->

    <!-- page 2 - account info -->
    <div class="container collapse" id="accountInfoDiv">
        <h2>Create Your Account</h2>
        <p class="mb-5">All fields are required (except where noted).</p>
        <form id="registration" method="POST">
            <input type="hidden" id="inputDistinguishedName">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" required>
                </div>
            </div>
            <div class="form-row">
            </div>

            <a href="#" class="btn btn-primary mt-5 mb-5" onclick="javascript:createAccount();">Next Step</a>
        </form>
    </div>
    <!-- /page 2 - account info -->

    <!-- page 3 - all done -->
    <div class="container collapse" style="height: 800px;" id="allDoneDiv">
        <h2>Thank You</h2>
        <p class="mb-5">Your account has been created and your password assigned.</p>
        <p class="mb-5">You will be redirected to the login page in 5 seconds. If not, go directly to <a href="https://members.tu.demoenvi.com">Member Tools</a>.</p>
    </div>

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

        function createPlaceHolder() {
            console.log('createPlaceHolder function called');

            firstName = $('#inputFirstName').val();
            middleName = $('#inputMiddleName').val();
            lastName = $('#inputLastName').val();
            dateOfBirth = $('#inputDateOfBirth').val();
            lastFour = $('#inputLastFour').val();
            mail = $('#inputMail').val();
            mobile = $('#inputMobile').val();
            street = $('#inputStreet').val();
            city = $('#inputCity').val();
            state = $('#inputState').val();
            postalCode = $('#inputPostal').val();

            sixMonths = $("input[name='inputSixMonths']:checked").val();
            sixMonths = (sixMonths == 'true');

            body = JSON.stringify({
                "_parentDN": "ou=people,dc=example,dc=com",
                "objectClass": ["transUnionPerson"],
                "givenName": [firstName],
                "transUnionMiddleName": middleName,
                "sn": [lastName],
                "cn": [firstName + " " + lastName],
                "mail": [mail],
                "transUnionDOB": dateOfBirth,
                "transUnionLastFour": lastFour,
                "street": [street],
                "l": [city],
                "st": [state],
                "postalCode": [postalCode],
                "mobile": [mobile],
                "transUnionMoreThanSixMonths": sixMonths,
                "transUnionPlan": "None"
            });

            var settings = {
                "url": "https://" + pingDirectory + "/directory/v1",
                "method": "POST",
                "accept": "json",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json",
                    "Authorization": "Basic " + authHeader
                },
                "data": body
            };

            $.ajax(settings)
                .done(function(data) {
                    console.log("Account created");
                    distinguishedName = data._dn;
                    console.log(distinguishedName);
                    $('#warningMessage').text('');
                    $('#warningDiv').hide();
                    $('#personalInfoDiv').hide();
                    $('#inputUsername').val(mail);
                    $("#inputDistinguishedName").val(distinguishedName);
                    $('#accountInfoDiv').show();
                })
                .fail(function(data, status, error) {
                    console.log("Unable to create account");
                    var responseText = $.parseJSON(data.responseText);
                    $('#warningMessage').text(responseText.details[0].message);
                    $('#warningDiv').show();
                })

        }

        function createAccount() {
            console.log('createAccount function called');

            username = $('#inputUsername').val();
            password = $('#inputPassword').val();
            distinguishedName = $('#inputDistinguishedName').val();

            body = JSON.stringify({
                "uid": [username],
                "userPassword": [password]
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
                    console.log("Password assigned");
                    $('#warningMessage').text('');
                    $('#warningDiv').hide();
                    $('#accountInfoDiv').hide();
                    $('#personalInfoDiv').hide();
                    $('#allDoneDiv').show();
                    setTimeout(function() {
                        window.location.href = 'https://members.tu.demoenvi.com/';
                    }, 5000);
                })
                .fail(function(data, status, error) {
                    console.log("Unable to assign password");
                    var responseText = $.parseJSON(data.responseText);
                    $('#warningMessage').text(responseText.details[0].message);
                    $('#warningDiv').show();
                })

        }
    </script>
</body>

</html>