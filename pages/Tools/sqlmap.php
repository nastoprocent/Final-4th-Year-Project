<?php
	require_once("headerTools.php");
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

    <link href="../../vendor/bootstrap/css/bootstrapmain.css" rel="stylesheet">
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../../vendor/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../../../pages/Tools/sqlmap/css/css.css" rel="stylesheet">
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <!-- /.col-lg-12 -->
            </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
           
            <div class="row">
                <div class="col-lg-8">
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                          Status
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-power-off fa-fw"></i> Status of the tool:
                        </div>
                            <div class="panel-body">
                                <div id="morris-area-chart">
                                      <!-- Adding services progress bar -->
                                            <div>
                                                <p>
                                                    <strong>SqlMap Service</strong>
                                                    <span class="pull-right text-muted">100% Complete <strong class="alert alert-success"> Online</strong></span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        <span class="sr-only">100% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                    <!-- Adding services progress bar -->
                             </div>
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                          Status
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
 
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                           Test
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                    <!-- design interface for scanning -->
                    <div class="panel panel-default">    
                        <div class="panel-heading">
                                <i class="fa fa-database fa-fw"></i> Database test:
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart">
                                <div class="page-header center">                        
                                    <h1 class="design-menu">SQL testing with sqlmap</h1>
                                    <div class="row">
                                        <div class="col-xs-12 center">
                                           <div class="points-required-box">
                                                <span class="label credits-cost-label">
                                                     <i class="fa fa-check green"></i>
                                                     At least 24h Subscription required for the testing.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-margin">
                                        <div class="align-center">
                                           <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="page-header center">                        
                                                        <h1 class="request-label">Tests that the tool is able to perform:</h1>
                                                    </div>
                                                    <table style="margin: auto;" class="full-width">
                                                        <tr><td class="td1"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td1">&nbsp; Find databases, Tables, Columns.</td></tr>
                                                        <tr><td class="td2"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td2">&nbsp; Display content of tables.</td></tr>
                                                        <tr><td class="td1"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td1">&nbsp; Display the hashes in the database tables.</td></tr>
                                                        <tr><td class="td2"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td2">&nbsp; Allow to chose the methods of tests, delay, request time ext.</td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="page-header center">                        
                                                        <h1 class="request-label">Tests that tool won't perform:</h1>
                                                    </div>
                                                    <table style="margin: auto;" class="full-width">
                                                            <tr><td class="td1"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td1">&nbsp; Wont decrypt the hashes.</td></tr>
                                                            <tr><td class="td2"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td2">&nbsp; Wont allow direct control over the input commands.</td></tr>
                                                            <tr><td class="td1"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td1">&nbsp; Wont allow to delete the database.</td></tr>
                                                            <tr><td class="td2"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td2">&nbsp; Provides only the functions that are listed in the tool.</td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                           Test
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Security Hints
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                    <!-- design interface for scanning -->
                    <div class="panel panel-default">    
                        <div class="panel-heading">
                                <i class="fa fa-database fa-fw"></i> Before taking the test:
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart">
                                <div class="page-header center">                        
                                    <h1 class="design-menu">Security hints before you start the tests.</h1>
                                        <div class="align-center">
                                           <div class="col-lg-12">
                                                <div class="form-group">
                                                    <table class="table">
                                                      <thead>
                                                        <tr>
                                                          <th scope="col" class=" headingoftable">What security measures should you take before starting the test to make the site secure as much as it can be?</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">1.</design> If you are using PHP, make sure not to use the old PHP which is mysql_query, start using PDO and mysqli.</th>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">2.</design> Validate all inputs so that you restrict any injections by the attacker, block inputs like "/<>\% ext.</th>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">3.</design> Remove any database functionality that you dont really need, dont let the attackers/tools have the play ground.</th>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">4.</design> Create a handmade firewall or use some provider like cloudflare for the security aspects.</th>
                                                        </tr>
                                                         <tr>
                                                          <th scope="row"><design class="numbercolor">5.</design> Handle well your SESSION managment so that non of the cookies can be taken over using injections.</th>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">6.</design> Dont show your real names of files, if you have file named index.php change the name with HTACCESS so that extensions are not presented to the user.</th>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">7.</design> Block the access to config files with htaccess to restrict the play ground of attacker.</th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Security Hints
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                          SQLMAP
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <i class="fa fa-database fa-fw"></i>Tool:
                        </div>
                        <div class="panel-body">
                            <div class="row centering-text">
                                <div class="form-group">
                                    <?php
                                      require_once("sqlmap/index.php");
                                    ?>
                                </div>
                            </div>
                        <!-- design interface for scanning -->
                        </div>
                    </div>
                </div><!-- /.col-lg-8 -->   
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                          SQLMAP
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
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../vendor/raphael/raphael.min.js"></script>
    <script src="../../vendor/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../vendor/dist/js/sb-admin-2.js"></script>
    
    <script src="../../pages/Tools/sqlmap/js/sqlmap.js"></script>
    
</body>

</html>
<?php ob_end_flush(); ?>