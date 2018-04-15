<?php

//For Configuration key
require_once 'config.php';
//For Google
require_once 'lib/google/Google_Client.php';
require_once 'lib/google/Google_Oauth2Service.php';

class socialLogin {

    function google() {

        $client = new Google_Client();
        $client->setApplicationName("Educatry");
        $client->setClientId(CLIENT_ID);
        $client->setClientSecret(CLIENT_SECRET);
        $client->setRedirectUri(REDIRECT_URI_GOOGLE);
        $client->setApprovalPrompt(APPROVAL_PROMPT);
        $client->setAccessType(ACCESS_TYPE);
        $oauth2 = new Google_Oauth2Service($client);

        if (isset($_GET['code'])) {
            $client->authenticate($_GET['code']);
            $_SESSION['google_access_token'] = $client->getAccessToken();
        }

        if (isset($_SESSION['google_access_token'])) {
            $client->setAccessToken($_SESSION['google_access_token']);
        }

        if (isset($_REQUEST['error'])) {
            echo '<script type="text/javascript">window.close();</script>';
            exit;
        }

        if ($client->getAccessToken()) {
            $user = $oauth2->userinfo->get();
            $_SESSION['User'] = $user;
            $_SESSION['google_access_token'] = $client->getAccessToken();
            $_SESSION['google_logout'] = 'https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=' . BASE_URL;
        } else {
            $authUrl = $client->createAuthUrl();
            header('Location: ' . $authUrl);
        }
    }

}

?>
