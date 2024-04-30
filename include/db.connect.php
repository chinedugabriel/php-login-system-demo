<?php
$servername = 'localhost';
$username = 'root';
$db_password ='';
$dbname = 'taskmanger_demo_db';


$conn = mysqli_connect($servername, $username, $db_password, $dbname);

// check for connection 

if (!$conn ){
    die("connection failed :".mysqli_connect_error());
}


// validate user input

function validateFormInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}