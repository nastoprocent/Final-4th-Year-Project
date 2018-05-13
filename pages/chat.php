<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'nastoprocent';

/*** mysql password ***/
$password = 'toohard4you';

$dbname = 'pentesting';

 
try {
        $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        
            if($_POST['name']) {
                $name       = $_POST['name'];
                $message    = $_POST['message'];
                
                /*** set all errors to execptions ***/
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "INSERT INTO chat (date_time, name, message)
                        VALUES (NOW(), :name, :message)";
                /*** prepare the statement ***/
                $stmt = $dbh->prepare($sql);
            
                /*** bind the params ***/
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':message', $message, PDO::PARAM_STR);
            
                /*** run the sql statement ***/
                if ($stmt->execute()) {
                    populate_shoutbox();
                }
            }
        }
        catch(PDOException $e) {
         echo $e->getMessage();
        }


if($_POST['refresh']) {
    populate_shoutbox();
}


function populate_shoutbox() {
    global $dbh;
    $sql = "select * from chat order by date_time desc limit 15";
    echo '<design>';
    foreach ($dbh->query($sql) as $row) {
        echo '<li>';
        echo '<span class="date">'.date("d.m.Y H:i", strtotime($row['date_time'])).'</span>';
        echo '<span class="name">'.$row['name'].'</span></br>';
        echo '<span class="message">'.$row['message'].'</span>';
        echo '</li>';
    }
    echo '</design>';
}
?>