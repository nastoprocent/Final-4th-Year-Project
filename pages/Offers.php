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
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>

</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
            
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                                Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View and check what offer suits you, <?php echo $row_session['userName']; ?></h1>
                </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                                Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                <div class="panel-heading">
                     <i class="fa fa-power-off fa-fw"></i> Subscriptions:
                </div>
                <div class="panel-body">
                    <div class="media msg pay-box">
                        <a class="pull-left">
                        <img class="media-object" alt="150x120" style="width: 120px; height: 120px;" src="../img/24h.jpg">
                        </a>
                        <div class="media-body">
                            <small class="pull-right pay-time"><i class="fa fa-clock-o"></i> 24h Subscription</small>
                            <h5 class="pay-title">24h Subscription</h5>
                            <p>
                            This subscription allows you to use all of the tools on the site for full 24h! If any problems occour please feel free to contact us using the Email address. Enjoy!
                            </p>
                            <h4 class="pull-right pay-time"> Price: 10 Euro </h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="media msg pay-box">
                        <a class="pull-left">
                        <img class="media-object" alt="150x120" style="width: 120px; height: 120px;" src="../img/1 Week.jpg">
                        </a>
                        <div class="media-body">
                            <small class="pull-right pay-time"><i class="fa fa-clock-o"></i> 1 Week Subscription</small>
                            <h5 class="pay-title">1 Week Subscription</h5>
                            <p>
                            This subscription allows you to use all of the tools on the site for full One week! If any problems occour please feel free to contact us using the Email address. Enjoy!
                            </p>
                            <h4 class="pull-right pay-time"> Price: 55 Euro </h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="media msg pay-box">
                        <a class="pull-left">
                        <img class="media-object"  alt="150x120" style="width: 120px; height: 120px;" src="../img/1 Month.jpg">
                        </a>
                        <div class="media-body">
                            <small class="pull-right pay-time"><i class="fa fa-clock-o"></i> 1 Month Subscription</small>
                            <h5 class="pay-title">1 Month Subscription</h5>
                            <p>
                            This subscription allows you to use all of the tools on the site for full One month! If any problems occour please feel free to contact us using the Email address. Enjoy!
                            </p>
                            <h4 class="pull-right pay-time"> Price: 200 Euro </h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="media msg pay-box">
                        <a class="pull-left">
                        <img class="media-object"  alt="150x120" style="width: 120px; height: 120px;" src="../img/3 Months.jpg">
                        </a>
                        <div class="media-body">
                            <small class="pull-right pay-time"><i class="fa fa-clock-o"></i> 3 Months Subscription</small>
                            <h5 class="pay-title">3 Months Subscription</h5>
                            <p>
                            This subscription allows you to use all of the tools on the site for full Three months! If any problems occour please feel free to contact us using the Email address. Enjoy!
                            </p>
                            <h4 class="pull-right pay-time"> Price: 450 Euro </h4>
                        </div>
                    </div>
                </div>
                </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                              Credit Card
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            <div class="col-lg-4">    
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table" >
                        <div class="row display-tr" >
                            <h3 class="panel-title display-td" >Payment Details</h3>
                            <div class="display-td" >                            
                                <img class="img-responsive pull-right" src="https://i76.imgup.net/accepted_c22e0.png">
                            </div>
                        </div>                    
                    </div>
                    <div class="panel-body">
                        <form novalidate name="form" id="form" autocomplete="on" method="POST">
                           
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="cardNumber">CARD NUMBER <small class="text-muted"><span class="cc-brand"></span></small></label>
                                        <input 
                                            id="cc-number"
                                            type="tel"
                                            class="input-lg form-control cc-number"
                                            autocomplete="cc-number"
                                            placeholder="**** **** **** ****"
                                            required 
                                        />
                                    </div>                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                        <input
                                            id="cc-exp"
                                            type="tel" 
                                            class="input-lg form-control cc-exp" 
                                            placeholder="** / **"
                                            autocomplete="cc-exp"
                                            required 
                                        />
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cardCVC">CV CODE</label>
                                        <input
                                            id="cc-cvc"
                                            type="tel" 
                                            class="input-lg form-control cc-cvc"
                                            placeholder="CVC"
                                            autocomplete="off"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label> CHOSE YOUR SUBSCRIPTION</label>
                                        <div class="form-group">
                                          <select class="input-lg form-control">
                                            <option><i class="fa fa-clock-o">24h Subscription</option>
                                            <option><i class="fa fa-clock-o">1 Week Subscription</option>
                                            <option><i class="fa fa-clock-o">1 Month Subscription</option>
                                            <option><i class="fa fa-clock-o">3 Months Subscription</option>
                                          </select>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 margin-bottom">
                                    <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Start Subscription</button>
                                </div>
                            </div>
                            <h2 class="validation"></h2>
                        </form>
                    </div>
                </div>
            </div> <!-- Ending Col-4 --->
                
            <script>
            jQuery(function($) {
              $('[data-numeric]').payment('restrictNumeric');
              $('.cc-number').payment('formatCardNumber');
              $('.cc-exp').payment('formatCardExpiry');
              $('.cc-cvc').payment('formatCardCVC');
              $.fn.toggleInputError = function(erred) {
                this.parent('.form-group').toggleClass('has-error', erred);
                return this;
              };
              $('form').submit(function(e) {
                e.preventDefault();
                var cardType = $.payment.cardType($('.cc-number').val());
                $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
                $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
                $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
                $('.cc-brand').text(cardType);
                $('.validation').removeClass('text-danger text-success');
                $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
              });
            });
          </script>
            
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                              Credit Card
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
            </div> <!-- Ending of row --->
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