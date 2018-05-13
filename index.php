<?php
	require_once ("config/login.php");
?>
<!DOCTYPE html>
<html lang="en">

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

</head>

<body>

  <div class="container">
	<div class="row">
		<div id="login-form">
			<div class="col-md-8 col-md-offset-2">
                <div class="login-panel panel panel-default">
                	<div class="panel-body">
				   		 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
				        
				        	<div class="panel-heading">
				            	<h3 class="panel-title">Penetration Testing</h2>
				            </div>
				        
	                        <hr />
				            
				            <?php
							if ( isset($errMSG) ) {
								
								?>
								<div class="form-group">
				            	<div class="alert alert-danger">
								<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
				                </div>
				            	</div>
				                <?php
							}
							?>
				            
				            <div class="form-group">
				                <label>Email</label>
				            	<div class="input-group">
				                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
				            	<input type="email" name="email" class="form-control" placeholder="Gmail Email" value="<?php echo $email; ?>" maxlength="40" />
				                </div>
				                <span class="text-danger"><?php echo $emailError; ?></span>
				            </div>
				            
				            <div class="form-group">
				                <label>Password</label>
				            	<div class="input-group">
				                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				            	<input type="password" name="pass" class="form-control" placeholder="Password" maxlength="15" />
				                </div>
				                <span class="text-danger"><?php echo $passError; ?></span>
				            </div>
				            
				            	<hr />
				            
				            <div class="form-group">
				            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
				            </div>
				            
				            	<hr />
				            	
				            <div class="form-group">
				            	<a href="Register">Sign Up Here...</a>
				            </div>
				    	</form>
				    </div>
			    </div>
	    	</div>
		</div>
	</div>
</div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>