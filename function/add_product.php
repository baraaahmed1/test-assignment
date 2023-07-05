<?php

require "connect.php";



$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$size = $_POST['size'];
$weight = $_POST["weight"];
$height = $_POST['height'];
$width = $_POST['width'];
$length = $_POST['length'];
$delete = $_POST['del'];




$insert_product = $connect ->query("INSERT INTO task 
(sku,name,price,size,weight,height,width,length,del) 
VALUES
('$sku','$name','$price','$size','$weight','$height','$width','$length',0)");

    header("location:../index.php");

    

