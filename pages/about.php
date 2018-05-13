<?php

  require_once ("header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penetration Testing</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrapmain.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../vendor/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row additional">
                  <div class="col-lg-12">
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                  <!-- Introduction Row -->
                      <div class="row">
                          <div class="col-lg-12 page-header">
                            <h1 class="my-4">About Us
                              <small>We are Penetration Testers.</small>
                          </div>
                      </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                    Slide Show & Content
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                      <!-- Team Members Row -->
                      <div class="row">
                        <div class="col-lg-4 text-center mb-4">
                           <h2 class="my-4">Developer & Admin:</h2>
                           </br>
                           <img class="rounded-circled-block d-block" src="../img/hacker.jpg" height="220" width="220" alt="">
                           <h3>David Trojan </h3>
                           <img src="../img/banner_admin.png" width="100%"></img>
                           <p class="box-design">The main developer and also administrator of the website.</p>
                        </div>
                        <div class="col-lg-8">
                          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                        
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img src="../img/image1.jpg" style="height: 600px; width:100%;">
                              </div>
                        
                              <div class="item">
                                <img src="../img/image2.jpg" style="height: 600px; width:100%;">
                              </div>
                            
                              <div class="item">
                                <img src="../img/image3.jpg" style="height: 600px; width:100%;">
                              </div>
                            </div>
                        
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-12 page-header">
                             <h1 class="my-4">Little more about the website.</h1>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 text-center mb-4">
                          <img src="../img/php.png" width="180px" height="100px"/>
                          <img src="../img/js.png" width="180px" height="100px"/>
                          <img src="../img/CSS.png" width="130px" height="100px"/>
                          <img src="../img/database.png" width="180px" height="100px"/>
                          <img src="../img/linux.jpg" width="180px" height="100px"/>
                          <img src="../img/html.png" width="180px" height="100px"/>
                        </div>
                      </div>
                      </br>
                      <p class="box-design">
                        - The purpose of the site is to provide testing environmentfor the users that want to test their own websites. 
                        </br> - Website is written in languages as shown above, PHP, JavaScript, HTML 5, CSS, SQL as also everything is running on Linux.
                        </br> - Website is easy to use by any type of user, either if its a complete newbie or an expert in testing the weakness of the site.
                      </p> 
                      

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                 Slide Show & Content
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                
            </div><!-- /.row -->
        </div><!-- /#page-wrapper -->
    </div> <!-- /#wrapper -->
    
     <!-- Footer -->
      
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                         Footer 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
    <footer class="footer">
      <div class="container">
        <p>Copyright &copy; PenTesting by Trojan 2017</p>
      </div>
    </footer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                         Footer 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

   <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../vendor/dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>