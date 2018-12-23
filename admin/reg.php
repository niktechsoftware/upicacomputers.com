<?php
include_once 'db.php';

$prodname = $_POST['name'];
$file = $_FILES['img'];
$quant = $_POST['dept'];
$a = mt_rand(1000,9999);

$b = $a.$file[name];

$t = mysql_query("INSERT INTO student(name,image,department) VALUES('$prodname','$b','$quant')");


if($t)
{
	move_uploaded_file($file["tmp_name"],"./new_stu_images/" . $a."".$file["name"]);
	header("Location:s_stu.php?i=1");

}
else
{
	header("Location:s_stu.php?i=2");

	}

?>