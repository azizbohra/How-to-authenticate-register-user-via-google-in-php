<?php
error_reporting(E_ALL);
ob_start();
session_start();

define('BASE_URL', filter_var('http://localhost/websolutionspoint/login-via-google-in-php/', FILTER_SANITIZE_URL));

// For Google
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
define('CLIENT_ID', '654483866161-i6ooodat56ib4frtt7dg3r8apmte0qcn.apps.googleusercontent.com');
define('CLIENT_SECRET', 'GOqI_1qiGyiJ4Absn-rzbWR7');
define('REDIRECT_URI_GOOGLE', 'http://localhost/websolutionspoint/login-via-google-in-php/login.php?google'); //example:http://localhost/social/login.php?google,http://example/login.php?google
define('APPROVAL_PROMPT', 'auto');
define('ACCESS_TYPE', 'offline');
?>
