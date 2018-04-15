<?php
require 'social-login-class.php';

$social_obj = new socialLogin();

// IF LOGIN WITH GOOGLE
if (isset($_GET['google'])) {
    $social_obj->google();
}
?>
<!-- AFTER AUTHENTICATION CLOSE THE WINDOW  -->
<script type="text/javascript">
    window.close();
</script>
