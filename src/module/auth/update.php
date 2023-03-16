<?php

if (session_status() !== PHP_SESSION_ACTIVE) session_start();

require_once "./module/database/database.php";
require_once "./module/auth/token.php";

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];

    $error_u = update($firstName, $lastName, $email, $currentPassword, $newPassword, $confirmNewPassword);

    if ($error_u === true) {
        $_SESSION['profile_update_error'] = "Update successful";
        //echo "Update successful";
    } else {
        $_SESSION['profile_update_error'] = $error_u;
        //echo $error_u;
    }
}

function update($firstName, $lastName, $email, $currentPassword, $newPassword, $confirmNewPassword)
{
    // Check if the new password and confirmation match
    if ($newPassword !== $confirmNewPassword) {
        return "New password and confirmation do not match";
    }



    // Retrieve the current user data from the database
    $sql = "SELECT * FROM users WHERE email=?";
    $result = executeQuery($sql, "s", [$email]);
    $user = $result->fetch_assoc();

    if (!$user) {
        return "User not found";
    }

    // Verify the current password
    if (!password_verify($currentPassword, $user['password'])) {

        return "Current password is incorrect";
    }


    if (empty($newPassword)) {
        // New password is empty, do not update the password in the database
        $sql = "UPDATE users SET firstName=?, lastName=?, email=? WHERE email=?";
        $result = executeQuery($sql, "ssss", [$firstName, $lastName, $email, $email]);
    } else {
        // Update the user data in the database
        $sql = "UPDATE users SET firstName=?, lastName=?, email=?, password=? WHERE email=?";
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $result = executeQuery($sql, "sssss", [$firstName, $lastName, $email, $hashedPassword, $email]);

        // Check if the update was successful
        if ($result) {
            // Check if the first name, last name, and email were updated
            $sql = "SELECT * FROM users WHERE email=?";
            $result = executeQuery($sql, "s", [$email]);
            $updatedUser = $result->fetch_assoc();

            if ($updatedUser['firstName'] === $firstName && $updatedUser['lastName'] === $lastName && $updatedUser['email'] === $email) {
                return "Update successful";
            } else {
                return "Update unsuccessful";
            }
        } else {
            return "Update unsuccessful";
        }
    }
}
