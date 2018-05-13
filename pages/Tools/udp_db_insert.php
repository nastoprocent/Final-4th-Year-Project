<?php

	ob_start();
    session_start();

	$host = "localhost";
    $user = "nastoprocent";
    $pass = "toohard4you";
    $db = "pentesting";
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
        $opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false, ];
        $conn = new PDO($dsn, $user, $pass, $opt);

        //start of session time out
        if( $_SESSION['last_activity'] < time()-$_SESSION['expire_time'] ) { //have we expired?
            //redirect to logout
            header('Location: ../../pages/logout.php?logout');
        } else{
            $_SESSION['last_activity'] = time(); //this was the moment of last activity.
        }
		$_SESSION['logged_in'] = true; //set you've logged in
		$_SESSION['last_activity'] = time(); //your last activity was now, having logged in.
		$_SESSION['expire_time'] = 60*60; //expire time in seconds
    	//end of session time out

    	// if session is not set this will redirect to login page
    	if( !isset($_SESSION['user']) ) {
    		header("Location: ../../Login");
    		exit;
    	}

    	$res = $conn->prepare('SELECT * FROM users WHERE userId = ?');
		if ($res->execute([$_SESSION['user']])) {
			$userRow = $res->fetch();
		}

        $stmt = $conn->prepare("INSERT INTO pentesting.udpscanlog (id, date_time, name, email, ipaddress, websitescanned) VALUES (:id, NOW(), :name, :email, :ipaddress, :websitescanned)");
        $stmt->bindParam(':id', $sqlid);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':ipaddress', $ipaddress);
        $stmt->bindParam(':websitescanned', $websitescanned);
        $sqlid = $_POST['sqlid'];
        $name = $userRow['userName'];
        $email = $userRow['userEmail'];
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $websitescanned = $_POST['domain'];
        $stmt->execute();
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn == null;
?>
