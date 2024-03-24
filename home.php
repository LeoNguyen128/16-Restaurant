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
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container" >
            <a href="home.php" class="navbar-brand text-dark">Pho Restaurant</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarcollapseCMS">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link text-dark">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.php" class="nav-link text-dark">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="reservation.php" class="nav-link text-dark">Reservation</a>
                    </li> 
                    <li class="nav-item">
                        <a href="customer.php" class="nav-link text-dark">Customer</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link text-dark"><i class="fas fa-user"></i> Log In</a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <!-- MAIN  -->
    <main>
        <section class="row align-items-center bg-light">
            <div class="col-lg-10 first">
                
            </div>
            <div class="col-lg-2 ">
                <h2 class="text-center">Restaurant</h2>
                <hr>
                <h2 class="text-center align-text-bottom">Est. 2020</h2>
            </div>  
        </section>
        <section class="container bg-light">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center align-middle">
                    <h2>Made With Love.</h2>
                    <h2>Simply Delicious</h2>
                    <a href="menu.php" class="btn btn-primary mt-3 p-3">View Menu</a>
                </div>
                <div class="col-lg-6 second">
                </div>  
            </div>
        </section>
        <div class="row align-items-center justify-content-center third">
            <div class="col-lg-4 text-center align-middle">
                <div class="card bg-light">
                    <div class="card-header">
                        <h1>A Fresh and Seasonal Cuisine</h1>
                    </div>
                    <div class="card-body">
                        <p>One of The Best Pho in Town with unique flavor and fantastic services.</p>
                        <a href="reservation.php" class="btn btn-primary p-3">Reserve A Table</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="container" style="min-height:200px">
            <div class="row bg-light">
                <div class="col-lg-12 text-center">
                    <h1>Interesting Facts</h1>
                </div>
                <div class="col-lg-3 mt-5">
                    <a href="joinquery.php" class="btn btn-primary">Find the phone number of all customer in the same reservation</a>
                </div>
                <div class="col-lg-3 mt-5">
                    <a href="divisionquery.php" class="btn btn-primary">Find the name of customer in the same reservation</a>
                </div>
                <div class="col-lg-3 mt-5">
                    <a href="aggretionquery.php" class="btn btn-primary">Find the number of processing and finished orders and reservations</a>
                </div>
                <div class="col-lg-3 mt-5">
                    <a href="nestedaggression.php" class="btn btn-primary">Find the average of customer ordering and reserving a table</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-dark mt-3 bg-light">
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