<?php
// Login Handler for Hound Dogs website



function pg_connection_string_from_database_url() {
	return "dbname=dff2a27c9i26ki host=ec2-23-23-227-188.compute-1.amazonaws.com port=5432 user=vdlgvifazdpdaj password=1c07055de63f0532e4e4015d9b6b062821708286d27396e7262a40910194394c sslmode=require"; # <- you may want to add sslmode=require there too
}

$pg_conn = pg_connect(pg_connection_string_from_database_url());
if (!pg_con) {
	echo "Database connection error.";
	exit;
}
$Username = $_REQUEST['username'];
$Password = $_REQUEST['password'];

$user = pg_query($pg_conn,"SELECT username from users where username = '$Username';");
$namearr = pg_fetch_array($user);
$dbusername = $namearr['username'];


$password = pg_query($pg_conn,"SELECT password from users where username = '$Username';");
$dbupasswordarr = pg_fetch_array($password);
$dbupassword =  $dbupasswordarr['password'];


$pusername = pg_query($pg_conn,"SELECT username from users where password = '$Password';");
$usernametrue = 0;
while($dbpusernamearr = pg_fetch_array($pusername)){
	$dbpusername =  $dbpusernamearr['username'];
	if($dbpusername==$Username){
		$usernametrue = 1;
	}
}


if(!$dbusername){
	echo "Your username was not found please try again";
	include 'LoginPage.html';
}
else if($Password != $dbupassword || $usernametrue==0){
	echo "You entered an incorrect username or password, please try again";
	include 'LoginPage.html';
}
else{
	echo "You've successfully logged in";
	include 'LoginPage.html';
}
pg_close($pg_conn);





?>
