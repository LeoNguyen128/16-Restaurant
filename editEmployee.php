<?php
    require_once('includes/DB.php');
?>
<?php
    require_once('includes/sessions.php');
?>
<?php 
    $getSin = $_GET["SIN"];
    if(isset($_POST["Submit"])){
        global $ConnectingDB;
        $employeeName = $_POST["employeeName"];
        $SIN = $_POST["SIN"];
        $ePhoneNumber = $_POST["ePhoneNumber"];
        $email = $_POST["email"];
        $position = $_POST["position"];
        $contractType=$_POST["contractType"];
        $sql = "UPDATE employee SET EName='$employeeName' , ENumber='$ePhoneNumber' , Position='$position' , Contract='$contractType' WHERE SIN='$getSin'";
        $execute=$ConnectingDB->query($sql);
        if($execute){
            $_SESSION["successMessage"]="Added Successfully";
        }
        else{
            $_SESSION["errorMessage"]="Added Failed";
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
        <div class="container-fluid bg-dark text-white py-0 mt-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Edit Employee</h1>
                    <?php echo $getSin;?>
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
                global $ConnectingDB;
                $sql = "SELECT * FROM employee WHERE SIN='$getSin'";
                $stmt = $ConnectingDB ->query($sql);
                while($dataRows = $stmt->fetch()){
                    $nameUpdating = $dataRows["EName"];
                    $SINUpdating = $dataRows["SIN"];
                    $numberUpdating = $dataRows["ENumber"];
                    $emailUpdating = $dataRows["EEmail"];
                    $positionUpdating = $dataRows["Position"];
                    $contractUpdating = $dataRows["Contract"];
                }
            ?>
            <div class="row align-items-center">
                <div class="col-lg-6 m-auto">
                    <form class="m-auto" action="editEmployee.php?SIN=<?php echo $SINUpdating;?>" method="POST">
                        <div class="card p-4">
                            <div class="card-header text-center bg-dark text-light"><h2>Edit Employee<h2></div>
                            <div class="card-body">
                                <div class="form-group my-3 my-3 text-center">
                                    <label for="employeeName">Employee Name</label>
                                        <input id="employeeName" value="<?php echo $nameUpdating;?>" class="form-control" type="text" name="employeeName" placeholder="Type employeeName here" >
                                    </div>
                                <div class="form-group my-3 text-center">
                                    <label for="SIN">SIN</label>
                                    <input id="SIN" class="form-control" value="<?php echo $SINUpdating;?>" type="number" name="SIN" placeholder="Type SIN here">
                                </div>
                                <div class="form-group my-3 text-center">
                                    <label for="ePhoneNumber">Employee Phone Number</label>
                                    <input id="ePhoneNumber" value="<?php echo $numberUpdating;?>" class="form-control" type="text" name="ePhoneNumber" placeholder="Type ePhoneNumber here"  >
                                </div>
                                <div class="form-group my-3 text-center  ">
                                <label for="email">Email</label>
                                    <input id="email" value="<?php echo $emailUpdating;?>" class="form-control" type="email" name="email" placeholder="Type email here"  >
                                </div> 
                                <div class="form-group my-3 text-center  ">
                                    <label for="position">Position</label>
                                    <input id="position" value="<?php echo $positionUpdating;?>" class="form-control" type="text" name="position" placeholder="Type position here" >
                                </div>
                                <div class="form-group my-3 text-center  ">
                                    <label for="contractType">Contract</label>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <label for="contractType1">Contract</label>
                                        <input id="contractType1"  value="<?php echo $contractUpdating;?>" class="form-control" type="radio" name="contractType" placeholder="Type contractType here" >
                                        </div>
                                        <div class="col-lg-6">
                                        <label for="contractType2">Part-Time</label>
                                        <input id="contractType2" value="<?php echo $contractUpdating;?>" class="form-control" type="radio" name="contractType" placeholder="Type contractType here" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-5 text-center">
                                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block">
                                        <i class="fas fa-check"></i> Change
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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