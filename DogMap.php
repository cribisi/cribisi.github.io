<?php
$connection = @mysqli_connect ('127.0.0.1', 'root', 'lucas', 'HoundDogs');
if(mysqli_connect_errno())
{
	echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else
{
	echo "<h4>Successfully connected to MySQL: </h4>";
}
$Longitude = $_REQUEST['longitude'];
$Latitude = $_REQUEST['latitude'];
if($Longitude >= -105.3 && $Longitude <= -105.2 && $Latitude <= 40.07 && $Latitude >= 39.96)
{
		echo "You have entered a correct location;
}
else 
{
	echo "You have entered a wrong location";
}
?>
