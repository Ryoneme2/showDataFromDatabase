<?php

require('dbconnect.php');

$sql ="SELECT * FROM employees";
$result = mysqli_query($connect,$sql);

$row = mysqli_fetch_array($result,MYSQLI_NUM); // ($value ,type of fetch)
//MYSQLI_NUM = array
//MYSQLI_ASSOC = assoc
//MYSQLI_BOTH = array + assoc


echo "<br><br>";
echo "ID = ".$row[0]."<br>";
echo "NAME = ".$row[1]."<br>";
echo "SERNAME = ".$row[2]."<br>";
echo "Gender = ".$row[3]."<br>";
echo "Skill = ".$row[4]."<br>";
echo "<hr>";

$row = mysqli_fetch_array($result,MYSQLI_NUM);
echo "<br><br>";
echo "ID = ".$row[0]."<br>";
echo "NAME = ".$row[1]."<br>";
echo "SERNAME = ".$row[2]."<br>";
echo "Gender = ".$row[3]."<br>";
echo "Skill = ".$row[4]."<br>";
echo "<hr>";    

$row = mysqli_fetch_array($result,MYSQLI_BOTH);
echo "<br><br>";
echo "ID = ".$row["ID"]."<br>";
echo "NAME = ".$row[1]."<br>";
echo "SERNAME = ".$row["SERNAME"]."<br>";
echo "Gender = ".$row[3]."<br>";
echo "Skill = ".$row[4]."<br>";
echo "<hr>";

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<br><br>";
echo "ID = ".$row["ID"]."<br>";
echo "NAME = ".$row["NAME"]."<br>";
echo "SERNAME = ".$row["SERNAME"]."<br>";
echo "Gender = ".$row["gender"]."<br>";
echo "Skill = ".$row["Skill"]."<br>";
echo "<hr>";

?>