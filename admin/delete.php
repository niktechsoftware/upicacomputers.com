<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from student where sno='$sno'";
mysql_query($query);
header("Location:s_stu.php?i=1");
?>