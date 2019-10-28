
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c712g285", "ooch9AiV", "c712g285");

if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$delete = $_POST["checkbox"];
foreach($delete as $value)
{
	$query = "DELETE FROM Posts WHERE post_id = '$value'";
	if($mysqli->query($query) === TRUE)//if deleted
	{
		echo "the post-- " .$value. " has been deleted.";
	}
	else
	{
		echo "Fault!" . $sql . $mysqli->error;
	}
}
/* close connection */
$mysqli->close();
?>
