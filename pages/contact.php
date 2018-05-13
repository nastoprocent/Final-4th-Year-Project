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
        <div id="page-wrapper" style="height:100%;">
            <div class="row">
                <section id="contact">
                    	<div class="section-content page-header">
                    		<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us.</span></h1>
                    	</div>
                    	</br>
                    	</br>
                    	<div class="row">
                        <div class="col-lg-1"></div>
                          <div class="col-lg-10">
                              <p class="section-content page-header" style="text-align:center; font-size:25px; font-weight:bold;">Please contact us if you would like to know anything about the services or if you have any questions.</p>
                          </div>
                        <div class="col-lg-1"></div>
                      </div>
                    	</br>
                    	<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-power-off fa-fw"></i> Details:
                        </div>
                        <div class="panel-body">
                			   <div class="col-lg-7 form-line">
                			     </br>
                				  <script type = "text/javascript">
          				            function validateForm() {
                                var name = document.forms["contactForm"]["name"].value;
                                var email = document.forms["contactForm"]["email"].value;
                                var phone = document.forms["contactForm"]["phone"].value;
                                var message = document.forms["contactForm"]["message"].value;
                                
                               if (!validatePhone(phone)) {
                                    alert("Not a real phone number!");
                                    return false;
                                }
                                else if (message == null || message == "") {
                                    alert("Message must be filled out");
                                    return false;
                                }
                                }
                                function validateEmail(email) {
                                    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                                    return re.test(email);
                                }
                                function validatePhone(phone){
                                    var phoneno = /^\d{10}$/;
                                     if(phone.length >= 10){
                                        return true;
                                    }
                                    else return false;
                                }
        				          </script>
        					
        					<!--<form name="contactForm" action="savetoxml.php" role="form" method="post" onsubmit="return validateForm()">-->
                        <form action = "savetoxml.php" method = "post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" disabled value="<?php echo $row_session['userName']; ?>">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" disabled value="<?php echo $userRow['userEmail']; ?>">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" name="phone" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" name="message" rows="6" style="max-width:100%; max-height:400px;"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                        </form>
                			 </div>
                			 
                			 <div class="col-md-5">
                           <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                           <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="500" src="https://maps.google.com/maps?hl=en&q=National College of Ireland, Mayor Street, IFSC, Dublin 1&ie=UTF8&t=roadmap&z=16&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://buyproxies.io/">buy proxies</a></small></div></iframe>
                        </div>
                			 
            			  	</div>
        		        </div>
        		      </div>
        		      </div>
        		    </section>
        		</div>
        	</div>
		     <!-- Footer -->
      
    <footer class="footer">
      <div class="container">
        <p>Copyright &copy; PenTesting by Trojan 2017</p>
      </div>
      <!-- /.container -->
    </footer>

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
<?php ob_end_flush(); ?>