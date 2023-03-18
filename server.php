<?php
function printServer() {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "carshop";
    $an = 0;
    // Create connection
    // $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname); //คำสั่ง connect database

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
}
?>
