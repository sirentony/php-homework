<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="css/datas2.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="items.php">Items</a></li>
                        <li class="nav-item active"><a class="nav-link" href="suppliers.php">Suppliers</a></li>
                        <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>
                        <li class="nav-item"><a class="nav-link" href="warehouses.php">Warehouses</a></li>
                        <li class="nav-item"><a class="nav-link" href="countries.php">Countries</a></li>
                        <li class="nav-item"><a class="nav-link" href="cities.php">Cities</a></li>
                        <li class="nav-item"><a class="nav-link" href="categories.php">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="employees.php">Employees</a></li> 
                </ul>    
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>SUPPLIERS</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">SUPPLIERS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <div class="datas-cat">
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "electrical item shop";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT supplier.Company, supplier.Email, country.Country_Name, city.City_Name, supplier.Address, supplier.Delivery 
                FROM ((supplier 
                INNER JOIN country ON supplier.CountryID = country.CountryID) 
                INNER JOIN city ON supplier.CityID = city.CityID)";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo '<table>';
            echo '<tr>';
                    echo '<th>Company</th>';
                    echo '<th>Email</th>';
                    echo '<th>Country_Name</th>';
                    echo '<th>City_Name</th>';
                    echo '<th>Address</th>';  
                    echo '<th>Delivery</th>';  
            echo '</tr>';
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
                echo "<td>". $row["Company"]."</td>";
                echo "<td>". $row["Email"]."</td>";
                echo "<td>". $row["Country_Name"]."</td>";
                echo "<td>". $row["City_Name"]."</td>";
                echo "<td>". $row["Address"]."</td>";
                echo "<td>". $row["Delivery"]."</td>";



            echo '</tr>';
        
        }
        echo '</table>'; 
        } 



        ?>
    </div>



<?php

   
    
    include 'footer.php';



?>


   


    

    

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>