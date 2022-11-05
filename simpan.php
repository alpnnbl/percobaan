<?php
require("connect.php");

$email=$_POST["email"];
$email=$_POST["pesan"];

$data="INSERT INTO pesanbaru VALUES('$email','$pesan')";
mysqli_query($connect,$data);
?>