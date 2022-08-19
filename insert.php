<?php

include("dbconnection.php");
$con=dbconnection();

if(isset($_POST["apartado"]))
{
    $uapartado=$_POST["apartado"];
}
else return;

$query="INSERT INTO `apartados`( `uapartado`) VALUES ('$uapartado')";
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