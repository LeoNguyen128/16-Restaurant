<?php
    require_once('includes/DB.php');
?>
<?php
    require_once('includes/sessions.php');
?>
<?php 
    
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
        <div class="container bg-dark text-white py-0 mt-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Manage Reservation</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- MAIN  -->
    <main>
        <section class="container mb-5 bg-light align-items-center" style="min-height:10px;">
            <?php 
                echo errorMessage();
                echo successMessage();
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h2>Unfinished Reservation</h2>
                    <table class="table table-striped text-center  table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Reservation Reference</th>
                                <th>Type of Order</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Type of Table</th>
                                <th>Number of Customer</th>
                                <th>Stage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php 
                            global $ConnectingDB;
                            $sql = "SELECT * FROM reservation WHERE Stage ='Processing' ORDER BY ReservationReference desc";
                            $stmt = $ConnectingDB->query($sql);
                            while($dataRows=$stmt->fetch()){
                                $reservationReference = $dataRows["ReservationReference"];
                                $typeOfOrder = $dataRows["typeoforder"];
                                $date = $dataRows["date"];
                                $time = $dataRows["time"];
                                $typeOfTable = $dataRows["TypeofTable"];
                                $numberOfCustomer = $dataRows["NumberofCustomer"];
                                $Stage = $dataRows["Stage"];
                        ?>
                        <tbody class="tbody table-striped  text-dark">
                            <tr>
                                <td><?php echo $reservationReference;?> </td>
                                <td><?php echo $typeOfOrder;?></td>
                                <td><?php echo $date;?></td>
                                <td><?php echo $time;?></td>
                                <td><?php echo $typeOfTable;?></td>
                                <td><?php echo $numberOfCustomer;?></td>
                                <td><?php echo $Stage;?></td>
                                <td><a href="approveReservation.php?ReservationReference=<?php echo $reservationReference;?>" class="btn btn-primary">Finish</a></td>
                            </tr>
                        </tbody>
                            <?php };?>
                    </table>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Finished Reservation</h2>
                    <table class="table table-striped text-center table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Reservation Reference</th>
                                <th>Type of Order</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Type of Table</th>
                                <th>Number of Customer</th>
                                <th>Stage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php 
                            global $ConnectingDB;
                            $sql = "SELECT * FROM reservation WHERE Stage ='Finished' ORDER BY ReservationReference desc";
                            $stmt = $ConnectingDB->query($sql);
                            while($dataRows=$stmt->fetch()){
                                $reservationReference = $dataRows["ReservationReference"];
                                $typeOfOrder = $dataRows["typeoforder"];
                                $date = $dataRows["date"];
                                $time = $dataRows["time"];
                                $typeOfTable = $dataRows["TypeofTable"];
                                $numberOfCustomer = $dataRows["NumberofCustomer"];
                                $Stage = $dataRows["Stage"];
                        ?>
                        <tbody class="tbody table-striped text-dark">
                            <tr>
                                <td><?php echo $reservationReference;?> </td>
                                <td><?php echo $typeOfOrder;?></td>
                                <td><?php echo $date;?></td>
                                <td><?php echo $time;?></td>
                                <td><?php echo $typeOfTable;?></td>
                                <td><?php echo $numberOfCustomer;?></td>
                                <td><?php echo $Stage;?></td>
                                <td><a href="deleteReservation.php?ReservationReference=<?php echo $reservationReference;?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        </tbody>
                        <?php };?>
                    </table>
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