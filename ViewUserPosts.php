<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c712g285", "ooch9AiV", "c712g285");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST['usernames'];
$query = "SELECT content FROM Posts WHERE author_id = '$username'";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["content"]."</td></tr>";
    }
echo "</table>";
    $result->free();
}
/* close connection */
$mysqli->close();
?>
