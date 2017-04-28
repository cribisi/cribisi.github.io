<?php
// Lucas Sward & Fernando Mercado
// Hound Dogs

$Username = $_REQUEST['username'];
$Password = $_REQUEST['password'];
$Reppass = $_REQUEST['reppassword'];

class InsertUsers{

	public function TestSignUp($Username, $Password, $Reppass)
	{
		//Section for Cases 1a-c
		if($Username == "" || $Password == "" || $Reppass == "")
		{
			
			$fmessage = "Please Insert a Username and Password";
			echo "<script type='text/javascript'>alert('$fmessage');</script>";
			//include 'NewUserLogin.php';
			return false;
		}


		//Section for Cases 2a-d 
		elseif(strlen($Username) < 4 || strlen($Username) > 20 || strlen($Password) < 4 || strlen($Password) > 20) 
		{
				
				$message = "Submit a Username and Password between 4 to 20 characters ";
				//include 'NewUserLogin.php';
		    	echo "<script type='text/javascript'> alert('$message');";
		    	echo "</script>";
		    	return false;
		}

		//Section for Case 3
		elseif($Password =! $Reppass)
		{
				
				echo "Your passwords do not match, try again";
				return false;
		}

		//Section for Case 4
		else 
		{
			return true;
		}

		if(TestSignUp)
		{
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

			$sql = "INSERT INTO users (username,password) VALUES('$Username','$Password');";
				if(pg_query($pg_conn, $sql))
				{
					echo "You have successfully signed up!";
					header("Location: FrontPage.html");
					//include 'NewUserLogin.php';
					exit();
				}
				else
				{
					echo "Error: Could not execute $sql ."; 
					pg_error($pg_conn);
				}
			pg_close($pg_conn);
		}
	}
}


?>
