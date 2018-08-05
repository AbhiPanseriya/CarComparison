

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car Comparison System</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">



</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="login/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="signup123.php" method="post">
                    <span class="login100-form-title">
                        For Become Member
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" placeholder="Username" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password and Confirm Password ust be same">
                        <input class="input100" type="password" name="confirmpass" placeholder="Confirm Passowrd" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                   <label id="er"></label>
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit" value="Sign-up">
                            Sign Up
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Alerday have account
                        </span>
                        <a class="txt2" href="./login.php">
                            Login
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

<script>
    <?php 
    session_start();
    if(isset($_SESSION['error']))
    {
?>
        document.getElementById("er").innerHTML ="Password and Confirm Password are wrong try again";//titary[c]


    <?php }
    ?>
    </script>
    
  
    
    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="login/vendor/bootstrap/js/popper.js"></script>
    <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="login/vendor/select2/select2.min.js"></script>
    <script src="login/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="js/main.js"></script>

</body>
</html>