<?php

require_once "./module/database/database.php";

function logout()
{
    if (isset($_SESSION['user']['email']) && isset($_SESSION['user']['token'])) {
        $email = $_SESSION['user']['email'];
        $token = $_SESSION['user']['token'];
        $sql = "DELETE FROM tokens WHERE email = ? AND token = ?";
        executeQuery($sql, "ss", [$email, $token]);
        session_destroy();
        echo "<script> 
        alert('logged out!');
        window.location.href='./index.php';
        </script>";
    }
}
function getUser(){
  
    if (isset($_SESSION['user']['email']) && isset($_SESSION['user']['token'])) {
        $email = $_SESSION['user']['email'];
        $sql = "SELECT firstName,lastName FROM users WHERE email = ?";
        $result = executeQuery($sql, "s", [$email]);
        $user = $result->fetch_assoc();
        return $user;
    
    }




}