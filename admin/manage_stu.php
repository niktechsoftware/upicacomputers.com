<!DOCTYPE html><head>
		
		<meta name="description" content="cmsmasters responsive html5 website template" />
		
<meta name="keywords" content="html5, css3, template, responsive, adaptive" />
		<meta name=
"viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel=
"shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href=
"css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href=
"css/styles/fonts.css" type="text/css" media="screen" />
		<link href=
'http://fonts.googleapis.com/css?family=Open+Sans:400,600,800,400italic' rel='stylesheet' type=
'text/css'>
		<link rel="stylesheet" href="css/styles/jquery.prettyPhoto.css" type="text/css" media=
"screen" />
		<link rel="stylesheet" type="text/css" href="styleChanger/changer.css" />
		<link rel=
"stylesheet" type="text/css" href="styleChanger/colorpicker/colorpicker.css" />
		<style id=
"cFontStyleWColor1" type="text/css">
			a, .color_3,.post footer .published,.post .entry-title a
:hover,.post.format-link .entry-title a,.cmsmsLike:hover span,.portfolio_inner .entry-title a:hover 
{color:#ff9108;}
		</style>
		<style id="cFontStyleWColor2" type="text/css">
			.cmsmsLike:hover, 
.resp_navigation.active,.widget_custom_popular_portfolio_entries .cmsms_content_slider_parent ul
.cmsms_slides_nav li.active a, .widget_custom_popular_portfolio_entries .cmsms_content_slider_parent
 ul.cmsms_slides_nav li:hover a,.widget_custom_testimonials_entries .cmsms_content_slider_parent ul
.cmsms_slides_nav li.active a, .widget_custom_testimonials_entries .cmsms_content_slider_parent ul
.cmsms_slides_nav li:hover a, .tp-bullets.simplebullets .bullet:hover, .tp-bullets.simplebullets 
.bullet.selected, #slide_top, ul.cmsms_slides_nav li.active a, ul.cmsms_slides_nav li:hover a, span
.dropcap2, .tog:hover .cmsms_plus, .tog.current .cmsms_plus, .tour li.current .cmsms_plus, .tour li 
a:hover .cmsms_plus, .cmsms_comments, .wp-pagenavi > span.current, .wp-pagenavi a:hover, 
.portfolio_inner .hover_effect, a.cmsms_close_video:hover {background-color:#ff9108;}
		</style>
		
<style id="cFontStyleWColor3" type="text/css">
			input[type="text"]:focus, textarea:focus, select
:focus, #bottom input:focus, #bottom textarea:focus, #bottom select:focus,.tabs > li a.current, 
.wp-pagenavi > span.current,.wp-pagenavi a:hover, .responsibe_block_inner {border-color:#ff9108;}
table tr td{padding:5px; }
		
</style>
		<style id="cFontStyleWColor4" type="text/css">
			body {background-color:#ffffff;}
		
</style>
		<!--
[if lt IE 9]>
			<link rel="stylesheet" href="css/styles/ie.css" type="text/css" />
			<link rel="st
ylesheet" href="css/styles/ieCss3.css" type="text/css" media="screen" />
		<![endif]-->
		

<script src="js/modernizr.custom.all.js" type="text/javascript"></script>

<script src="js/respond.js" type="text/javascript"></script>

<script src="js/jquery.min.js" type="text/javascript"></script>

<script src="js/jquery.easing.js" type="text/javascript"></script>

		
<title>JRSS | SSC</title>
	</head>
<body>
<!-- __________________________________________________ Start Page -->
		<section id="page">

			<a href="#" id="slide_top"></a>
			<div class="container">
<!--
 __________________________________________________ Start Header -->
				<?php include "menu.php" ?>
<!--
 __________________________________________________ Finish Header -->

				
<!--
 __________________________________________________ Start Middle -->
				<section id="middle">
					
<div class="headline">
						<h2>Manage Students</h2>
					</div>
					<div class="content_wrap nobg">
<!--
 __________________________________________________ Start Content -->
						<section id="middle_content">
	<table width="100%">
		<tr>
			<td>S No.</td>
			<td>Student ID</td>
			<td>Name</td>
			<td>Father Name</td>
			<td>Email-Address</td>
			<td>Department</td>			
			<td>Click For Delete</td>
		</tr>
<?php
include_once "db.php";
	
	$i = 1;	
	$query = "select * from Registration";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['stu_id']; ?></td>			
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['register_for']; ?></td>
			<td><a href="delete1.php?i=<?php echo $row['sno']; ?>">Delete</a></td>
		</tr>
<?php 
$i++;
} ?>
	</table>
							</section>
<!--
 __________________________________________________ Finish Content -->
					</div>
				</section>

<!-- __________________________________________________ Finish Middle -->

<!--
 __________________________________________________ Start Bottom -->
				<?php include "bottom.php" ?>
<!--
 __________________________________________________ Finish Bottom -->
			</div>
		</section>
<!--
 __________________________________________________ Finish Page -->

<!--
 __________________________________________________ Start Footer -->
		<footer id="footer">
			<div 
class="footer_inner">
				<span>JRSS Coching Classes &copy; 2013</span>
				<div class="fr">
					
<div class="footer_html">
						<a href="#"><img style="float:left;margin:3px 8px 0 0;" src=
"images/img/icon_docs.png" alt="" />online docs</a>
					</div>
				</div>
			</div>
		</footer>

<!-- __________________________________________________ Finish Footer -->

		

<script src="js/jquery.script.js" type="text/javascript"></script>

<script src="js/jquery.validationEngine-lang.js" type="text/javascript"></script>

<script src="js/jquery.validationEngine.js" type="text/javascript"></script>

<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script src="js/jquery.jtweetsanywhere.js" type="text/javascript"></script>

<script src="js/jquery.flickrfeed.min.js" type="text/javascript"></script>

<script type="text/javascript" src="styleChanger/colorpicker/colorpicker.js"></script>

<script type="text/javascript" src="styleChanger/changer.js"></script>

		<div id="stlChanger">
			<div class="blockChanger bgChanger">
				<a href="#" class="chBut">&nbsp;
</a>
				<div class="chBody">
					<div class="stBlock">
						<span>Background</span>
						<div 
class="stColorParent">
							<a href="#" class="stColor2"><span id="cFontWColor4" title="ffffff" 
style="background-color:#ffffff">&nbsp;</span></a>
						</div>
					</div>
					<div class=
"stBlock" style="padding-bottom:8px;">
						<div class="stBgs">
							<a href="images/bgs/01.jpg" 
class="bg_t"><img src="images/bgs/01_tumb.jpg" alt="" /></a>
							<a href="images/bgs/02.jpg" 
class="bg_t"><img src="images/bgs/02_tumb.jpg" alt="" /></a>
							<a href="images/bgs/03.jpg" 
class="bg_t"><img src="images/bgs/03_tumb.jpg" alt="" /></a>
							<a href="images/bgs/08.jpg" 
class="bg_t"><img src="images/bgs/08_tumb.jpg" alt="" /></a>
							<a href="images/bgs/09.jpg" 
class="bg_t"><img src="images/bgs/09_tumb.jpg" alt="" /></a>
							<a href="images/bgs/04.jpg" >
<img src="images/bgs/04_tumb.jpg" alt="" /></a>
							<a href="images/bgs/05.jpg" ><img src=
"images/bgs/05_tumb.jpg" alt="" /></a>
							<a href="images/bgs/06.jpg" ><img src=
"images/bgs/06_tumb.jpg" alt="" /></a>
							<a href="images/bgs/07.jpg" ><img src=
"images/bgs/07_tumb.jpg" alt="" /></a>
						</div>
					</div>
					<div class="stBlock">
						
<span>Color scheme</span>
						<div class="stColorParent">
							<a href="#" class="stColor2">
<span id="cFontWColor1" title="ff9108" style="background-color:#ff9108">&nbsp;</span></a>
						
</div>
					</div>
					<div class="stBlock">
						<div class="hdrStBgs">
							<div class=
"hdrCols">
								<span class="current" style="background-color:#ff9108;" title="ff9108">&nbsp;
</span>
								<span style="background-color:#00bff3;" title="00bff3">&nbsp;</span>
								<span 
style="background-color:#9e86ae;" title="9e86ae">&nbsp;</span>
								<span style=
"background-color:#e1565c;" title="e1565c">&nbsp;</span>
								<span style=
"background-color:#a0e0a9;" title="a0e0a9">&nbsp;</span>
								<span style=
"background-color:#00ada7;" title="00ada7">&nbsp;</span>
								<div class="cl"></div>
							
</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
