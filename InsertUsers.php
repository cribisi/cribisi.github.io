<?php
// Lucas Sward & Fernando Mercado
// Hound Dogs

$Username = $_REQUEST['username'];
$Password = $_REQUEST['password'];
$Reppass = $_REQUEST['reppassword'];

//Function that connects to our database
function pg_connection_string_from_database_url()
	{
		return "dbname=dff2a27c9i26ki host=ec2-23-23-227-188.compute-1.amazonaws.com port=5432 user=vdlgvifazdpdaj password=1c07055de63f0532e4e4015d9b6b062821708286d27396e7262a40910194394c sslmode=require"; # <- you may want to add sslmode=require there too
	}

	$pg_conn = pg_connect(pg_connection_string_from_database_url());
	if (!pg_con) {
		echo "Database connection error.";
		exit;
	}
	
	if($Username=="" || $Password==""){
		echo "You entered an incorrect username or password, please try again";
		include 'NewUserLogin.php';
		exit();
	}
	if(strlen($Username)<=3 || strlen($Password)<=3){
		echo "You entered an incorrect username or password, please try again";
		include 'NewUserLogin.php';
		exit();
	}
	if($Password != $Reppass){
		echo "The repeated password must match your entered password, please try again";
		include 'NewUserLogin.php';
		exit();
	}
	
	$user = pg_query($pg_conn,"SELECT username from users where username = '$Username';");
	$namearr = pg_fetch_array($user);
	$dbusername = $namearr['username'];
	if($dbusername != NULL){
		echo "That username already exists, please try again";
		include 'NewUserLogin.php';
		exit();
	}

	$sql = "INSERT INTO users (username,password) VALUES('$Username','$Password');";
	if(pg_query($pg_conn, $sql)){
		echo "You have successfully signed up!";
		header("Location: NewUserLogin.php");
		//include 'NewUserLogin.php';
		exit();
	}
	else{
		echo "Error: Could not execute $sql .";
		pg_error($pg_conn);
	}
	pg_close($pg_conn);

?>
