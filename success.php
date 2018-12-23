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
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link rel="stylesheet" href="css/theme-cs-portfolio.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

<!--important javascipt-->
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
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

		<!-- *************************************** -->
			<div id="portfolio">
				<div id="box_head">
						<div id="box_head_heading">
						  <h1 id="box_head_left">SUCCESSFUL</h1>
						  <div id="box_head_sub">Our Successful Student</div>
                          
						<form class="searchform">
							<input class="searchfield" type="text" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
							<input class="searchbutton" type="submit" value="Go" />
						</form>
						</div>

					
				</div>
						
			<!-- the input fields that will hold the variables we will use -->
	<input type='hidden' id='current_page' />
	<input type='hidden' id='show_per_page' />
			
			<div id="portfolio_page">
			
			<div class="portfolio-big">
			<table>
<?php
include_once "db.php";
	
	$i = 1;	
	$query = "select * from student";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{

                	if($i == 1)
                	{
                	echo "<tr>";
                	}
?>
                    	<td width="150">						
		<img style="padding:5px; border:1px #CCC solid;" src="admin/new_stu_images/<?php echo $row['image']; ?>" width="179.33" height="120" alt="" />
                            <center><h5 style="color:#F90;"><?php echo $row['name']; ?></h5></center>
                            <?php echo $row['department']; ?>
                        </td>
<?php 
                        if($i == 5)
                        {
                    	echo "</tr>";
                    $i = 0;
                    }
$i++;
} 
		if($i < 5 )
		{
			echo "</tr>";
		}
	?>               
		</table>         
                
				<div class="clear"></div>
			</div>
			<!--EOF portfolio-big-->
			
						
			
			
			<div class="clear"></div>
	</div>
			<!-- portfolio_page -->
			
				
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
