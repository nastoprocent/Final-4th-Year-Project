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

if($_POST['userName']) {
    $userName = $_POST['userName'];
    /*** set all errors to execptions ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*** prepare the statement ***/
    $stmt = $dbh->prepare($sql);

    /*** bind the params ***/
    $stmt->bindParam(':userName', $userName, PDO::PARAM_STR);

    /*** run the sql statement ***/
    if ($stmt->execute()) {
        populate_list();
    }
} 
}
catch(PDOException $e) {
    echo $e->getMessage();
}

if($_POST['print']) {
    populate_list();
}

function populate_list() {
    global $dbh;
    $sql = "SELECT userId, userName, userEmail FROM users ORDER BY userId desc limit 15";
    echo '<design>
            <div class="border-around">
            <div class="row top-list-design">
              <div class="col-lg-1">
                 ID 
                </div>
                <div class="col-lg-3">
                  NAME
                </div>
                <div class="col-lg-4">
                 EMAIL
                </div>
              </div>';
    foreach ($dbh->query($sql) as $row) {
        echo '<div class="row bottom-list-design">';
            echo '<div class="col-lg-1">';
              echo '<span class="user-id">'.$row['userId'].'</span>';
            echo '</div>';
            echo '<div class="col-lg-3">';
              echo '<span class="user-name">'.$row['userName'].'</span>';
            echo '</div>';
            echo '<div class="col-lg-4">';
              echo '<span class="user-email">'.$row['userEmail'].'</span></br>';
            echo '</div>';
        echo '</div>';
    }
     echo '</div>';
    echo '</design>';
}
?>