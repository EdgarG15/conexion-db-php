<?php

include("dbconnection.php");
$con=dbconnection();

if(isset($_POST["nombre"]))
{
    $unombre=$_POST["nombre"];
}
else return;

if(isset($_POST["letra"]))
{
    $uletra=$_POST["letra"];
}
else return;

$query="INSERT INTO `musica`( `unombre`, 'uletra') VALUES ('$unombre', '$uletra')";
$exe=mysqli_query($con,$query);

$arr=[];
if($exe)
{
    $arr["success"]="true";
}
else
{
    $arr["success"]="false";
}
print(json_encode($arr));

?>