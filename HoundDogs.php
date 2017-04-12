<?php

function pg_connection_string_from_database_url() {
	return "dbname=dff2a27c9i26ki host=ec2-23-23-227-188.compute-1.amazonaws.com port=5432 user=vdlgvifazdpdaj password=1c07055de63f0532e4e4015d9b6b062821708286d27396e7262a40910194394c sslmode=require"; # <- you may want to add sslmode=require there too
}

$pg_conn = pg_connect(pg_connection_string_from_database_url());
if (!pg_conn) {
	echo "Database connection error.";
	exit;
}

$result = pg_query($pg_conn, "SELECT id, name FROM test_table");

echo "<h4>Welcome to Hound Dogs! </h4>";
echo "<p>We'd like to invite you to use Hound Dogs to meet dogs around town. Please sign up below!</p>";

while ($row = pg_fetch_array($result)) {
	echo "<p>";
	echo $row["id"] . "<- ID\n";
	echo $row["name"] . "<- Name\n";
	echo "</p>";
}

?>
