<?php
require_once 'databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];
    $service = $_POST["service"];


    $check_email_sql = "SELECT * FROM registrations_for_services WHERE email = ?";
    $check_email_stmt = mysqli_prepare($conn, $check_email_sql);
    mysqli_stmt_bind_param($check_email_stmt, "s", $email);
    mysqli_stmt_execute($check_email_stmt);
    $result = mysqli_stmt_get_result($check_email_stmt);

    


    if (empty($first_name) || empty($last_name) || empty($email) ||  empty($contact_number) ||empty($service)) {

        header("Location: farmer.php?error=empty");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: farmer.php?error=invalidemail");
        exit();
    }

    if (mysqli_num_rows($result) > 0) {
        mysqli_stmt_close($check_email_stmt);
        mysqli_close($conn);
        header("Location: farmer.php?error=emailexists");
        exit();
    }



 else{

    $sql = "INSERT INTO registrations_for_services (first_name, last_name, email, contact_number, service) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $first_name, $last_name, $email, $contact_number, $service);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    header("Location: farmer.php?register=success"); 
    exit();

 }


    
}
?>
