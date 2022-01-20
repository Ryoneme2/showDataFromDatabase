<?php

require('dbconnect.php');
$sql ="SELECT * FROM employees";
$result = mysqli_query($connect,$sql);

$row = mysqli_fetch_assoc($result); // return array but key to onset

// print_r($row);

$row = mysqli_fetch_assoc($result);
echo "<br><br>";
echo "ID = ".$row["ID"]."<br>";
echo "NAME = ".$row["NAME"]."<br>";
echo "SERNAME = ".$row["SERNAME"]."<br>";
echo "Gender = ".$row["gender"]."<br>";
echo "Skill = ".$row["Skill"]."<br>";
echo "<hr>";

$row = mysqli_fetch_assoc($result);
echo "<br><br>";
echo "ID = ".$row["ID"]."<br>";
echo "NAME = ".$row["NAME"]."<br>";
echo "SERNAME = ".$row["SERNAME"]."<br>";
echo "Gender = ".$row["gender"]."<br>";
echo "Skill = ".$row["Skill"]."<br>";
echo "<hr>";


$row = mysqli_fetch_assoc($result);
echo "<br><br>";
echo "ID = ".$row["ID"]."<br>";
echo "NAME = ".$row["NAME"]."<br>";
echo "SERNAME = ".$row["SERNAME"]."<br>";
echo "Gender = ".$row["gender"]."<br>";
echo "Skill = ".$row["Skill"]."<br>";
echo "<hr>";

?>