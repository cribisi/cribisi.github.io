<?php
// Lucas Sward 
// Hound Dogs
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
$Reppass = $_REQUEST['reppassword'];
if($Password == $Reppass)
{
	$sql = "INSERT INTO users (username,password) VALUES	
		('$Username','$Password');";
		if(pg_query($pg_conn, $sql))
		{
			echo "You have successfully signed up!";
			echo "Test";
			header("Location: FrontPage.html");
			exit();
		}
		else
		{
			echo "Error: Could not execute $sql ."; 
			pg_error($pg_conn);
		}
		include 'NewUserLogin.php';
	pg_close($pg_conn);
}
else 
{
	echo "Your passwords do not match, try again";
}
?>
