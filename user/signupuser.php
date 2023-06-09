<?php
    // Include config file
    require_once '../connection.php';
    // Include register file
    include 'function/signupuserf.php';
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
<link rel="stylesheet" href="styleuser.css">

</head>
<body>
<div class="login-form">
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="text-center">
            <a href="index.html" aria-label="Space">
                <img class="mb-3" src="assets/image/logo.png" alt="Logo" width="60" height="60">
            </a>
          </div>
        <div class="text-center mb-4">
            <h1 class="h3 mb-0">Please sign up</h1>
            <p>Fill out the form to get started.</p>
        </div>
     
        <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form" <?= (!empty($email_err)) ? 'has-error' : ''; ?>">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email"value="<?= $email; ?>" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
            <span class="help-block"><?= $email_err; ?></span>
        </div>

        <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form" <?= (!empty($username_err)) ? 'has-error' : ''; ?>">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="text" class="form-control form__input" name="username" value="<?= $username; ?>" placeholder="Username" aria-label="Username" data-msg="Please enter a valid username address." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
            <span class="help-block"><?= $username_err; ?></span>
        </div>

		<div class="form-group" <?= (!empty($password_err)) ? 'has-error' : ''; ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?= $password; ?>">				
            </div>
            <span class="help-block"><?= $password_err; ?></span>
        </div> 
        <div class="form-group" <?= (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-key"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="<?= $confirm_password; ?>">				
            </div>
            <span class="help-block"><?= $confirm_password_err; ?></span>
        </div>          
    
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary login-btn btn-block">Signup</button>
        </div>
        
        <div class="text-center mb-3">
            <p type="submit" class="text-muted">Have an account? <a href="loginuser.php">Signin</a></p>
        </div>
		
     
    </form>
</div>

</body>
</html>