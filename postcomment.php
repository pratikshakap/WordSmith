<?php

$dbc=mysqli_connect('localhost','root','','test') or die("error connecting to the database");
$comment = $_POST['comment'];
$articleid=$_POST['articleid'];
$query='INSERT INTO comments (content, articleid) VALUES("'.$comment.'","'.$articleid.'")';

$result = mysqli_query($dbc,$query) or die('no query');
echo $result;

?>