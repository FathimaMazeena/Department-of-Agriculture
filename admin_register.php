<?php
$firstname="Fathima";
$lastname="Mazeena";
$email="admin@gmail.com";
$password = 'admin'; 
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$contact="0773843214";
$usertype="Admin";


require_once 'databaseConnection.php'; 


$sql = "INSERT INTO users (first_name, last_name, email, password, contact_number, user_type) VALUES (?, ?, ?, ?, ?,?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $hashedPassword, $contact, $usertype);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
