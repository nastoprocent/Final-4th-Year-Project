<?php
	ob_start();
	session_start(); // Starts the session
	if( isset($_SESSION['user'])!="" ){
		header("Location: home.php");
	}
    require_once ("db.php");

	$error = false;

	if (isset($_POST['btn-signup'])){
		
		// clean user inputs to prevent sql injections (attacks)
		$name = trim($_POST['name']);																				
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$email2 = trim($_POST['email2']);
		$email2 = strip_tags($email2);
		$email2 = htmlspecialchars($email2);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		$pass2 = trim($_POST['pass2']);
		$pass2 = strip_tags($pass2);
		$pass2 = htmlspecialchars($pass2);
		
		$captcha = trim($_POST['captcha']);
		$captcha = strip_tags($captcha);
		$captcha = htmlspecialchars($captcha);

		// NAME VALIDATION
		if (empty($name)){
			$error = true;
			$nameError = "Please enter your full name."; // Checking if the name box is empty
		} 
		else if (strlen($name) < 3){ //length of name at least 3 letters
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} 
		else if (!preg_match("/^[a-zA-Z ]+$/",$name)){ //checking if the name contains only letters (small or capital)
			$error = true;
			$nameError = "Name must contain only letters.";
		}
		// NAME VALIDATION
		
		
		// EMAIL VALIDATION
		if(!preg_match('/^[a-zA-Z0-9.]+@gmail\.com$/', $email)){ // forcing exact email
		    // Return Error - Invalid Email
		    $error = true;
		    $emailError = 'The email you have entered is invalid, please try again.';
		} 
		else{
			// check email exist or not
			$res = $conn->prepare("SELECT userEmail FROM users WHERE userEmail = ? ");
			$res -> execute([$email]);
			$row = $res->fetch(PDO::FETCH_ASSOC);
			$count = $res->rowCount();
			
			if($count !== 0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		
		//Confirming the match of emails
		if(empty($email2)){
			$error = true;
			$email2Error = "Please confirm your email.";
		}
		else if($_POST['email']!= $_POST['email2']){
		    $error = true;
		    $pass2Error = "Oops! Email's do not match! Try again.";
		 }
		// EMAIL VALIDATION
		
		// PASSWORD VALIDATION
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} 
		else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		else if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,120}$/', $pass)){
			$error = true;
			$passError = "Passwords needs at least one number, at least one small and one capital letter as also the length of 8+ ";
		}
		else if(empty($pass2)){
			$error = true;
			$pass2Error = "Please confirm your password.";
		}
		else if($_POST['pass']!= $_POST['pass2']){
		    $error = true;
		    $pass2Error = "Oops! Password's do not match! Try again.";
		 }
		else if($_POST['pass'] == $_POST['name']){
			$error = true;
			$passError = "Password cannot be the same as name";
		}
		// PASSWORD VALIDATION
		
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		
		// CAPTCHA VALIDATION
		if(empty($captcha)){
			$error = true;
			$captchaErr = "Please write 3 black letteres from captcha.";
		}
		else if($_SESSION['captcha']!==$_POST['captcha']){
				$error = true;
				$captchaErr = "Incorrect Captcha, Please try again.";
			}
		// CAPTCHA VALIDATION
		
		// if there's no error, continue to signup
		if( !$error ){
			
	        $stmt = $conn->prepare("INSERT INTO users (userName, userEmail, userPass) VALUES (:userName, :userEmail, :userPass)");
	        $stmt->bindParam(':userName', $name);
	        $stmt->bindParam(':userEmail', $email);
	        $stmt->bindParam(':userPass', $password);
	        $stmt->execute();
			
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($email);
				unset($email2);
				unset($pass);
				unset($pass2);
				unset($captcha);
			} 
			else{
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
	}
	
?>