<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Password</title>
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
</head>

<body onload="time()">
    <div id="clock"></div>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/Key-icon.png" alt="IMG">
                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i><Br>
                        Search Account
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Email error(example: ex@abc.xyz)">
                        <input class="input100" type="text" placeholder="Enter Email" name="emailInput" id="emailInput" value="" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="button" onclick="return RegexEmail('emailInput')" value="Send" />
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Back to Login
                        </span>
                        <a class="txt2" href="/index.html">
                            Click here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script type="text/javascript">
      //  function validate() {
      //      var email = document.getElementById("email").value;
       //     if (email == null || email == "") {
        //        swal("Bạn Chưa Nhập Email", "Vui Lòng Kiểm Tra", "warning");
        //        return false;
        //    }
        //}
        function RegexEmail(emailInputBox) {
            var emailStr = document.getElementById(emailInputBox).value;
            var emailRegexStr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            var isvalid = emailRegexStr.test(emailStr);
            if (!isvalid) {
                swal("error! Opps", "Maybe You Didn't Enter Email Or Error Enter", "error");
                emailInputBox.focus;
            }
            else {
                swal("Notification! "," We Sent Email Information to You!", "success");
                emailInputBox.focus;
                window.location = "#";
            }
        }
    </script>
</body>

</html>