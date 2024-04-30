<?php

include_once './db.connect.php';

// create table 
$sql = "CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pass_word VARCHAR(255),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn,$sql)){
    echo "Table created successfully";
}else{
    echo "Failed to create table ".mysqli_error($conn);
}



mysqli_close($conn);

?>