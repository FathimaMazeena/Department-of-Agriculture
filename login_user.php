<?php

 session_start();
 require_once 'databaseConnection.php';
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $email = $_POST["email"];
     $password = $_POST["password"];


     if (empty($email) || empty($password)) {

        header("Location: login.php?error=empty");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: login.php?error=invalidemail");
        exit();
    }

    else{

    $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
     $stmt = mysqli_prepare($conn, $sql);
     mysqli_stmt_bind_param($stmt, "s", $email);
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
 
     if ($row = mysqli_fetch_assoc($result)) {
         if (password_verify($password, $row['password'])) {
             $_SESSION['user_type'] = $row['user_type'];
             $_SESSION['email'] = $email;
 
             if ($_SESSION['user_type'] == 'Admin') {
                 header("Location: admin.php");
             } elseif ($_SESSION['user_type'] == 'Field Officer') {
                 header("Location: fieldOfficer.php");
             } elseif ($_SESSION['user_type'] == 'Farmer') {
                 header("Location: farmer.php");
             } 
             exit();
         }

         else {
            // Password is incorrect
            header("Location: login.php?error=passwordinvalid");
            exit();
        }
     }

    
     else {
        // Email does not exist in the database
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: login.php?error=emailnotexist");
        exit();
    }
     

    }
 }





 
