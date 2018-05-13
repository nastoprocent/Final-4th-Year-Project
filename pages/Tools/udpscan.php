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

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrapmain.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../vendor/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../pages/Tools/sqlmap/css/css.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
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
                                   <div>
                                      <p>
                                        <strong>UDP Scanner</strong>
                                        <span class="pull-right text-muted">100% Complete <strong class="alert alert-success"> Online</strong></span>
                                      </p>
                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                         <span class="sr-only">100% Complete (Offline)</span>
                                      </div>
                                    </div>
                                </div>
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
                                <i class="fa fa-database fa-fw"></i> Port/Ip Test:
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart">
                                <div class="page-header center">                        
                                    <h1 class="design-menu">UDP Port Scanning</h1>
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
                                                        <h1 class="request-label">Tests that the tool will perform:</h1>
                                                    </div>
                                                    <table style="margin: auto;" class="full-width">
                                                        <tr><td class="td1"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td1">&nbsp; It will scan the most common ports for UDP.</td></tr>
                                                        <tr><td class="td2"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td2">&nbsp; It will show which ports are open and which are closed.</td></tr>
                                                        <tr><td class="td1"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td1">&nbsp; Short description about the ports that are closed and opened.</td></tr>
                                                        <tr><td class="td2"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td2">&nbsp; Will display the protocol and port which has been scanned.</td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="page-header center">                        
                                                        <h1 class="request-label">Tests that tool won't perform:</h1>
                                                    </div>
                                                    <table style="margin: auto;" class="full-width">
                                                            <tr><td class="td1"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td1">&nbsp; Scan will only return the same number of ports, most common ones.</td></tr>
                                                            <tr><td class="td2"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td2">&nbsp; Scanner wont allow to test ports with range of 1-255.</td></tr>
                                                            <tr><td class="td1"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td1">&nbsp; Tool wont allow to scan only specific port.</td></tr>
                                                            <tr><td class="td2"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td2">&nbsp; Only visiblity of ports that are closed and open, no other scans.</td></tr>
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
                                                          <th scope="row"><design class="numbercolor">1.</design> Check what ports you really should be using for your software/website.</th>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">2.</design> Keep only the needed ports open like 80 or 443 ports.</th>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">3.</design> Restrict the access to ports like 3306 that is responsible for database.</th>
                                                        </tr>
                                                        <tr>
                                                          <th scope="row"><design class="numbercolor">4.</design> Never have a free open port that is no needed since the attacker can take advantage of that and use it.</th>
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
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Security Hints


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


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                        Port Mapping
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
             <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <i class="fa fa-database fa-fw"></i>Tool:
                    </div>
                    <div class="panel-body">
                        <div class="row">
                             <div class="form-group">
                                <div class="card mb-4" id="boxdesign">
                                 <img class="card-img-top" src="../../../img/UDP-Scanner.png" style="height:350px; border-top-left-radius:25px; border-top-right-radius:25px;">
                                 <div class="card-body">
                                  <p class="heading">
                                   Welcome to the UDP Port Scanner!
                                    </p>
                                    <p class="text">
                                    Use the allocated space to input the IP address or the URL of the target.
                                    Then simply click on the button at the bottom when done to launch a new scan!<br /><br />
                                    <small class="hint">If you input incorrect URL or IP address all ports might come up as Closed, make sure that you type everything correctly</small>
                                    </p>
                                  </div>
                                </div>
                                <form role="form" name="run_udp_scan" id="run_udp_scan" method="POST">
                                    <div class="inputportscannerdesign">
                                            <label class="col-sm-4 text-position" for="target">
                                            <strong>Domain or IP Address:</strong>
                                            </label>
                                        <div class="col-sm-8">
                                            <span class="input-icon input-icon-right no-padding col-xs-12 col-md-7 col-lg-7">
                                            <input type="text" name="domain" placeholder="Url: website.com/100.164.231.0" class="col-xs-12 col-sm-12" autofocus=""/> 
                                            </span>
                                        </div>
                                    </div>
                                    </hr>
                                    <input type="submit" class="btn" name="submit" id="block" value="Run UDP port scan"/></br></br>
                                    <p class="centerthetickbox" ><input type="checkbox" required name="terms"> I am authorized to scan this target and i accept the <a href="../../../Terms&Conditions.pdf"><u>Terms and Conditions</u></a></p>
                                    </div>
                                </form>
                                 <script type="text/javascript">
    							     $("#run_udp_scan").submit(function() {
    								        $.ajax({
    								            type: "POST",
    								            url: "../../pages/Tools/udp_db_insert.php",
    								            data: $("#run_udp_scan").serialize(),
    								            success: function(data) {
    												//$("#").show();
    								            }
    								        });
    								    });
    							</script>
                            </div>
                        </div>
                    </div>
                        <?php
                        if(!empty($_POST['domain'])) {  
                            //list of port numbers to scan
                            $ports = array(53, 67, 68, 69, 123, 137, 138, 139, 161, 162, 389, 636);
     
                            foreach($ports as $port) {
                                if($pf = @fsockopen($_POST['domain'], $port, $err, $err_string, 1)) {
                                    $results[$port] = true;
                                    fclose($pf);
                                } else {
                                    $results[$port] = false;
                                }
                            }
                        ?>       
                    <div class="panel panel-default">    
                        <div class="panel-heading">
                             <i class="fa fa-database fa-fw"></i>Results of the test:
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart">
                                <div class="page-header center">                        
                                    <h1 class="results">The results of the test are as fallows:</h1>
                                </div>
                                 <?php
                                    echo '<div class="col-lg-6">';
                                    echo '<table class="table">
                                      <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">Port</th>
                                          <th scope="col">Protocol</th>
                                          <th scope="col">Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>';
                
                                        foreach($results as $port=>$val) {
                                            $prot = getservbyport($port,"udp");
                                            echo "<tr>
                                                  <th scope='row'>$port</th>
                                                  <td>($prot)</td>";
                                            echo '<td>';
                                            if($val) {
                                                echo '<span style="color:green; font-weight:bold;">Open port</span><br/>';
                                            }
                                            else{
                                                echo '<span style="color:red; font-weight:bold;">Closed port</span><br/>';
                                            }
                                            '</td></tr>';
                                        }
                                    
                                    echo '</tbody></table>';
                                    echo '</div>';
                                    echo '<div class="col-lg-6">
                                              <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                      <th scope="col">Descirption of Protocols</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                   <td><strong>DOMAIN - Domain Name System -</strong><small> It is used widely on the public internet and on private networks to translate domain names into IP addresses, typically for network routing.</small></td>
                                                  </tr>
                                                  <tr>
                                                   <td><strong>BOOTPS(DHCP) - Dynamic Host Configuration Protocol -</strong><small> It is used on networks that do not use static IP address assignment (almost all of them).</small></td>
                                                  </tr>
                                                   <tr>
                                                   <td><strong>BOOTPC(DHCP) - Dynamic Host Configuration Protocol -</strong><small> It  is used on networks that do not use static IP address assignment (almost all of them).</small></td>
                                                  </tr>
                                                  <tr>
                                                   <td><strong>TFTP - Trivial File Transfer Protocol -</strong><small> TFTP offers a method of file transfer without the session establishment requirements that FTP uses.</small></td>
                                                  </tr>
                                                   <tr>
                                                   <td><strong>NTP - Network Time Protocol -</strong><small> One of the most overlooked protocols is NTP. NTP is used to synchronize the devices on the Internet.</small></td>
                                                  </tr>
                                                  <tr>
                                                   <td><strong>NETBIOS-NS - NetBIOS -</strong><small> NetBIOS itself is not a protocol but is typically used in combination with IP with the NetBIOS over TCP/IP (NBT) protocol.</small></td>
                                                  </tr>
                                                   <tr>
                                                   <td><strong>NETBIOS-DGM - NetBIOS -</strong><small> NetBIOS itself is not a protocol but is typically used in combination with IP with the NetBIOS over TCP/IP (NBT) protocol.</small></td>
                                                  </tr>
                                                  <tr>
                                                   <td><strong>NETBIOS-SSN - NetBIOS -</strong><small> NetBIOS itself is not a protocol but is typically used in combination with IP with the NetBIOS over TCP/IP (NBT) protocol.</small></td>
                                                  </tr>
                                                   <tr>
                                                   <td><strong>SNMP - Simple Network Management Protocol -</strong><small> SNMP is used by network administrators as a method of network management. SNMP has a number of different abilities including the ability to monitor.</small></td>
                                                  </tr>
                                                  <tr>
                                                   <td><strong>SNMP-TRAP - Simple Network Management Protocol -</strong><small> SNMP is used by network administrators as a method of network management. SNMP has a number of different abilities including the ability to monitor.</small></td>
                                                  </tr>
                                                  <tr>
                                                   <td><strong>LDAP - Lightweight Directory Access Protocol -</strong><small> LDAP provides a mechanism of accessing and maintaining distributed directory information.</small></td>
                                                  </tr>
                                                  <tr>
                                                   <td><strong>LDAPs - Lightweight Directory Access Protocol over TLS/SSL -</strong><small> Just like HTTPS, LDAPS provides the same function as LDAP but over a secure connection which is provided by either SSL or TLS.</small></td>
                                                  </tr>
                                                </tbody>
                                             </table>
                                          </div>';
                                    
                                        }
                                    ?> 
                            </div>
                        </div>
                    </div>
                </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                           UDP Scanner
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

            </div> <!-- /.row -->
        </div><!-- /#page-wrapper -->
    </div> <!-- /#wrapper -->

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

</body>

</html>
<?php ob_end_flush(); ?>