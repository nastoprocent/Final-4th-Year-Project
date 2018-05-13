<?php
    /*
        SQLMAP - REST Client & Web Operator
        Coded by: Hood3dRob1n
        Beta: http://uppit.com/ol1jc0jdrzpf/sqlmap_web_edition.zip
    */

    @session_start(); // Start a new Session, if not already created (tracking later?)
    @set_time_limit(0); // May run long at times, remove time limits on script execution time
    $sess = session_id(); // Current Session ID, use tbd...
    $salt = "!SQL!"; // Salt for form token hash generation
    $token = sha1(mt_rand(1, 1000000) . $salt); // Generate CSRF Token Hash
    $_SESSION['token'] = $token;                // Set CSRF Token for Form Submit Verification
?>
<!DOCTYPE html>
<html>
    <head>
        <title id="ttl">SQLMAP Web GUI</title>
     
    </head>
    <body>

        <div class="card mb-4" id="boxdesign">
            <img class="card-img-top" src="../../../img/sqlmap-image.png" style="height:350px; border-top-left-radius:25px; border-top-right-radius:25px;">
            <div class="card-body">
                <p class="heading">Welcome to the SQLMAP Web GUI!</p>
                <p class="text">
                    Use the tabs below to configure your scan settings.
                    Then simply click on the button at the bottom when done to launch a new scan!<br><br>
                    <small class="hint">A small hint! Navigate to Enumeration tab and chose what you want to be looked for, example: All available Databases & All Database Users</small>
                </p>
            </div>
        </div>
        <form method="POST" name="sqlInjection" class="form-horizontal" role="form" id="sqlInjection" action="../../../SQL-Injection-Scan">
            <div class="settings" id="settings">
                <div class="nav_wrap" id="nav_wrap">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#" onClick="tabFlipper(1);" style="font-size=14px; font-weight: bold;">Basic</a></li>
                        <li><a href="#" onClick="tabFlipper(3);" style="font-size=14px; font-weight: bold;">Request</a></li>
                        <li><a href="#" onClick="tabFlipper(2);" style="font-size=14px; font-weight: bold;">Technique</a></li>
                        <li><a href="#" onClick="tabFlipper(6);" style="font-size=14px; font-weight: bold;">Detection</a></li>
                        <li><a href="#" onClick="tabFlipper(4);" style="font-size=14px; font-weight: bold;">Enumeration</a></li>
                        <li><a href="#" onClick="tabFlipper(5);" style="font-size=14px; font-weight: bold;">Access</a></li>
                    </ul>
                </div>
                <br>

                <div class="settings_basics_container" id="settings_basics_container">
                    <?php include("basics.php"); ?>
                </div>

                <div class="settings_request_container" id="settings_request_container">
                    <?php include("request.php"); ?>
                </div>

                <div class="settings_idt_container" id="settings_idt_container">
                    <?php include("idt.php"); ?>
                </div>

                <div class="settings_idt2_container" id="settings_idt2_container">
                    <?php include("idt2.php"); ?>
                </div>

                <div class="settings_enum_container" id="settings_enum_container">
                    <?php include("enum.php"); ?>
                </div>

                <div class="settings_access_container" id="settings_access_container">
                    <?php include("access.php"); ?>
                </div>
            </div>
            <br><br>
            <input type="submit" class="btn" name="submit" id="block" value="Run SQLMAP Web Scan">
            <br><br>
            <p>
                <input type="checkbox" required name="terms">
                I am authorized to scan this target and i accept the <a href="../../../Terms&Conditions.pdf"><u>Terms and Conditions</u></a>
            </p>
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <input type="hidden" name="sqlid">
        </form>
        <script type="text/javascript">
            $("#block").click(function() {
                $.ajax({
                    type: "POST",
                    url: "../../../pages/Tools/sql_db_insert.php",
                    data: $("#sqlInjection").serialize(),
                    success: function(data) {
                      //do actions
                    }
                });
            });
        </script>
    </body>
</html>
