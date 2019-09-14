<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['name'];
$lastName=$_POST['lastName'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$sex=$_POST['sex'];
echo "Name $name Lastname $lastName Address $address Phone $phone Sex $sex";
header("location: index.php?answer=datos recibidos&name={$name}");
}

?>