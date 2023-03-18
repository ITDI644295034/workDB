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
// echo "Connected successfully";
// $sql = "INSERT INTO `cars` (`car_id`, `brand`, `color`, `vehicle_regis`, `price`) VALUES (NULL, 'Honda', 'Blue', '1 กข 1234', '1000000')";
// mysqli_query($conn, $sql);
// echo $sql;
// $getallusers = "SELECT * FROM cars";
// $result = mysqli_query($conn, $insertcar);
$getallusers = "SELECT * FROM cars";
$result = mysqli_query($conn, $getallusers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <!-- <img src="/pic/12.jpg" alt=""> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="updateData.php">UpdateCars</a></li>
                    <li class="nav-item"><a class="nav-link" href="AddCars.php">AddCars</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col mb-5">
                        <div class="card h-100">

                            <!-- Product image--> 
                            <img class="card-img-top" src="<?php echo $row['photo']?>" alt="" width="300" height="200" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php 
                                    echo $row['brand']
                                    ?></h5>
                                    <!-- Product price-->
                                    <?php
                                    echo $row['price'];
                                    ?>$
                                    <!-- $40.00 - $80.00 -->
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="updateData.php">View options</a></div>
                            </div>
                        </div>
                    </div>
                <?php
                    $an++;
                }
                ?>
            </div>
        </div>
</body>

</html>