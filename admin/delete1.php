<?php
include "db.php";
$sno = $_GET['i'];
$query="delete from news where sno='$sno'";
mysql_query($query);
header("Location:edit_cont.php?i=1");
?>