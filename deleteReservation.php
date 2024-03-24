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
        $sql="DELETE FROM reservation WHERE ReservationReference='$searchQueryParameter'";
        $execute=$ConnectingDB->query($sql);
        if($execute){
            $_SESSION['successMessage']="The Reservation has been deleted";
            function Redirect_To($new_Location){
                header("Location:".$new_Location);
                exit;
            }
            Redirect_to('manageReservation.php');
        }
        else{
            $_SESSION['errorMessage']="The Reservation has not been deleted";
            function Redirect_To($new_Location){
                header("Location:".$new_Location);
                exit;
            }
            Redirect_to('manageReservation.php');
        }
    }
?>