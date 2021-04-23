<?php
 $firstName = $_POST['firstname'];
 $lastName = $_POST['lastname'];
 $email = $_POST['email'];
 $password = $_POST['password'];


 // Database connection
 $conn = mysqli_connect('sots.brookes.ac.uk','18075911','ugcsvqcpvaju','18075911');
 if($conn->connect_error){
     echo "$conn->connect_error";
     die("Connection Failed : ". $conn->connect_error);
 } else {
     $stmt = $conn->prepare("INSERT INTO `account`(`firstname`, `lastname`, `email`, `password`)  VALUES(?, ?, ?, ?)");
     $stmt->bind_param("ssss", $firstname, $lastname,$email, $password);
     $execval = $stmt->execute();
     echo $execval;
     echo "Registration successfully...";
     $stmt->close();
     $conn->close();
 }










?>