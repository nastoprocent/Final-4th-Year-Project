<?php
	ob_start();
	session_start(); // Starts the session 
	
	  //start of session time out
    if( $_SESSION['last_activity'] < time()-$_SESSION['expire_time'] ) { //have we expired?
        //redirect to logout
        header('Location: Logout-from-the-site');
    } else{ 
        $_SESSION['last_activity'] = time(); //this was the moment of last activity.
    }
        $_SESSION['logged_in'] = true; //set you've logged in
        $_SESSION['last_activity'] = time(); //your last activity was now, having logged in.
        $_SESSION['expire_time'] = 1*60; //expire time in seconds: three hours (you must change this)
	//end of session time out
	
	require_once ("db.php");// Import the file "db.php" which is the connection of project with the database
	
	if ( isset($_SESSION['user'])!="" ) { // It will never let you open index(login) page if you are logged in
		header("Location: ../Dashboard"); // Automatic send to mainpage.php and blocking index page.
		exit;
	}
	
	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
		// Prevent sql injections (attacks) / clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// Prevent sql injections (attacks) / clear user invalid inputs
		
		// If there's no error this code allows the user to log in:
		if (!$error) {
			
			$password = hash('sha256', $pass); // Password hashing using SHA256 it is encripting of the password that the user is entering so that third people cant read it, to check it do SELECT * FROM users;
			$res = $conn->prepare('SELECT userId, userName, userPass FROM users WHERE userEmail = ? LIMIT 1');
			$res->execute([$email]);
			$row = $res->fetch(PDO::FETCH_ASSOC);
			$count = $res->rowCount();
			
			//$res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'"); // Takes the data from the database where the userEmail is equal to the $email that has been inserted
			//$row=mysql_fetch_array($res);	// $row = mysql_fetch_array($res)it is returning the row
			//$count = mysql_num_rows($res); // If the mail and password correct, it will return only one row
			
			if( $count == 1 && $row['userPass'] == $password ) { // it is taking the userPass and user Id for the session, if the data inserted during login is correct (rest of description line 50) -
				$_SESSION['user'] = $row['userId'];
				header("Location: Dashboard"); // - header("Location: mainpage.php"); moves the user to the mainpage.php just if the users data is correct
			} else {
				$errMSG = "Incorrect Credentials, Try again..."; // returning error if anything goes wrong.
			}
				
		}
		
	}
	
?>