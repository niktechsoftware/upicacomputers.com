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
							<form method="post" action="varification.php" id="form2" runat="server" enctype="multipart/form-data">
				
				<table width="80%" align="center">
                			<tr>
						<td align="left">ENROLLMENT NO*
						</td>
						<td align="left"><input type="text" name="enroll" size="40" required/>
						</td>
					</tr>
					<tr>
						<td align="left">NAME OF CANDIDATE*
						</td>
						<td align="left"><input type="text" name="name" size="40" required/>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">FATHER'S NAME* :
						</td>
						<td align="left"><input type="text" name="fname" size="40" required />
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
                    <tr>
						<td align="left">MOTHER'S NAME* :
						</td>
						<td align="left"><input type="text" name="mname" size="12"  required/>
						</td>
					</tr>
                    
					<tr>
						<td align="left">CITY :
						</td>
						<td align="left"><input type="text" name="city" size="12"  required/>
						</td>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td valign="top" align="left">CATEGORY* :</td>
					<td align="left"><input type="text" name="cat" size="12"  required/>
					</tr>
					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					
					<tr>
						<td align="left">CENTER CODE :</td>
						<td align="left"><input type="text" name="ccode" size="20" required/></td>
					</tr>
					<tr>
					<tr>
						<td align="left">STUDY CENTER :</td>
						<td align="left"><input type="text" name="scenter" size="20" required/></td>
					</tr>
					<tr>
                				<td align="left">Grade*</td>
						<td align="left"><input type="text" name="id" size="40" required/></td>
					</tr>					
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
					<tr>
						<td>Browse your Image:</td>
						<td><input type="file" class="file_1" name="img" />JPEG, GIF 5MB max per image</td>
					</tr>
					<tr>
						<td align="center" colspan="2">&nbsp;</td>						
					</tr>
                    
                    <tr>
						<td valign="top" align="left">COURSE* :</td>
					<td align="left"><input type="text" name="course" size="12"  required/>
					</tr>
                    
                    <tr>
						<td valign="top" align="left">GENDER* :</td>
					<td align="left"><input type="text" name="gender" size="12"  required/>
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="REGISTER" />	&nbsp;&nbsp;	<input type="reset" value="RESET" />	</td>						
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