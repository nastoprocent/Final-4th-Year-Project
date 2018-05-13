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
		$_SESSION['expire_time'] = 10*60; //expire time in seconds
    	//end of session time out

    	// if session is not set this will redirect to login page
    	if( !isset($_SESSION['user']) ) {
    		header("Location: ../../Login");
    		exit;
    	}

    	$session_user = $_SESSION['user'];
    	$query_session = $conn->prepare('SELECT * FROM users WHERE userId = ?');
		if ($query_session->execute([$session_user])) {
			$row_session = $query_session->fetch();
		}

    	$res = $conn->prepare('SELECT * FROM users WHERE userId = ?');
		if ($res->execute([$_SESSION['user']])) {
			$userRow = $res->fetch();
		}

        // Function to get the client ip address
        $IP = $_SERVER['REMOTE_ADDR'];
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PenTesters</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  
    <link href="../../../vendor/bootstrap/css/bootstrapmain.css" rel="stylesheet">
    <link href="../../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../../../vendor/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../../vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../../../pages/Tools/sqlmap/css/css.css" rel="stylesheet">
    <link href="../../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../../../Dashboard">Penetration Testing</a>
                </div>
            <!-- Left top, displaying the title -->
            
            <!-- Right top menu -->
            <ul class="nav navbar-top-links navbar-right">
                
                <!--- Add patch to the right top menu --->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i><span class="menu-text">Patch </span><i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                                <!-- Adding Maintainence progress bar -->
                                <li>
                                    <a>
                                        <div>
                                            <p>
                                                <strong>Maintenance of website</strong>
                                                <span class="pull-right text-muted">100% Complete</span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">100% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- Adding Maintainence progress bar -->
                                
                                    <li class="divider"></li>
                                    
                                <!-- Adding services progress bar -->
                                <li>
                                    <a>
                                        <div>
                                            <p>
                                                <strong>Services online</strong>
                                                <span class="pull-right text-muted">100% Complete</span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">100% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- Adding services progress bar -->
                        </ul>
                    </li>
                <!--- Add patch to the right top menu --->
                <!-- Add user logout -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><span class="menu-text"><?php echo $row_session['userName']; ?></span><i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="../../../pages/logout.php?logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                        </ul>
                    </li>
                <!-- Add user logout -->
            </ul>
            <!-- Right top menu -->
            
            
            <!-- left side navigation -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                               <script>
                    /* When the user clicks on the button,
                    toggle between hiding and showing the dropdown content */
                    function myFunction() {
                        document.getElementById("myDropdown").classList.toggle("show");
                    }
                    
                    function filterFunction() {
                        var input, filter, ul, li, a, i;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        div = document.getElementById("myDropdown");
                        a = div.getElementsByTagName("a");
                        for (i = 0; i < a.length; i++) {
                            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                                a[i].style.display = "";
                            } else {
                                a[i].style.display = "none";
                            }
                        }
                    }
                    </script>
                                            
                     <li>
                     <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Search...  <i class="fa fa-search"></i></button>
                          <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search Tools.." id="myInput" onkeyup="filterFunction()">
                            <a href="../../../TCP-Port-Scanning" class="graycolor">TCP Scanner</a>
                            <a href="../../../UDP-Port-Scanning" class="whitecolor">UDP Scanner</a>
                            <a href="../../../Whois-Scanner"  class="graycolor">Whois Scanner</a>
                            <a href="../../../SQL-Injection" class="whitecolor">SQL Injection</a>
                          </div>
                        </div>
                      </li>
                        </li>
                        
                        <!-- Redirection the the main page -->
                            <li class="active">
                                <a href="../../../../Dashboard" class="dropdown-toggle">
                                    <i class="fa fa-dashboard fa-fw"></i class="menu-icon fa fa-rss"> 
                                    <span class="menu-text">Dashboard</span>
                                </a>
                            </li>
                        <!-- Redirection the the main page -->
                        
                        <!-- Port mapping, nmap added to the menu on the left side of the page -->
                            <li>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-rss"></i>
                                    <span class="menu-text"> Port Mapping</span>
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../../../TCP-Port-Scanning">TCP scanner</a>
                                        </li>
                                         <li>
                                            <a href="../../../UDP-Port-Scanning">UDP scanner</a>
                                        </li>
                                    </ul>
                            </li>
                        <!-- Port mapping, nmap added to the menu on the left side of the page -->
                        
                        <!-- Web Scanner, Whois added to the menu on the left side of the page -->
                            <li>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-globe"></i>
                                    <span class="menu-text"> Web Scanner</span>
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../../../Whois-Scanner">Whois Scanner</a>
                                        </li>
                                    </ul>
                            </li>
                        <!-- Web Scanner, Whois added to the menu on the left side of the page -->
                        
                       <!-- Sql injection, sqlmap added to the menu on the left side of the page -->
                            <li>
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-database"></i>
                                    <span class="menu-text"> Database Testing</span>
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="../../../SQL-Injection"> SQL Injection</a>
                                        </li>
                                    </ul>
                            </li>
                        <!-- Sql injection, sqlmap added to the menu on the left side of the page -->
                         
                        <!-- About us page -->
                            <li>
                                <a href="../../../About-Us"><i class="fa fa-info-circle"></i> About</a>
                            </li>
                        <!-- About us page -->
                        <!-- About us page -->
                            <li>
                                <a href="../../../Contact-Us"><i class="fa fa-pencil-square-o"></i> Contact</a>
                            </li>
                        <!-- About us page -->
                        <!-- Displaying the ip address -->
                            <li>
                                <p class="ipaddress menu-text"> Your ip: <?php echo $IP; ?></p>
                            </li>
                        <!-- Displaying the ip address -->
                    </div>
                </div>
                <!-- left side navigation -->
        </nav>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                         Footer 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
    <footer class="footerv2">
      <div class="container">
        <p>Copyright &copy; PenTesting by Trojan 2017</p>
      </div>
    </footer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                         Footer 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  
    <script src="../../../pages/Tools/sqlmap/js/sqlmap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../../vendor/raphael/raphael.min.js"></script>
    <script src="../../../vendor/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../../vendor/dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>