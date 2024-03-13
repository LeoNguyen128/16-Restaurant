<?php
    require_once('includes/DB.php');
?>
<?php
    require_once('includes/sessions.php');
?>
<?php 
    global $ConnectingDB;
    $sql = "CREATE TABLE admin(
        adminId int(10) AUTO_INCREMENT not null PRIMARY KEY ,
        adminname VARCHAR(50)  not null,
        adminusername varchar(50) not null,
        password varchar(50) not null)";
    $stmt = $ConnectingDB->prepare($sql);
    $execute = $stmt->execute();
    if(isset($_POST["Submit"])){
        $adminName = $_POST["adminName"];
        $adminUsername = $_POST["adminUsername"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmpassword"];
        if($password!=$confirmPassword){
            $_SESSION["errorMessage"]="your confirm password doesn't match";
        }
        else{
            global $ConnectingDB;
            $sql1 = "INSERT INTO admin(adminname,adminusername,password) VALUES (:adminnamE,:adminusernamE,:passworD)";
            $stmt1 = $ConnectingDB->prepare($sql1);
            $stmt1->bindValue(":adminnamE",$adminName);
            $stmt1->bindValue(":adminusernamE",$adminUsername);
            $stmt1->bindValue(":passworD",$password);
            $execute1 = $stmt1->execute();
            if($execute1){
                $_SESSION["successMessage"]="Added Successfully";
            }
            else{
                $_SESSION["errorMessage"]="Added Failed";
            }
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
                    <h1>Manage Admin</h1>
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
                <div class="col-lg-6 m-auto">
                    <form class="m-auto" action="admin.php" method="POST">
                        <div class="card p-4">
                            <div class="card-header text-center bg-dark text-light"><h2>Add Admin<h2></div>
                            <div class="card-body">
                                <div class="form-group my-3 my-3 text-center">
                                    <label for="adminName">Admin Name</label>
                                        <input id="adminName" class="form-control" type="text" name="adminName" placeholder="Type adminName here" >
                                    </div>
                                <div class="form-group my-3 text-center">
                                    <label for="adminUsername">adminUsername</label>
                                    <input id="adminUsername" class="form-control" type="text" name="adminUsername" placeholder="Type adminUsername here"  >
                                </div>
                                <div class="form-group my-3 text-center  ">
                                    <label for="password">password</label>
                                    <input id="password" class="form-control" type="password" name="password" placeholder="Type password here"  >
                                </div> 
                                <div class="form-group my-3 text-center  ">
                                    <label for="confirmpassword">Confirm password</label>
                                    <input id="confirmpassword" class="form-control" type="password" name="confirmpassword" placeholder="Type confirmpassword here"  >
                                </div> 
                                <div class="form-group mt-5 text-center">
                                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block">
                                        <i class="fas fa-check"></i> Add
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