<?php
	require_once("config/registration.php");
?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to PenTester</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="indexCss/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/dist/css/registration.css" rel="stylesheet" type="text/css">
    
</head>
<body>

	<div class="container">
	    <div class="">
	        <div class="col-md-6 col-md-offset-3">
	        	 <div class="login-panel panel panel-default">
	        		 <div class="panel-body">
			        	 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
		        	
				            <div class="panel-heading">
				            	<h3 class="panel-title">Register into Penetration Testing</h2>
				            </div>
				        
				        	<div class="form-group">
				            	<hr />
				            </div>
				            
				            <?php
							if ( isset($errMSG) ) {
								?>
								<div class="form-group">
				            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
								<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
				                </div>
				            	</div>
				                <?php
							}
							?>
				            
				            <div class="form-group">
				            	<label>Username</label>
				            	<div class="input-group">
					                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					            	<input type="text" name="name" class="form-control" title="Must be at least 8 characters and only letters." placeholder="Enter your name only" maxlength="50" value=""/>
				                </div>
				                <span class="text-danger"><?php echo $nameError; ?></span>
				            </div>
				            
				            <div class="form-group">
				            	<label>Email</label>
				            	<div class="input-group">
				              		<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
				            		<input type="email" name="email" class="form-control" title="Only gmail email address is accepted." placeholder="Enter yout gmail email address" maxlength="40" value="" />
				                </div>
				                <span class="text-danger"><?php echo $emailError; ?></span>
				            </div>
				            
				            <div class="form-group">
				            	<label>Reapeat Email</label>
				            	<div class="input-group">
				              		<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
				            		<input type="email" name="email2" class="form-control" title="Make sure that everything is spelled correctly"  placeholder="Re-enter the email" maxlength="40" value="" />
				                </div>
				                <span class="text-danger"><?php echo $email2Error; ?></span>
				            </div>
				            
				            <div class="form-group">
				            	<label>Password</label>
				            	<div class="input-group">
					                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
					            	<input type="password" name="pass" class="form-control" title="Password should contain at least 8 characters, 1 big letter, 1 small letter and 1 digit. As also the password should not be the same as the name of the user." placeholder="Chouse your password." maxlength="15" />
					            </div>
				                <span class="text-danger"><?php echo $passError; ?></span>
				            </div>
				            
				            <div class="form-group">
				            	<label>Reapeat Password</label>
				            	<div class="input-group">
					                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
					            	<input type="password" name="pass2" class="form-control" title="Repeat the password." placeholder="Confirm your password." maxlength="15" />
					            </div>
				                <span class="text-danger"><?php echo $pass2Error; ?></span>
				            </div>
				            
				            <div class="form-group">
				            	<center><text>Enter only the 3 </text><b>Black</b><text> characters from Captcha: </text></center>
								<div class="input-group" align="center">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<img src="../captcha.php" alt="captcha image" id="captcha" width="100%" height="80px"><br />
									<input type="text" id="captcha" class="form-control" name="captcha" size="6" maxlength="3" placeholder="Please enter captcha code here.">
								</div>
								<span class="text-danger"><?php echo $captchaErr?></span>
							</div>
				            
				            <div class="form-group">
				            	<hr />
				            </div>
				            
				            <div class="form-group">
				            	<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
				            </div>
				            
				            <div class="form-group">
				            	<hr />
				            </div>
				            
				            <div class="form-group">
				            	<a href="Login">Sign in Here...</a>
				            </div>
			       		</form>
			       	</div>
		    	</div>
        	</div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>