<?php 
session_start(); 
$test = $_SESSION['username'];
$temp = strlen ( $test );
if($temp != 0)
{

}
else
{
header("location:../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upica Admin</title>
<style type="text/css">
.main{
	position:relative;
	width:100%;
	font-family:Arial, Helvetica, sans-serif;
}
.header{
	width:900px;
	border:1px  #000 solid;
	margin-left:auto;
	margin-right:auto;}

.p_body{
	width:900px;
	height:500px;
	padding-top:100px;
	margin-left:auto;
	border:1px #000 solid;
	margin-right:auto;}

.footer{
	width:900px;
	text-align:center;
	margin-left:auto;
	margin-right:auto;
	border:1px #000 solid;}

</style>
</head>

<body>

<div class="main">
	<div class="header">
    	<?php include"menu.php"; ?>
    </div>
    
    <div class="p_body">
    	<div style="padding-left:50px;">
    
    	<?php 
$i = $_GET['i'];
if($i == 1)
{
	echo "<font color='green'>Added Successful..</font>";
}
if($i == 2)
{
	echo "<font color='red'>Somthing wrong contact administrator..</font>";
}
?>
	<table width="100%">
		<tr>
			<td>S No.</td>
			<td>Title</td>
			<td>Board Content</td>
			<td>Web Url</td>			
			<td>Click For Delete</td>
		</tr>
<?php
include_once "db.php";
	
	$i = 1;	
	$query = "select * from news";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['title']; ?></td>			
			<td width="300"><?php echo $row['detail']; ?></td>
			<td><a href="<?php echo $row['url']; ?>" target="_blank"><?php echo $row['url']; ?></a></td>
			<td><a href="delete1.php?i=<?php echo $row['sno']; ?>">Delete</a></td>
		</tr>
<?php 
$i++;
} ?>
	</table>
                  </div>
    </div>
    
    <div class="footer">
    	Copyright &copy; 2013 UPICA Institute.
    </div>
</div>

</body>
</html>