<?php
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
