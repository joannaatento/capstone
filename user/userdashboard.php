<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginuser.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Signin Simple</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- --------------style css --------------->
<link rel="stylesheet" href="assets/styles.css">

</head>
<body>
<div class="login-form">
    <form class="js-validate form-signin p-5" action="/examples/actions/confirmation.php" method="post">
        <div class="text-center">
            <a href="index.html" aria-label="Space">
                <img class="mb-3" src="assets/image/logo.png" alt="Logo" width="60" height="60">
            </a>
          </div>
        <div class="text-center mb-4">
            <h1 class="h3 mb-0">Admin Dashboard</h1>
            <p>Welcome to my dashboard</p>
        </div>

        <div class="form-group mb-3">
        <?php  if (isset($_SESSION['email'])) : ?>
            <p class="btn btn-primary login-btn btn-block">Email: <?php echo $_SESSION['email']; ?></p>
            <?php endif ?>
        </div>
        
        <div class="text-center mb-3">
            <p class="text-muted"><a href="function/logoutuserf.php">Logout</a></p>
        </div>
		<div class="or-seperator"><i>OR</i></div>
        
        <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-sm btn-facebook">
                <i class="fa fa-facebook mr-2"></i>
                @soengsouy
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-sm btn-twitter">
                <i class="fa fa-twitter mr-2"></i>
                @soengsouy
              </button>
            </div>
        </div>
        <p class="small text-center text-muted mb-0">All rights reserved. © Space. 2020 soengsouy.com.</p>
    </form>
</div>

</body>
</html>