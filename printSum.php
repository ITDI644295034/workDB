<?php
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
// $sql = "INSERT INTO `cars` (`car_id`, `brand`, `color`, `vehicle_regis`, `price`) VALUES (NULL, 'Honda', 'Blue', '1 กข 1234', '1000000')";
// mysqli_query($conn, $sql);
// echo $sql;
// $getallusers = "SELECT * FROM cars";
// $result = mysqli_query($conn, $insertcar);
?>
<?php
$brand = $_POST['brand'];
$color = $_POST['color'];
$regis = $_POST['regis'];
$price = $_POST['price'];
if(move_uploaded_file($_FILES["img"]["tmp_name"],"pic/".$_FILES["img"]["name"]))
{
	//echo "Copy/Upload Complete";
    $photoname="pic/".$_FILES["img"]["name"];
    $insertcar = "INSERT INTO `cars` (`car_id`, `brand`, `color`, `vehicle_regis`, `price`,`photo`)VALUE(NULL,'$brand','$color','$regis','$price','$photoname')";
    $result = mysqli_query($conn, $insertcar);
}
//echo $insertcar
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="dash.php">กลับไปหน้าDashbord</a>
</body>
</html> -->