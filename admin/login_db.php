<?php 
session_start();
include_once"db.php";
$uname = trim($_POST['uid']);
$pass = trim($_POST['pass']);
$q="select * from user_login where user_id='$uname' and password='$pass'";
$s=mysql_query($q);
$o=mysql_fetch_object($s);
$n=mysql_num_rows($s);
if($n>0) {
$_SESSION['username']=$uname;
//echo "succ";
header("location:s_stu.php");
} else {
//echo "fail";
header("location:index.php?i=1");
}
