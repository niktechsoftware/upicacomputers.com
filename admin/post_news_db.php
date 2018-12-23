<?php
include_once 'db.php';

$title = $_POST['title'];
$detail = $_POST['cont'];
$url = $_POST['url'];


$t = mysql_query("INSERT INTO news(title,detail,url) VALUES('$title','$detail','$url')");


if($t)
{
	
header("Location:board.php?i=1");

}
else
{
	header("Location:board.php?i=2");

	}

?>