<?php
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM bookings
        WHERE booking_id='$id'";

if(mysqli_query($conn,$sql)){

    header("Location: mybookings.php");

}else{

    echo "Cancel Failed";
}
?>