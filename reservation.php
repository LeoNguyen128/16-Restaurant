<?php
    require_once('includes/DB.php');
?>
<?php
    require_once('includes/sessions.php');
?>
<?php 
    global $ConnectingDB;
    $sql = "CREATE TABLE reservation(
        ReservationReference int(10) AUTO_INCREMENT UNIQUE not null PRIMARY KEY,
        typeoforder varchar(50) not null,
        date varchar(50)  not null,
        time varchar(50)  not null,
        TypeofTable varchar(10) not null,
        NumberofCustomer varchar(50) not null,
        Stage varchar(50) not null)";
    $stmt = $ConnectingDB->prepare($sql);
    $execute = $stmt->execute();
    if(isset($_POST["Submit"])){
        $typeOfOrder=$_POST["typeOfOrder"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $typeOfTable = $_POST["tableType"];
        $numberOfCustomer = $_POST["number"];
        $stage;
        global $ConnectingDB;
        $sql = "INSERT INTO reservation(typeoforder,date,time,TypeofTable,NumberofCustomer,Stage) VALUES (:typeofordeR,:datE,:timE,:typeoftablE,:numberofcustomeR,'Processing')";
        $stmt = $ConnectingDB->prepare($sql);
        $stmt->bindValue(":typeofordeR",$typeOfOrder);
        $stmt->bindValue(":datE",$date);
        $stmt->bindValue(":timE",$time);
        $stmt->bindValue(":typeoftablE",$typeOfTable);
        $stmt->bindValue(":numberofcustomeR",$numberOfCustomer);
        $execute = $stmt->execute();
        if($execute){
            global $ConnectingDB;
            $sql = "SELECT * FROM reservation";
            $stmt = $ConnectingDB->query($sql);
            while($dataRows=$stmt->fetch()){
                $reservationReference = $dataRows["ReservationReference"];
            }
            $_SESSION["successMessage"]="Rerserve Successfully and your reference is $reservationReference.Please use this reference to complete booking in Customer page";
        }
        else{
            $_SESSION["errorMessage"]="Rerserve Failed";
        }
    }
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
<body>
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
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link text-light"><i class="fas fa-user"></i> Log In</a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <!-- HEAder  -->
    <header >
        <div class="container bg-dark text-white py-0 mt-3">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Reservation</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- MAIN  -->
    <main>
        <section class="container">
            <?php 
                echo errorMessage();
                echo successMessage();
            ?>
            <div class="row align-items-center">
                <!-- <div class="col"> -->
                    <form class="m-auto p-auto" action="reservation.php" method="POST">
                        <div class="card">
                            <div class="card-header text-center">Reservation</div>
                            <div class="card-body">
                                <div class="form-group text-center">
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                        <label for="orderType">DineIn</label>
                                        <input id="orderType" class="form-control" type="radio" value="Dine-In" name="typeOfOrder" placeholder="Type title here" >
                                        </div>
                                        <div class="col-lg-6">
                                        <label for="orderType">Takeout</label>
                                        <input id="orderType" class="form-control" type="radio" value="Take-Out" name="typeOfOrder" placeholder="Type title here" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <label for="name">Name</label>
                                    <input id="name" class="form-control" type="text" name="name" placeholder="Type name here" >
                                </div>
                                <div class="form-group text-center">
                                    <label for="date">Date</label>
                                    <input id="date" class="form-control" type="date" name="date" >
                                    <label for="time">Time</label>
                                    <input id="time" class="form-control" type="time" name="time" >
                                </div>
                                <div class="form-group text-center  ">
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                        <label for="tableType">Large</label>
                                        <input id="tableType" class="form-control" type="radio" value="large" name="tableType" placeholder="Type title here" >
                                        </div>
                                        <div class="col-lg-6">
                                        <label for="tableType">Small</label>
                                        <input id="tableType" class="form-control" type="radio" value="small" name="tableType" placeholder="Type title here" >
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group text-center  ">
                                    <label for="number">Number Of Customer</label>
                                    <input id="number" class="form-control" type="number" name="number" placeholder="Type number here" >
                                </div>
                                <div class="form-group text-center  ">
                                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block">
                                        <i class="fas fa-check"></i> Reserve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
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