<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c712g285", "ooch9AiV", "c712g285");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user_id = $_POST["user_id"];

if($user_id == '')
{
	echo "Empty Input !";
}
else
{
  $query = "INSERT INTO Users (user_id) VALUES ('$user_id')";

  if($mysqli->query($query) === TRUE)
  {
	   echo "Creating new user Succeed !";
	}
  else
  {
	   echo "Fault!".$mysqli->error;
  }
}
/* close connection */
$mysqli->close();
?>
