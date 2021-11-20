<?php
require 'config.php';

$idv= $_GET['del'];
$q="delete from notes where srno=$idv";
mysqli_query($con,$q);
header('location:index.php');

?>