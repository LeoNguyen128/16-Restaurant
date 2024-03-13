<?php
    require_once('includes/DB.php');
?>
<?php
    require_once('includes/sessions.php');
?>
<?php 
    // global $ConnectingDB;
    // $sql = "CREATE TABLE menu(
    //     foodid int(6) AUTO_INCREMENT PRIMARY KEY,
    //     foodname VARCHAR(50) UNIQUE not null,
    //     calories int,
    //     ingredients varchar(50),
    //     price real not null,
    //     description varchar(60))";
    // $stmt = $ConnectingDB->prepare($sql);
    // $execute = $stmt->execute();
    // if(isset($_POST["Submit"])){
    //     $foodName = $_POST["foodName"];
    //     $calories = $_POST["calories"];
    //     $ingredients = $_POST["ingredients"];
    //     $price = $_POST["price"];
    //     $description = $_POST["description"];
    //     global $ConnectingDB;
    //     $sql = "INSERT INTO menu(foodname,calories,ingredients,price,description) VALUES (:foodnamE,:calorieS,:ingredientS,:pricE,:descriptioN)";
    //     $stmt = $ConnectingDB->prepare($sql);
    //     $stmt->bindValue(":foodnamE",$foodName);
    //     $stmt->bindValue(":calorieS",$calories);
    //     $stmt->bindValue(":ingredientS",$ingredients);
    //     $stmt->bindValue(":pricE",$price);
    //     $stmt->bindValue(":descriptioN",$description);
    //     $execute = $stmt->execute();
    //     if($execute){
    //         $_SESSION["successMessage"]="Added Successfully";
    //     }
    //     else{
    //         $_SESSION["errorMessage"]="Added Failed";
    //     }
    // }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5fc7766084.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body >
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container" >
            <a href="home.php" class="navbar-brand text-light">Pho Restaurant</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarcollapseCMS">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link text-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.php" class="nav-link text-light">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="reservation.php" class="nav-link text-light">Reservation</a>
                    </li> 
                    <li class="nav-item">
                        <a href="customer.php" class="nav-link text-light">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminDashboard.php" class="nav-link text-light">Dashboard</a>
                    </li> 
                    
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link text-light"><i class="fas fa-user"></i> Log Out</a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <!-- HEAder  -->
    <header >
        <div class="container-fluid bg-dark text-white py-0 mt-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Admin Dashboard</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- MAIN  -->
    <main>
        <section class="container-fluid mb-5 bg-light align-items-center" style="min-height:300px;">
            <?php 
                echo errorMessage();
                echo successMessage();
            ?>
            <div class="row py-5 align-items-center">
                <div class="col-lg-12 text-center">
                    <h2>Managing User Interaction</h2>
                </div>
                <div class="col-lg-4 mb-2 py-5">
                    <a href="manageMenu.php" class="text-center btn btn-primary btn-block ">Manage Menu</a>
                </div>
                <div class="col-lg-4 mb-2 py-5">
                    <a href="manageReservation.php" class="text-center btn btn-danger btn-block align-middle">Manage Reservation</a>
                </div>
                <div class="col-lg-4 mb-2 py-5">
                    <a href="displayCustomer.php" class="text-center btn btn-warning btn-block align-middle">Display Customer</a>
                </div>
                <div class="col-lg-12 text-center">
                    <h2>Managing Admin Operation</h2>
                </div>
                <div class="col-lg-4 mb-2 py-5 m-auto">
                    <a href="manageEmployee.php" class="text-center btn btn-success btn-block align-middle">Add Employee</a>
                </div>
                <div class="col-lg-4 mb-2 py-5 m-auto">
                    <a href="admin.php" class="text-center btn btn-dark btn-block align-middle">Add Admin</a>
                </div>
                <div class="col-lg-4 mb-2 py-5 m-auto">
                    <a href="displayEmployee.php" class="text-center btn btn-secondary btn-block align-middle">Manage Employee & Admin</a>
                </div>
               
            </div>
        </section>
    </main>
    <footer class="text-light mt-3 bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center align-middle">
                    <p class="lead mt-5">Theme by THANH DAT DINH <span id="year"></span> &copy; ----All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script>
        $('#year').text(new Date().getFullYear());
    </script>
</body>
</html>