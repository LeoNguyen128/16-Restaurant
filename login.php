<?php 
    require_once("includes/DB.php");
?>
<?php 
    require_once("includes/function.php");
?>
<?php 
    require_once("includes/sessions.php");
?>
<?php 
    if(isset($_SESSION["userId"])){
        Redirect_to("adminDashboard.php");
    }
    if(isset($_POST["submit"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        if(empty($username)||empty($password)){
            $_SESSION["errorMessage"]="Please Fill Out Both Username And Password";
            Redirect_to("login.php");
        }else{
            $foundAccount=loginAttempt($username,$password);
            if($foundAccount){
                $_SESSION["userId"]=$foundAccount["id"];
                $_SESSION["username"]=$foundAccount["username"];
                $_SESSION["admin"]=$foundAccount["aname"];
                $_SESSION["successMessage"]="Login Successfully";
                if(isset($_SESSION["TrackingUrl"])){
                    Redirect_to($_SESSION["TrackingUrl"]);
                }else{
                    Redirect_to("adminDashboard.php"); 
                }
                
            }else{
                $_SESSION["errorMessage"]="Incorrect Username or Password";
                Redirect_to("login.php");
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
                    
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link text-light"><i class="fas fa-user"></i> Log In</a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <!-- MAIN  -->
    <main>
        <section class="container fifth">
            <div class="row">
                <?php echo errorMessage();?>
                <?php echo successMessage();?>
                <div class="col-lg-5 mx-auto">
                    <form action="login.php" method="POST" class="bg-dark">
                        <div class="card">
                            <div class="card-header bg-dark text-light">Log In</div>
                            <div class="card-body">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username" id="username">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password">
                                <input name="submit" type="submit" class="btn btn-primary form-control mt-3" value="Log In">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-light mt-3 bg-dark fixed-bottom">
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