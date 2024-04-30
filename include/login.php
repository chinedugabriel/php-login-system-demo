<?php 
session_start();

include_once './db.connect.php';

$email = validateFormInput($_POST['email']);

$password = validateFormInput($_POST['password']);

$sql = "SELECT * FROM users WHERE email='$email' AND pass_word='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result) ){
        // echo "id: ". $row["id"]." Name: ".$row["fullname"]."  Password ".$row["pass_word"];
        $_SESSION["username"] = $row["fullname"];
        $_SESSION["login"] = "#successful";
        header('location: ../page/dashboard.php');

    }
}else{
    // return an error 
    $_SESSION['error'] = "No record found please signup";
    header('location: ../page/dashboard.php');

}



?>