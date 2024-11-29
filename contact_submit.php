<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];
    $question = $_POST["question"];

    require_once 'databaseConnection.php';

    $sql = "INSERT INTO questions (name, email, contact_number, question) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $contact_number, $question);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    if (empty($name) || empty($email) || empty($contact_number) || empty($question)) {
    
        header("Location: contact.php?error=empty");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=invalidemail");
        exit();
    }

    else{
        header("Location: contact.php?submit=success");
        exit();
    }

}
?>
