<?php

require "connect.php";



$id = $_POST['id'];

$delete = $connect -> query("DELETE from task WHERE id='$id' ");

header("location:../index.php");



