<?php
include('connection.php');
if(isset($_POST['submit'])){
    $visitor_name=$_POST['visitor_name'];
    $visitor_email=$_POST['visitor_email'];
    $visitor_phone=$_POST['visitor_phone'];
    $total_adults=$_POST['total_adults'];
    $total_children=$_POST['total_children'];
    $Booking_date=$_POST['Booking_date'];
    $location=$_POST['location'];
    $query="INSERT INTO bookings(`visitor_name`, `visitor_email`, `visitor_phone`, `total_adults`, `total_children`, `Booking_date`, `location`) VALUES ('$visitor_name','$visitor_email','$visitor_phone','$total_adults','$total_children','$Booking_date','$location')";
    $result=$conn->query($query);
    header("Location: page.html");
}
?>