<?php
//show data in database


require('dbconnect.php');

$sql ="SELECT * FROM employees";
$result = mysqli_query($connect,$sql);

//$row = mysqli_fetch_row($result); //?  row return array

// foreach ($row as $key => $value) {
//     echo $value."<br>";
// }

$row = mysqli_fetch_array($result,MYSQLI_NUM);
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

$row = mysqli_fetch_array($result,MYSQLI_NUM);
echo "<br><br>";
echo "ID = ".$row[0]."<br>";
echo "NAME = ".$row[1]."<br>";
echo "SERNAME = ".$row[2]."<br>";
echo "Gender = ".$row[3]."<br>";
echo "Skill = ".$row[4]."<br>";
echo "<hr>";

?>