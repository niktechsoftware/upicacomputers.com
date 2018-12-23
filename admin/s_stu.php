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
							<form method="post" action="reg.php" enctype="multipart/form-data" >
							<table>
								<tr>
									<td>Name</td>
									<td><input type="text" name="name"/></td>
								</tr>
                                <tr>
									<td colspan="2">&nbsp;</td>
								</tr>
								<tr>
									<td>Image</td>
									<td><input type="file" name="img"/></td>
								</tr>
                                <tr>
									<td colspan="2">&nbsp;</td>
								</tr>
								<tr>
									<td>Short Success Story</td>
									<td><textarea cols="30" rows="6" name=dept"></textarea></td>
								</tr>
                                <tr>
									<td colspan="2">&nbsp;</td>
								</tr>
								<tr>
									<td><input type="submit" value="Enter Detail" /></td>
									<td><input type="reset" value="Reset" /></td>
								</tr>
							</table>
							</form>
                  </div>
    </div>
    
    <div class="footer">
    	Copyright &copy; 2013 UPICA Institute.
    </div>
</div>

</body>
</html>