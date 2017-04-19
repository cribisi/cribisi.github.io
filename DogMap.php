<?php
$Longitude = $_REQUEST['longitude'];
$Latitude = $_REQUEST['latitude'];
class DogMap{

public function CoordinateCheck($Latitude,$Longitude)
{
	

if($Longitude >= -105.3 && $Longitude <= -105.2 && $Latitude <= 40.07 && $Latitude >= 39.96)
{
	return true;
		echo "You have entered a correct location";
}
else 
{
	return false;
	echo "You have entered a wrong location";
}

}

}
?>
