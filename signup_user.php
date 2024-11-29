<?php

        require_once 'databaseConnection.php';

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];
            $contact_number = $_POST["contact_number"];
            $user_type="Farmer";
        

            $check_email_sql = "SELECT * FROM users WHERE email = ?";
            $check_email_stmt = mysqli_prepare($conn, $check_email_sql);
            mysqli_stmt_bind_param($check_email_stmt, "s", $email);
            mysqli_stmt_execute($check_email_stmt);
            $result = mysqli_stmt_get_result($check_email_stmt);

            if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password) || empty($contact_number)) {
    
                header("Location: signup.php?error=empty");
                exit();
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: signup.php?error=invalidemail");
                exit();
            }

            if (mysqli_num_rows($result) > 0) {
                mysqli_stmt_close($check_email_stmt);
                mysqli_close($conn);
                header("Location: signup.php?error=emailexists");
                exit();
            }

            // Check if passwords match
            if ($password !== $confirm_password) {
                header("Location: signup.php?error=passwordunmatched");
                exit();
            }
        
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
            // Insert data into users table
            $sql = "INSERT INTO users (first_name, last_name, email, password, contact_number, user_type) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssssss", $first_name, $last_name, $email, $hashed_password, $contact_number,$user_type);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        
            mysqli_close($conn);
        
            header("Location: farmer.php");
            exit();
        }
        ?>
        










