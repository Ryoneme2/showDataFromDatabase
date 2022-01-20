<?php
//save data to database

require('dbconnect.php');

$dataName = $_POST["NAME"];
$dataSername = $_POST["SERNAME"];
$dataGD = $_POST["GENDER"];
// $dataCB = $_POST["SKILL"];
$dataCB = implode(',',$_POST["SKILL"]);

$sql = "INSERT INTO employees(NAME,SERNAME,gender,SKILL) VALUE('$dataName','$dataSername','$dataGD','$dataCB')";

$result = mysqli_query($connect,$sql); //save data

if($result) {
    echo "SAVE DONE";
} else {
    mysqil_error($connect);
}

 ?>