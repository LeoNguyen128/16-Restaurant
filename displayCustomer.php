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
                    <h1>Display Customer</h1>
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
                    <h2>Current Customer</h2>
                    <table class="table table-striped text-center  table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>SIN</th>
                                <th>Employee Name</th>
                                <th>Employee Number</th>
                                <th>Employee Email</th>
                                <th>Position</th>
                                <th>Contract</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php 
                            global $ConnectingDB;
                            $sql = "SELECT * FROM employee";
                            $stmt = $ConnectingDB->query($sql);
                            while($dataRows=$stmt->fetch()){
                                $SIN = $dataRows["SIN"];
                                $EName = $dataRows["EName"];
                                $ENumber = $dataRows["ENumber"];
                                $EEmail = $dataRows["EEmail"];
                                $Position = $dataRows["Position"];
                                $Contract = $dataRows["Contract"];
                        ?>
                        <tbody class="tbody table-striped  text-dark">
                            <tr>
                                <td><?php echo $SIN;?> </td>
                                <td><?php echo $EName;?></td>
                                <td><?php echo $ENumber;?></td>
                                <td><?php echo $EEmail;?></td>
                                <td><?php echo $Position;?></td>
                                <td><?php echo $Contract;?></td>
                                <td><a href="editEmployee.php?SIN=<?php echo $SIN;?>" class="btn btn-primary">EDIT</a></td>
                                <td><a href="deleteEmployee.php?SIN=<?php echo $SIN;?>" class="btn btn-danger">DELETE</a></td>
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