<?php
    require_once ("header.php");
    require_once ("../config/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome, <?php echo $row_session['userName']; ?></h1>
                </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                         SubSites 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->                           
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>Patch Notes!</div>
                                </div>
                            </div>
                        </div>
                        <a href="../Patch-News">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>Prices!</div>
                                </div>
                            </div>
                        </div>
                        <a href="../View-&-Buy">
                            <div class="panel-footer">
                                <span class="pull-left">View Offers</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php
                                    		$query = $conn->prepare('SELECT COUNT(userName) c FROM users');
                                    		$query->execute();
                                    		$row = $query->fetch(PDO::FETCH_ASSOC);
                                            echo $row['c'];
                                        ?>
                                    </div>
                                    <div>Users registered</div>
                                </div>
                            </div>
                        </div>
                        <a href="../List-Of-Users">
                            <div class="panel-footer">
                                <span class="pull-left">View Users</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div> <!-- /.row -->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                         SubSites 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->  

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Services Online 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-power-off fa-fw"></i> Services, status Online:
                        </div>
                            <div class="panel-body">
                                <div id="morris-area-chart">
                                    <!-- Adding Maintainence progress bar -->
                                            <div>
                                                <p>
                                                    <strong>Port Mapping</strong>
                                                    <span class="pull-right text-muted">100% Complete <strong class="alert alert-success"> Online</strong></span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        <span class="sr-only">100% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <!-- Adding Maintainence progress bar -->
                                    
                                        <div class="divider"></div>
                                        
                                    <!-- Adding services progress bar -->
                                            <div>
                                                <p>
                                                    <strong>Web Scanner</strong>
                                                    <span class="pull-right text-muted">100% Complete <strong class="alert alert-success"> Online</strong></span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        <span class="sr-only">100% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <!-- Adding services progress bar -->
                                    
                                      <!-- Adding services progress bar -->
                                            <div>
                                                <p>
                                                    <strong>Database Testing</strong>
                                                    <span class="pull-right text-muted">100% Complete <strong class="alert alert-success"> Online</strong></span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        <span class="sr-only">100% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <!-- Adding services progress bar -->
                             </div>
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Services Online 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                        Latest News 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-power-off fa-fw"></i> Latest News:
                        </div>
                            <div class="panel-body">
                                <div class="message-wrap col-lg-12">
                                    <div class="media msg design-box">
                                        <a class="pull-left">
                                            <img class="media-object" alt="150x120" style="width: 120px; height: 120px;" src="../img/Sql injection.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right news-time"><i class="fa fa-clock-o"></i> 01.05.2018, 18:11pm</small>
                                            <h5 class="news-title">SQL Injection Tool Added!</h5>
                                            <p>
                                            SQL Injection Tool has been added to the website. All functions are working and are up and ready for the use. SQL tool that has been insert into the website is called SQLMap, this tool is one of the most
                                            powerful tools that can be found for testing the database. Enjoy!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="media msg design-box">
                                        <a class="pull-left">
                                            <img class="media-object" alt="150x120" style="width: 120px; height: 120px;" src="../img/Chat.png">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right news-time"><i class="fa fa-clock-o"></i> 14.03.2018, 13:11pm</small>
                                            <h5 class="news-title">Free Chat!</h5>
                                            <p>Free shoutbox/chat has been developed. Users are free to speak and ask question on the chat, anyone can answer but please mind your language as punishment will be coming! Enjoy!</p>
                                        </div>
                                    </div>
                                    <div class="media msg design-box">
                                        <a class="pull-left">
                                            <img class="media-object" alt="150x120" style="width: 120px; height: 120px;" src="../img/Beginning.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right news-time"><i class="fa fa-clock-o"></i> 23.12.2017, 7:11am</small>
                                            <h5 class="news-title">Construction of PenTest!</h5>
                                            <p>
                                            Construction of Basic layout and functionality has been completed, PenTest is starting to work and look nice. Enjoy!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- col-lg-8 left side setup -->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                        Latest News 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->                        
      
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                        Global Chat 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
    
             <div class="col-lg-4"> <!-- col-lg-4 right side setup -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Chat as: <input class="testing" type="text" id="name" name="name" disabled value="<?php echo $row_session['userName']; ?>"/>
                        </div>
                        <div class="panel-body" id="shout">
                        </div>
                        <div class="panel-footer">
                            <form method="post" name="chatform" id="chatform">
                                <div class="input-group">
                                    <input type="text" id="message" name="message" class="form-control input-sm" placeholder="Type your message here..." />
                                    <span class="input-group-btn">
                                        <input class="btn btn-warning btn-sm" type="submit" id="submit" value="Send"/>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                            function refresh_shoutbox() {
                                var data = 'refresh=1';
                                $.ajax({
                                    type: "POST",
                                    url: "../pages/chat.php",
                                    data: data,
                                    success: function(html){ // this happen after we get result
                                        $("#shout").html(html);
                                    }
                                });
                            }
                            refresh_shoutbox();
                            setInterval("refresh_shoutbox()", 2000);
                            
                            $("#chatform").submit(function(e) {
                                var message = document.getElementById('message').value;
                                if (message.length < 1) {
                                    alert("The field was empty, Input some message next time!");
                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                } else {
                                    // getting the values that user typed
                                    var name    = $("#name").val();
                                    var message = $("#message").val();
                                    // forming the queryString
                                    var data = 'name='+ name +'&message='+ message;
                                    
                                    $.ajax({
                                        type: "POST",
                                        url: "../pages/chat.php",
                                        data: data,
                                        success: function(html) { // this happen after we get result
                                            $("#shout").slideToggle(0, function(){
                                                $(this).html(html).slideToggle(0);
                                                $("#message").val("");
                                                document.getElementById('message').setAttribute('disabled', true);
                                                setTimeout(function() {
													document.getElementById('message').removeAttribute('disabled', false);
												}, 30000); // <-- time in milliseconds

                                            });
                                        }
                                    });
                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                }
                            });
                        </script>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                        Global Chat 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            </div> <!-- row -->
        </div> <!-- page-wrapper -->
    </div><!-- wrapper -->
    
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