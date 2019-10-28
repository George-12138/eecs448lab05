<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="">
    <title>View Users</title>
    <style media="screen">

    table,tr,td{
      background-color: #99b89b;
      color:#2a363b;
      border: 1px solid black;
      border-radius: 5px;
      font-size: 15pt;
      margin: auto;
    }

    th{
      color:#2a363b;
      border: 2px solid black;
      border-radius: 5px;
      font-size: 20pt;
      margin: auto;
    }
    </style>
  </head>
</html>

<?php

  $mysqli = new mysqli("mysql.eecs.ku.edu", "c712g285", "ooch9AiV", "c712g285");
  /* check connection */
  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = ("SELECT * FROM Users ORDER by user_id ASC");

  if ($query = $mysqli->query($query))
  {
    echo "<table>";
    echo "<tr>"."<th>"."User Name"."</th>"."</tr>";
    while($row = $query->fetch_assoc())
    {
      echo "<tr>"."<td>".$row['user_id']."</td>"."</tr>";
    }
    echo "</table>";
  }
  else
  {
    echo '<b>MySQL error:</b><br>' . mysql_error() . '<br />';
  }

?>
