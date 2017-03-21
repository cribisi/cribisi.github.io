<?php

$connection = @mysqli_connect ('sql3.freemysqlhosting.net', 'sql3163983', '2HDmRGDiUc','sql3163893');

if(mysqli_connect_errno()){
	echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}
else {
	echo "<h4>Welcome to Hound Dogs! </h4>";
	echo "<p>We'd like to invite you to use Hound Dogs to meet dogs around town. Please sign up below!</p>";
}
?>
