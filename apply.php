<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!Created by Hwebs on Sat, 16 Nov 2013 20:04:27 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::Upica Institute of Techonology and Management:: </title>

<!-- colorpicker stylesheet -->
<link rel="stylesheet" type="text/css" href="colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="colorpicker/css/layout.css"/>

<!-- important stylesheets -->
<link rel="stylesheet" href="css/superfish.css" type="text/css" media="all" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:regular,bold" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/portfolio.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link rel="stylesheet" href="css/mosaic.css" type="text/css" media="screen" />

<!--important javascipt-->
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/superfish.js" type="text/javascript"></script>
<script src="js/supersubs.js" type="text/javascript"></script>
<script src="js/hoverIntent.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/script.js"> </script>

<!-- colorpicker script -->
<script type="text/javascript" src="colorpicker/js/eye.js"></script>
<script type="text/javascript" src="colorpicker/js/utils.js"></script>
<script type="text/javascript" src="colorpicker/js/colorpicker.js"></script>
<script type="text/javascript" src="colorpicker/js/scripts.js"></script>


</head>

<body>
<!-- color picker -->
<div class="schemas">
			<a class="styleswitch default-pat" rel="default-pat" href="#"><span></span></a>
			<a class="styleswitch head-pat3" rel="head-pat3" href="#"><span></span></a>			
            <a class="styleswitch head-pat1" rel="head-pat1" href="#"><span></span></a>
            <a class="styleswitch head-pat2" rel="head-pat2" href="#"><span></span></a>
			<a class="styleswitch head-pat4" rel="head-pat4" href="#"><span></span></a>			
            <a style="text-indent: 0px;" class="styleswitch colors tiptip" title="Click and choose our favorite color" id="schema-colorpicker" rel="header-trans" href="#"></a>
</div>

<div class="main head-pat1">

	<div class="header">
		<div class="head">
			<!--Begin Logo--><div class="logo">
				<h1><a href="index.php"><img src="images/logonew.png" alt="Logo" /></a></h1>
			</div>	
				
		<!---------------End Logo-------------------------------------><!--End Logo--><!--Menu-->
			<div class="menu">
			<?php include"menu.php"; ?>		
		</div>
		  <!--Menu-->			
	  </div>
		<!--EOF Head-->
	</div>
	<!--EOF Header-->
	<div class="clear"></div>
	<div class="row_other_page">
			<div class="content_body">
<?php 
	$sub = $_GET['i'];
	$j = $_GET['j'];
?>
		<!-- *************************************** -->
			<div id="portfolio">
				<div id="box_head">
						<div id="box_head_heading">
						  <h3 id="box_head_left">You have apply for <font color="#FFCC00"><?php echo $sub; ?></font></h3>
					  <form class="searchform">
							<input class="searchfield" type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
							<input class="searchbutton" type="submit" value="Go" />
						</form>
						</div>

					
				</div>
				
						
			
		<div class="portfolio-big">
				
						<h1>Please fill the form for this course.</h1>
<h5 style="color:#CCC;">             		------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                        <h2>Personal Information</h2>
       <form action="apply_mail.php" method="post" enctype="multipart/form-data">
       <table width="100%" id="contact_form">
       		<tr>
            	<td>
                		<table>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="40%"><label for="name">Name *</label></td><td><input type="text" class="input-box" name="name" /></td>
                            </tr>
                            <tr>
                                <td><label for="name">Father Name</label></td><td><input type="text" class="input-box" name="fname" /></td>
                            </tr>
                            <tr>
                                <td><label for="name">Address</label></td><td><input type="text" class="input-box" name="add" /></td>
                            </tr>
                            <tr>
                                <td><label for="name">City</label></td><td><input type="text" class="input-box" name="city" /></td>
                            </tr>
                            <tr>
                                <td><label for="name">State</label></td><td><input type="text" class="input-box" name="state" /></td>
                            </tr>            
                        </table>
        		</td>
                <td>
                		<table>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>            
                            <tr>
                                <td width="40%"><label for="name">Collage</label></td><td><input type="text" class="input-box" name="col" /></td>
                            </tr>
                            <tr>
                                <td><label for="name">Joine Course</label></td><td><input type="text" class="input-box" name="course" value="<?php echo $sub; ?>" /></td>
                            </tr>
                            <tr>
                                <td><label for="name">Email Address</label></td><td><input type="text" class="input-box" name="email" /></td>
                            </tr>
                            <tr>
                                <td><label for="name">Mobile</label></td><td><input type="text" class="input-box" name="mobile" /></td>
                            </tr>
                            <tr>
                                <td><label for="name">Your Photo</label></td><td><input type="file" name="image" /></td>
                            </tr>
                        </table>
        		</td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><input  type="submit" name="send" value="Register" />
</td>
            </tr>
       </table>
<?php
	
	if($j == 1)
	{
	echo '<font color="green">Information sent successfully. We Will contact you soon. Thank You</font>';
	}
	?>
		
			</form>		
					<div class="clear"></div>	
			</div>
			
			
			
			
			
			
			</div>
				
		
				<div class="clear"></div>
			</div>
			<!--EOF portfolio-->
			
			
			
			<div class="clear"></div>
		</div>
		<!--EOF content_body-->
		<div class="clear"></div>
		
				<?php include"footer.php"; ?>
		<!--EOF copyright-->

</div>

</div>
</body>

<!Created by Hwebs on Sat, 16 Nov 2013 20:04:27 GMT -->
</html>
