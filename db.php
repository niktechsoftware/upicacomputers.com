<?php
$dbhost='localhost';
$dbuser='root';
$dbpass="";
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die ("Database Problem");
mysql_select_db('upica') or die ("Error ".mysql_error());
?>