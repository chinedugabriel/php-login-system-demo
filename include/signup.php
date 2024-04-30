<?php
session_start();

include_once "./db.connect.php";


if ($_SERVER["REQUEST_METHOD"]=='POST'){

    $fullname = validateFormInput($_POST['fullname']);
    $email = validateFormInput($_POST['email']);
    $password = validateFormInput($_POST['password']);
}

$sql = " INSERT INTO users(fullname,email,pass_word) values('$fullname','$email','$password')";

if(mysqli_query($conn,$sql)){
    // echo "Table created successfully";
    $_SESSION['regMessage'] = 'successful';
    header('location: http://localhost/php_projects/login-system/index.php');

}else{
    // echo "Failed to signUp User ".mysqli_error($conn);
    $_SESSION['error'] = "Failed to signUp ".mysqli_error($conn)." please try again";
    header('location: http://localhost/php_projects/login-system/index.php');

}



mysqli_close($conn);

?>