<?php
    require_once('includes/DB.php');
?>
<?php
    require_once('includes/sessions.php');
?>
<?php 
    if(isset($_GET["SIN"])){
        $searchQueryParameter = $_GET["SIN"];
        global $ConnectingDB;
        $sql="DELETE FROM employee WHERE SIN='$searchQueryParameter'";
        $execute=$ConnectingDB->query($sql);
        if($execute){
            $_SESSION['successMessage']="The employee has been deleted";
            function Redirect_To($new_Location){
                header("Location:".$new_Location);
                exit;
            }
            Redirect_to('displayEmployee.php');
        }
        else{
            $_SESSION['errorMessage']="The employee has not been deleted";
            function Redirect_To($new_Location){
                header("Location:".$new_Location);
                exit;
            }
            Redirect_to('displayEmployee.php');
        }
    }
?>