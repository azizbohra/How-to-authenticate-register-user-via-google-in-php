<?php

require_once 'config.php';

// UNSET ALL GOOGLE SESSIONS
if (isset($_SESSION['google_access_token']) && !empty($_SESSION['google_access_token'])) {
    require_once 'lib/google/Google_Client.php';
    $client = new Google_Client();

    // REVOKE THE ACCESS TOKEN
    unset($_SESSION['google_access_token']);
    $client->revokeToken();

    unset($_SESSION['User']);
    $logout = $_SESSION['google_logout'];
    unset($_SESSION['google_logout']);
    session_destroy();

    header('Location: ' . $logout);
}
?>
