<?php

require('dbconnect.php');

$sql ="SELECT * FROM employees";
$result = mysqli_query($connect,$sql);

 

?>