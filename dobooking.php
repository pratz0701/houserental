<?php
session_start();
include("connection.php");
// $tenantid=$_GET['t'];
// $houseid=$_GET['h'];
$booking_date=$_GET['b'];
$period=$_GET['p'];
$price=$_GET['pr'];
$size=$_GET['dee'];
$location=$_GET['lo'];
// $agreement=$_GET['a'];

if($_GET['submit'])
{
	if($booking_date!="" && $location!="" && $price!="")
	{
		$query="insert into booking(booking_date,period,price,sizeofhouse,location) values('$booking_date','$period','$price','$size','$location')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='booking.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='booking.php';
        </script>";
			}
	}
}
?>