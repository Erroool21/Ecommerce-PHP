<?php

$con = mysqli_connect("localhost", "root", "" , "ecommerce");

if ($con) {
    echo "<script>console.log('connected')</script>";
}else{
    echo "<script>console.log('not connected')</script>";
}  

?>