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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
                <h1 class="mt-4">ตั้งค่า</h1>
                <form action="updateUsers.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="brand" placeholder="ยี่ห้อรถ" value="<?php echo $rows['username']; ?>">
                    <input type="text" name="color" placeholder="สีรถ" value="<?php echo $rows['password']; ?>">
                    <br>
                    <input type="text" name="regis" placeholder="ทะเบียนรถ" value="<?php echo $rows['email']; ?>">
                    <input type="number" name="price" placeholder="ราคา" value="<?php echo $rows['salary']; ?>">
                    <br>
                    <input type="file" name="img">
                    <br>
                    <input type="hidden" name="userid" value="<?php echo $_GET['id']; ?>" >

                    <input type="submit" value="บันทึก">
                </form>
            </div>
</body>
</html>

