<?php
require_once 'includes/connection.php';

if(isset($_POST['signup'])){





$firstname = $_POST['forename'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['psw'];
$passwordrepeat = $_POST['psw-repeat'];


if(empty($firstname) || empty($surname) || empty($email) || empty($password) || empty($passwordrepeat)){
    header("Location: ../signup.html?error=emptyfield&fname=".$firstname."&mail=".$email);
    exit(); 
}



$sqlData = "INSERT INTO register (fname, lname, email, password, rePassword) VALUES ('$firstname', '$surname', '$email', 'password', 'passwordrepeat')";
$stmt = mysqli_stmt_init($mysqli);
if(!myqli_stmt_prepare($stmt, $sqlData)){
    header("Location: ../signup.php?error=sqlerror");
    exit();
}
else{
    mysqli_stmt_bind_param($stmt, "s", $firstname);
    mysqli_stmt_execute($stmt);
}


}



