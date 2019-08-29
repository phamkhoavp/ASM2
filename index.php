<!DOCTYPE html>
<html lang="en">

<head>
    <title>ATN || HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <h1 style="background-color: lightgrey; padding: 0.7em; text-align: center; font-family: Time New Roman;">ATN COMPANY</h1>
</head>
<body onload="time()">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                      <img src="https://vignette.wikia.nocookie.net/legogames/images/8/8c/Lego-batman-2-bane.jpg/revision/latest?cb=20131127112933&path-prefix=es" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="login.php" method="POST">
                    <span class="login100-form-title">
                        LOGIN FOR ADMIN
                    </span>
                    <form action="custommer.html">
                    <div class="wrap-input100 validate-input"
                        data-validate="Bạn cần nhập đúng thông tin như: ex@abc.xyz">
                        <input class="input100" type="text" placeholder="Enter username" name="username" id="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password không được bỏ trống!">
                        <input class="input100" type="password" placeholder="Enter password" name="current-password"
                            id="password-field">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="submit" value="LOGIN" />
                    </div>
                </form>
                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot?
                    </span>
                    <a class="txt2" href="/tim-lai-mat-khau.html">
                        Username / Password?
                    </a>
                </div>  
                </form>
            </div>
        </div>
    </div>
</body>
</html>