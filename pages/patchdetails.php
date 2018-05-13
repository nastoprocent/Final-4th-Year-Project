<?php
    require_once ("header.php");
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
    
    <!-- Page Content -->
    <div class="wrapper">
        <div id="page-wrapper">
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Patch Details,<small> Latest news!</small></h1>
              </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
           
            <div class="row"> 
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                            News 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <i class="fa fa-power-off fa-fw"></i> Latest News:
                        </div>
                            <div class="panel-body">
                    <div class="card mb-4">
                        <img class="card-img-top" src="../img/Sql injection.jpg" style="height:350px;">
                        <div class="card-body">
                            <h2 class="news-title">SQL Injection Tool Added!</h2>
                            </br>
                            <p class="card-text">
                            SQL Injection Tool has been added to the website. All functions are working and are up and ready for the use. SQL tool that has been insert into the website is called SQLMap, this tool is one of the most
                            powerful tools that can be found for testing the database. Enjoy!
                            </p>
                        </div>
                        </br>
                        <div class="card-footer text-muted">
                             Posted by, 
                             <a href="#">Admin</a><small class="pull-right news-time"><i class="fa fa-clock-o"></i> 01.05.2018, 18:11pm</small>
                        </div>
                    </div>
                    
                    <div class="card mb-4">
                        <img class="card-img-top" src="../img/Chat.png" style="height:350px;">
                        <div class="card-body">
                            <h2 class="news-title">Free Chat!</h2>
                            </br>
                            <p class="card-text">
                            Free shoutbox/chat has been developed. Users are free to speak and ask question on the chat, anyone can answer but please mind your language as punishment will be coming! Enjoy!
                            </p>
                        </div>
                        </br>
                        <div class="card-footer text-muted">
                             Posted by, 
                             <a href="#">Admin</a><small class="pull-right news-time"><i class="fa fa-clock-o"></i> 14.03.2018, 13:11pm</small>
                        </div>
                    </div>
                    
                    <div class="card mb-4">
                        <img class="card-img-top" src="../img/Beginning.jpg" style="height:350px;">
                        <div class="card-body">
                            <h2 class="news-title">Construction of PenTest!</h2>
                            </br>
                            <p class="card-text">
                            Construction of Basic layout and functionality has been completed, PenTest is starting to work and look nice. Enjoy!
                            </p>
                        </div>
                        </br>
                        <div class="card-footer text-muted">
                             Posted by, 
                             <a href="#">Admin</a><small class="pull-right news-time"><i class="fa fa-clock-o"></i> 23.12.2017, 7:11am</small>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- lg-8 -->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                            News 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

            
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                        Global Chat 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                <div class="col-lg-4">
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
                </div> <!-- col-log-4 -->
                
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
            </div> <!-- /.row -->
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