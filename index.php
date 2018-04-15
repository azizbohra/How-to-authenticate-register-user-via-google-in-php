<?php require_once 'config.php'; ?>
<!doctype html>
<html>
    <head><meta charset="utf-8">
        <title>Login</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/oauthpopup.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                //For Google
                $('#google').oauthpopup({
                    path: 'login.php?google',
                    width: 500,
                    height: 500
                });
            });
        </script>

    </head>
    <body>
        <div class="container">

            <?php if (!isset($_SESSION['User'])) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Login with Google</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src='images/google.png' id='google'  style='cursor:pointer;float:left;margin-right:10%;' alt='Sign In in with Google'  />
                    </div>
                </div>
            <?php } ?>

            <?php
            // FOR GOOGLE
            if (isset($_SESSION['google_access_token'])) {
                //print_r($_SESSION['User']);
                ?>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th bgcolor="#f1f1f1" colspan="2">USER PROFILE INFORMATION (BY GOOGLE)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Unique Id</td>
                            <td><b><?= $_SESSION['User']['id'] ?></b></td>
                        </tr>
                        <tr>
                            <td>Email Id</td>
                            <td><?= $_SESSION['User']['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Verified Email Id</td>
                            <td><?= $_SESSION['User']['verified_email'] ?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?= $_SESSION['User']['name'] ?></td>
                        </tr>
                        <tr>
                            <td>Given Name</td>
                            <td><?= $_SESSION['User']['given_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Family Name</td>
                            <td><?= $_SESSION['User']['family_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Google Plus Link</td>
                            <td><a href="<?= $_SESSION['User']['link'] ?>" target="_blank">Google Plus Link</a></td>
                        </tr>
                        <tr>
                            <td>Profile Picture</td>
                            <td><img src="<?= $_SESSION['User']['picture'] ?>" width="100" height="100" alt="Profile Picture"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?= $_SESSION['User']['gender'] ?></td>
                        </tr>
                        <tr>
                            <td>Logout</td>
                            <td><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>

        </div>

    </body>

</html>
