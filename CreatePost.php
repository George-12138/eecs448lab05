<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c712g285", "ooch9AiV", "c712g285");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user_id = $_POST["user_id"];
$content = $_POST["content"];
$my_query = "SELECT * FROM Users WHERE user_id = '$user_id' ";
$result = mysqli_query($mysqli, $my_query);
$row_num = mysqli_num_rows($result);
if($row_num == 1)
{
	if($content == '')
	{
		echo "Empty Input !";
	}
	else
	{
		$query = "INSERT INTO Posts (author_id, content) VALUES ('$user_id', '$content')";
		if($mysqli->query($query) === TRUE)
		{
			echo "Creating new post Succeed !";
		}
		else{ echo "Fault!"."<br>".$mysqli->error; }
	}
}
else
{ echo "This user has not been created yet"; }
/* close connection */
$mysqli->close();
?>
