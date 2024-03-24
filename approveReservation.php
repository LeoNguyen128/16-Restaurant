<?php
    require_once('includes/DB.php');
?>
<?php
    require_once('includes/sessions.php');
?>
<?php 
    if(isset($_GET["ReservationReference"])){
        $searchQueryParameter = $_GET["ReservationReference"];
        global $ConnectingDB;
        $sql="UPDATE reservation SET Stage='Finished' WHERE ReservationReference='$searchQueryParameter'";
        $execute=$ConnectingDB->query($sql);
        if($execute){
            $_SESSION['successMessage']="The Reservation has finished";
            function Redirect_To($new_Location){
                header("Location:".$new_Location);
                exit;
            }
            Redirect_to('manageReservation.php');
        }
        else{
            $_SESSION['errorMessage']="The Reservation has not finished";
            function Redirect_To($new_Location){
                header("Location:".$new_Location);
                exit;
            }
            Redirect_to('manageReservation.php');
        }
    }
?>