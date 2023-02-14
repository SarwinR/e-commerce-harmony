<?php
require_once "./module/database/database.php";
require_once "./module/auth/token.php";

tokenExists(checkForToken());

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error_l = login($email, $password);
} else if (isset($_POST['register'])) {
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $error_r = register($fName, $lName, $email, $password, $confirm_password);
}

function register($fName, $lName, $email, $password, $confirm_password)
{
    if ($password == $confirm_password) {
        $sql = "SELECT email FROM users WHERE email = ?";
        $result = executeQuery($sql, "s", [$email]);
        $user = $result->fetch_assoc();
        if ($user) {
            $error = "Email already exists";
            return $error;
        }

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)";
        $result = executeQuery($sql, "ssss", [$fName, $lName, $email, $hashed_password]);
    } else {
        $error = "The passwords do not match";
        return $error;
    }

    // successfull registration
    generateToken($email);
    // $error = "Registration successful";
    // return $error;
    header("Location: ./index.php");
}

function login($email, $password)
{
    $sql = "SELECT password FROM users WHERE email = ?";
    $result = executeQuery($sql, "s", [$email]);
    $user = $result->fetch_assoc();

    if (!$user) {
        $error = "Invalid email or password";
        return $error;
    }

    if (password_verify($password, $user['password'])) {
        // successfull login
        generateToken($email);
        // $error = "Login successful";
        // return $error;
        header("Location: ./index.php");
    } else {
        $error =  "Invalid email or password";
        return $error;
    }
}

function tokenExists($status)
{
    if ($status) {
        echo "<script> 
            alert('You are already logged in!');
            window.location.href='./index.php';
            </script>";
    }
}
