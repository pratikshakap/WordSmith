<?php

$dbc=mysqli_connect('localhost','root','','test')
      or die("error connecting to the database");
$query="update copyrightdeal set status=\"decline\" where dealid={$_GET['dealid']}";
    $result=mysqli_query($dbc,$query);

header("location:portal.php");

?>