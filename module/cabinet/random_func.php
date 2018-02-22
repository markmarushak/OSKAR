<?php
$rand = $_POST['rand'];

$connection = new mysqli("localhost","root","",'user969_user');
$query = "UPDATE Plans SET pPerc=$rand WHERE pID=1";

if ($connection->query($query) === TRUE) {
    header('Refresh: 0; url=http://2017grand-lottery2018.org/deposit?add');
    echo "ok";
//    echo "<div class='preloader_lottery'></div>";

} else {
    echo "Error updating record: " . $connection->error;
}

$connection->close();

