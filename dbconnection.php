<?php
    function dbconnection(){
        $con = mysqli_connect("localhost","root","","cessna");
        return $con;
    }

?>