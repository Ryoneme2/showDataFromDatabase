<?php

require('dbconnect.php');

$sql ="SELECT * FROM employees";
$result = mysqli_query($connect,$sql);
// $row = mysqli_fetch_row($result);

if ($result = mysqli_query($connect, $sql)) {
    // $i = 0
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
        echo "<br><br>";
        echo "ID = ".$row[0]."<br>";
        echo "NAME = ".$row[1]."<br>";
        echo "SERNAME = ".$row[2]."<br>";
        echo "Gender = ".$row[3]."<br>";
        echo "Skill = ".$row[4]."<br>";
        echo "<hr>";
    }
    mysqli_free_result($result);
  }

?>