<?php
session_start();
require_once "./module/database/database.php";


function generateToken($email)
{
    $token = bin2hex(random_bytes(32));
    $sql = "INSERT INTO tokens (email, token, creation_timestamp) VALUES (?, ?, ?)";
    executeQuery($sql, "sss", [$email, $token, time()]);

    $_SESSION['user']['email'] = $email;
    $_SESSION['user']['token'] = $token;
}

function checkForToken()
{

    if (isset($_SESSION['user']['email']) && isset($_SESSION['user']['token'])) {
        $email = $_SESSION['user']['email'];
        $token = $_SESSION['user']['token'];
        $sql = "SELECT creation_timestamp FROM tokens WHERE email = ? AND token = ?";
        $result = executeQuery($sql, "ss", [$email, $token]);
        $user = $result->fetch_assoc();

        if ($user) {
            // a session exists hence it validates the session
            if ($user['creation_timestamp'] + (3600 * 24 * 30) > time()) {
                // the session is valid
                //header("Location: ./index.php");
                return true;
            } else {
                // the current session is expired (30 days has passed)
            }
        }

        return false;
    }
}
