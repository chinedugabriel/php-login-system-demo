<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system</title>
    <link rel="stylesheet" href="./src/style.css">
</head>
<body onload="messageAlert()" >
    <nav>
        <img src="./img/taskify-logo (1).png" alt="" srcset="">
    </nav>
    <section class="sec-1">
        <div class="text-wrapper">
            <p>"Stay On Track"</p>
            <p>Every task at a time</p>
            <p>let's make progress, one task at a time. Every completed task is a step closer to archiving your goals.</p>
            <div class="btn-wrapper">
                <button type="button" id="btn-register">
                    Register
                </button>
                <button type="button" id="btn-login">
                    Login
                </button>
            </div>
        </div>
    </section>

    <section class="sec-2-login" id="login-form">
        <div class="form-wrapper">
            <div class="icon-close" id="close-login-form"></div>

            <!-- <img src="./img/taskify-logo (1).png" alt="" srcset=""> -->

            <h1>
                Login
            </h1>
            <form action="./include/login.php" method="POST">
                <p>
                    User Name:
                </p>
                    <input type="email" name="email" id="" require>
                <p>
                    Password:
                </p>
                    <input type="text" name="password" id="" require>
                <button type="submit" class="custom-btn-line">
                    Submit
                </button>
            </form>
        </div>
    </section>
    <section class="sec-2-login" id="signup-form">
        <div class="form-wrapper">
            <div class="icon-close" id="close-signup-form"></div>

            <h1>
                SignUp
            </h1>
            <form action="./include/signup.php" method="POST">
                <p>
                    User Name:
                </p>
                    <input type="text" name="fullname" id="" require>
                <p>
                    Email:
                </p>
                <input type="text" name="email" id="" require>
                <p>
                    Password:
                </p>
                    <input type="text" name="password" id="" require>
                <button type="submit" class="custom-btn-line">
                    Submit
                </button>
            </form>
        </div>
    </section>

    <!-- Alert message -->
<?php
//  This checks if the process was successful and shows an alert for success Message 
   if(isset($_SESSION['regMessage'])){
        if($_SESSION['regMessage'] == 'successful'){
            echo '<div class="success" id="successMessage">
            <img src="./img/icons/tumb.png" alt="">
            <p>Registration Successful</p>
        </div>';
        session_unset();
        session_destroy();

        }
   }
   if(isset($_SESSION['error'])){
            echo "<div class='success' id='successMessage'>
            <img src='./img/icons/tumb-down.png' alt=''>
            <p>".$_SESSION['error']."</p>
        </div>";
        session_unset();
        session_destroy();

        
   }

?>
    <!-- <div class="success" id="successMessage">
        <img src="./img/icons/tumb.png" alt="">
        <p>Registration Successful</p>
    </div> -->

    <script src="./src/login_system.js"></script>
</body>
</html>