<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 	include_once"./db.php"; ?>
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
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/pascal.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

<!-- important javascripts -->
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/superfish.js" type="text/javascript"></script>
<script src="js/supersubs.js" type="text/javascript"></script>
<script src="js/hoverIntent.js" type="text/javascript"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="../../../cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>

<!-- colorpicker script -->
<script type="text/javascript" src="colorpicker/js/eye.js"></script>
<script type="text/javascript" src="colorpicker/js/utils.js"></script>
<script type="text/javascript" src="colorpicker/js/colorpicker.js"></script>
<script type="text/javascript" src="colorpicker/js/scripts.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#testimonials_home')
	.after('<div id="nav2">')
	.cycle({
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, scrollRight, shuffle
		speed: 3000,
		timeout: 2000
     });
});
</script>
<style type="text/css">
        table{
            border-collapse:collapse;
        }
        table td{
            border:1px solid #0000BB;
        }
        table tr td{
            padding:20px;
            font-size:13px;
            color:#0000FF;
            width:50%;
        }
        table tr td p{
            font-size:10px;
            color:#060;
        }
        
        
        
        
        
        
        
.css_image_shadows {
	position:relative;
	z-index:1;
	width:600px;
	padding:10px 0;
	margin:0 auto;
}

.css_image_shadows:after {
	content:"";
	display:block;
	clear:both;
	visibility:hidden;
	height:0;
	font-size:0;
}

/* Shared styles */

.drop-shadow {
	text-align:center;
	position:relative;
	float:left;
	width:40%;    
	padding:1em; 
	margin:2em 10px 4em; 
	background:#fff;
	-webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
	   -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
			box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}

.drop-shadow:before,
.drop-shadow:after {
	content:"";
	position:absolute; 
	z-index:-2;
}

.drop-shadow p {
	font-size:16px;
	font-weight:bold;
}

/* Lifted corners */

.lifted {
	-moz-border-radius:4px; 
		 border-radius:4px;
}

.lifted:before,
.lifted:after { 
	bottom:15px;
	left:10px;
	width:50%;
	height:20%;
	max-width:300px;
	-webkit-box-shadow:0 15px 10px rgba(0, 0, 0, 0.7);   
	   -moz-box-shadow:0 15px 10px rgba(0, 0, 0, 0.7);
			box-shadow:0 15px 10px rgba(0, 0, 0, 0.7);
	-webkit-transform:rotate(-3deg);    
	   -moz-transform:rotate(-3deg);   
		-ms-transform:rotate(-3deg);   
		 -o-transform:rotate(-3deg);
			transform:rotate(-3deg);
}

.lifted:after {
	right:10px; 
	left:auto;
	-webkit-transform:rotate(3deg);   
	   -moz-transform:rotate(3deg);  
		-ms-transform:rotate(3deg);  
		 -o-transform:rotate(3deg);
			transform:rotate(3deg);
}

/* Curled corners */

.curled {
	border:1px solid #efefef; 
	-moz-border-radius:0 0 120px 120px / 0 0 6px 6px;    
		 border-radius:0 0 120px 120px / 0 0 6px 6px;
}

.curled:before,
.curled:after {
	bottom:12px;
	left:10px;
	width:50%;
	height:55%;
	max-width:200px;
	-webkit-box-shadow:0 8px 12px rgba(0, 0, 0, 0.5); 
	   -moz-box-shadow:0 8px 12px rgba(0, 0, 0, 0.5); 
			box-shadow:0 8px 12px rgba(0, 0, 0, 0.5); 
	-webkit-transform:skew(-8deg) rotate(-3deg);
	   -moz-transform:skew(-8deg) rotate(-3deg);
		-ms-transform:skew(-8deg) rotate(-3deg);
		 -o-transform:skew(-8deg) rotate(-3deg);
			transform:skew(-8deg) rotate(-3deg);
} 

.curled:after { 
	right:10px; 
	left:auto;
	-webkit-transform:skew(8deg) rotate(3deg); 
	   -moz-transform:skew(8deg) rotate(3deg);     
		-ms-transform:skew(8deg) rotate(3deg);     
		 -o-transform:skew(8deg) rotate(3deg); 
			transform:skew(8deg) rotate(3deg);
}

/* Perspective */

.perspective:before {
	left:80px;
	bottom:5px;
	width:50%;
	height:35%;
	max-width:200px;
	-webkit-box-shadow:-80px 0 8px rgba(0, 0, 0, 0.4);
	   -moz-box-shadow:-80px 0 8px rgba(0, 0, 0, 0.4);
			box-shadow:-80px 0 8px rgba(0, 0, 0, 0.4);
	-webkit-transform:skew(50deg);
	   -moz-transform:skew(50deg);
		-ms-transform:skew(50deg);
		 -o-transform:skew(50deg);
			transform:skew(50deg);
	-webkit-transform-origin:0 100%;
	   -moz-transform-origin:0 100%;
		-ms-transform-origin:0 100%;
		 -o-transform-origin:0 100%;
			transform-origin:0 100%;
}

.perspective:after {
	display:none;
}

/* Raised shadow - no pseudo-elements needed */

.raised {
	-webkit-box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
	   -moz-box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
			box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}

/* Curved shadows */

.curved:before {
	top:10px;
	bottom:10px;
	left:0;
	right:50%;
	-webkit-box-shadow:0 0 15px rgba(0,0,0,0.6);
	-moz-box-shadow:0 0 15px rgba(0,0,0,0.6);
	box-shadow:0 0 15px rgba(0,0,0,0.6);
	-moz-border-radius:10px / 100px;
	border-radius:10px / 100px;
}

.curved-vt-2:before {
	right:0;
}

.curved-hz-1:before {
	top:50%;
	bottom:0;
	left:10px;
	right:10px;
	-moz-border-radius:100px / 10px;
	border-radius:100px / 10px;
}

.curved-hz-2:before {
	top:0;
	bottom:0;
	left:10px;
	right:10px;
	-moz-border-radius:100px / 10px;
	border-radius:100px / 10px;
}

/* Rotated box */

.rotated {
	-webkit-box-shadow:none;
	   -moz-box-shadow:none;
			box-shadow:none;
	-webkit-transform:rotate(-3deg);    
	   -moz-transform:rotate(-3deg);   
		-ms-transform:rotate(-3deg);
		 -o-transform:rotate(-3deg);
			transform:rotate(-3deg);
}

.rotated > :first-child:before {
	content:"";
	position:absolute;
	z-index:-1;
	top:0;
	bottom:0;
	left:0;
	right:0;
	background:#fff;
	-webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
	   -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
			box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
    </style>
 
<style> 
.textbox { 
    -moz-border-radius-topright: 30px;
    -webkit-border-top-right-radius: 30px;
    border-top-right-radius: 30px;
    -moz-border-radius-bottomleft: 30px;
    -webkit-border-bottom-left-radius: 30px;
    border-bottom-left-radius: 30px;
    border: 1px solid #848484;
    outline:0; 
    height:25px; 
    width: 275px; 
    padding-right:15px; 
    padding-left:15px; 
  } 
  
  
  
  
  .myButton {
	-moz-box-shadow: -1px 10px 14px -7px #276873;
	-webkit-box-shadow: -1px 10px 14px -7px #276873;
	box-shadow: -1px 10px 14px -7px #276873;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #9eabb0), color-stop(1, #656d6e));
	background:-moz-linear-gradient(top, #9eabb0 5%, #656d6e 100%);
	background:-webkit-linear-gradient(top, #9eabb0 5%, #656d6e 100%);
	background:-o-linear-gradient(top, #9eabb0 5%, #656d6e 100%);
	background:-ms-linear-gradient(top, #9eabb0 5%, #656d6e 100%);
	background:linear-gradient(to bottom, #9eabb0 5%, #656d6e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9eabb0', endColorstr='#656d6e',GradientType=0);
	background-color:#9eabb0;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:13px;
	font-weight:bold;
	padding:8px 16px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #656d6e), color-stop(1, #9eabb0));
	background:-moz-linear-gradient(top, #656d6e 5%, #9eabb0 100%);
	background:-webkit-linear-gradient(top, #656d6e 5%, #9eabb0 100%);
	background:-o-linear-gradient(top, #656d6e 5%, #9eabb0 100%);
	background:-ms-linear-gradient(top, #656d6e 5%, #9eabb0 100%);
	background:linear-gradient(to bottom, #656d6e 5%, #9eabb0 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#656d6e', endColorstr='#9eabb0',GradientType=0);
	background-color:#656d6e;
}
.myButton:active {
	position:relative;
	top:1px;
}
}
</style> 
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

<!---------------Begin header----------------------------------->		
<div class="header">
	<div class="head">
		<!---------------Begin Logo----------------------------------->
			<div class="logo">
				<h1><a href="index.php"><img src="images/logonew.png" alt="Logo" /></a></h1>
			</div>	
			
		<!---------------End Logo------------------------------------->
		
		<!---------------Begin Menu--------------------------------->
	<div class="menu">
			<?php include"menu.php"; ?>		
	  </div>
	  <!---------------------------END Menu-------------------------->			
  </div>
  <div class="clear"></div>	
</div>
<!---------------------EOF Header-------------------------->
	
<div class="clear"></div>
	
<!------------------------------Begin Row------------------------->	
<div class="row">
<div style="text-align:center; width:960px; margin:0 auto; padding-bottom:30px;">
		<div class="slider-wrapper theme-pascal">

            <div id="slider" class="nivoSlider">
           <img src="images/slider_image/slider1.jpg" height="420" width="948" alt="" title="<h4>WELCOME TO UPICA</h4><h5>FIND OUT THE AWSOME FUTURE</h5>" />
				<img src="images/slider_image/slider2.jpg" height="420" width="948" alt=""  title="<h4>WELCOME TO UPICA</h4><h5>FIND OUT THE AWSOME FUTURE</h5>" />
				<img src="images/slider_image/slider3.jpg" height="420" width="948" alt="" title="<h4>WELCOME TO UPICA</h4><h5>FIND OUT THE AWSOME FUTURE</h5>" />				
                <img src="images/slider_image/slider4.jpg" height="420" width="948" alt="" title="#htmlcaption" />
                <img src="images/slider_image/slider6.jpg" height="420" width="948" alt="" title="#htmlcaption" />
     			<img src="images/slider_image/slider5.jpg" height="420" width="948" alt="" title="<h4>WELCOME TO UPICA</h4><h5>FIND OUT THE AWSOME FUTURE</h5>" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
				<h4>WELCOME TO UPICA</h4>
				<h5>FIND OUT THE AWSOME FUTURE</h5>
            </div>

							
		  	<div class="clear"></div>
	</div>
</div>
<!------------------------------EOF Row------------------------->
	
	<div class="content_body">
			<div class="lower_container">
				<div class="three_col_left home">
					<div class="three_col_img"><a href="Degrees.php"><img src="images/homeicon1.png" class="webicon" alt="img"/></div>
					<h4 class="bottom_margin">A College Degree</h4>
					<p>A college degree is the key to realizing the Indian dream, well worth the financial sacrifice because it is supposed to open the door to a world of opportunity. Find out about degrees being offered by us.</p>

				<div class="clear"></div>
				</div>
				
				<div class="three_col home">
					<div class="three_col_img"><a href="DOPLOMAS.php"><img src="images/homeicon2.png" class="webicon" alt="img" /></div>
					<h4 class="bottom_margin">A Diploma</h4>
					<p>We just want to show the world it's never too late to get your diploma, and show kids they should stay in school and not wait until you're old to get it. Find out about diplomas being offered by us.</p>

				</div>
				
				<div class="three_col_right home">
					<div class="three_col_img"><a href="CERTIFICATES.php"><img src="images/homeicon3.png" class="webicon"  alt="img"/></div>
					<h4 class="bottom_margin">A Certificate</h4>
					<p>It is never too late to get certified. We have host of options available. Find out about certificates being offered by us.</p>

				</div>
				<div class="clear"></div>
				
			</div>


<!--------------------EOF lower_container-------------------------->

<div class="lower_container_border"><img src="images/horizontal-shadow.png" width="940" height="30"  alt="img"/></div>

<div class="advert2">
	<div class="advert_content">
			
<!------------------Footer slider----------------------------------->
	<div class="carousel_container">
		<div class="infiniteCarousel">
    	  <div class="wrapper">
        	<ul>
			<!--Replace the image names with your image names -->
				 <li><a href="#"><img src="images/slider_image/rel2.jpg"  alt="img" /></a>
				 <h5>SMU University</h5><p>
				 <cite>Distance Learning</cite>
				 </p>
				 </li>
			    <li><a href="#"><img src="images/slider_image/fs6.jpg" alt="img" /></a>
				<h5>Shobhit University</h5><p>
				 <cite>Education Empowers</cite>
				 </p>
			    </li>
				 <li><a href="#"><img src="images/slider_image/rel.jpg" alt="img" /></a>
				<h5>Karnataka State</h5><p>
				 <cite>Open University</cite>
				 </p>
			    </li>
				 <li><a href="#"><img src="images/slider_image/fs7.jpg" alt="img" /></a>
				<h5>Jaipur National University</h5><p>
				 <cite>Distance Learning</cite>
				 </p>
				 
				 
				 
			</ul>        
					  <div class="clear"></div>
	      </div>
		  <div class="clear"></div>
	    </div>
	</div>
<!------------------------EOF infiniteCarousel--------------------------->
		  <div class="clear"></div>		
	</div>
</div>

<!--------------------EOF lower_container-------------------------->

<div class="lower_container_border"><img src="images/horizontal-shadow.png" width="940" height="30"  alt="img"/></div>
<!--------------------Begin lower_container-------------------------->		

<div class="lower_container3">
			<div id="our_mission_img"><img src="images/iMac_225.png"  alt="img" /></div>

				<div id="our_mission">
					<h4 class="bottom_margin">Our mission</h4>
					<p>Established with the mission of delivering training to professionals, as well as those looking to advance their skills to the professional level, the UPICA Institute of Technology and Management has more than succeeded in attaining this goal. Catering to the corporate, Governtment, Work Force and private markets. UPICA delivers targeted instruction to students with a desire to advance. Our curricula cover such diverse areas as computer networking and programming, Nursery Teachers Training (NTT) and Management and much more. Conveniently located at Bandhawa Pull (Near V-Mart)
Ghazipur, all of our facilities offer exceptional instructor-led, hands-on training.</p>
					
					
				</div>
					<div id="client_home">
						<h4 class="bottom_margin" style="text-align:center;">Notice Board</h4>
						<div id="client_inner">

						<div id="testimonials_home">
						<marquee  behavior="scroll" direction="up" scrollamount="2" height="300">
<?php 
	include_once"./db.php";
	$query = "select * from news";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
		$title = $row['title'];
		$detail = $row['detail'];
		$url = $row['url'];
?>
						 <span style="font-size:16px; color:#00F;"><?php echo $title; ?><span><br/>
						 <blockquote>
						 	<p>"<?php echo $detail; ?>"
							<cite style='font-variant:small-caps;'>
								<a href="<?php echo $url; ?>"><?php echo $url; ?></a>
							</cite></p>
						</blockquote>
<?php } ?>
                          </marquee>
										
						</div>
					 
					</div>


				</div>
			
			<div class="clear"></div>
		</div>
		
		<div class="drop-shadow curved curved-vt-2">		
			<form method="post" >
			<label for="name">Enrollment Number</label><br />
				<input type="text" name="enrollment" id="name" class="textbox" value="" />
				<br /><br />
				<input  type="submit" value="Verify Certificate" class="myButton" />
	
				<span id="response"></span>
			</form>
		
		</div>
		<br /><br />
		<table width="100%" class="tb">
		
		<?php
include_once"./db.php";
$enroll = $_POST['enrollment'];
	if(strlen($enroll) > 0)
	{
		$query = "select * from c_varification where enrollment = '$enroll'";
		$res = mysql_query($query);
		$num = mysql_num_rows($res);
		if($num > 0 )
		{
		?>
			<tr>
					
					<td><strong style="font-weight:bold">Enrolment No</strong></td>
					<td><strong style="font-weight:bold">Name</strong></td>
					<td><strong style="font-weight:bold">Father Name</strong></td>
					<td><strong style="font-weight:bold">Mother Name</strong></td>
					<td><strong style="font-weight:bold">City</strong></td>
					<td><strong style="font-weight:bold">Category</strong></td>
					<td><strong style="font-weight:bold">Center Code</strong></td>
					<td><strong style="font-weight:bold">Study Center</strong></td>
					<td><strong style="font-weight:bold">Grade</strong></td>
					<td><strong style="font-weight:bold">Image</strong></td>
					<td><strong style="font-weight:bold">Course</strong></td>
					<td><strong style="font-weight:bold">Gender</strong></td>
				</tr>	
		<?php
			while($row = mysql_fetch_array($res))
			{
			?>
			
				<tr>
					
					<td><?php echo $row['enrollment']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['fname']; ?></td>
					<td><?php echo $row['mname']; ?></td>
					<td><?php echo $row['city']; ?></td>
					<td><?php echo $row['cat']; ?></td>
					<td><?php echo $row['center_code']; ?></td>
					<td><?php echo $row['study_center']; ?></td>
					<td><?php echo $row['grade']; ?></td>
					<td><?php echo '<img src="admin/photo/'.$row['image'].'" width="60px", height="60px">'; ?></td>
					<td><?php echo $row['course']; ?></td>
					<td><?php echo $row['gender']; ?></td>
				</tr>
			
				
				
			
			<?php
			}
		}
		else
	{
		echo '<tr><td><font color="red">Inrollment Number Not Found</font></td></tr>';
	}
	}
	

?>
</table>
<!--------------------EOF lower_container-------------------------->
			
					
		<div class="clear"></div>
	</div>

		
<div class="clear"></div>

<!------------------------EOF advert2------------------------------------->		
		
<?php include"footer.php"; ?>
	<!-----------------------------EOF extra2---------------------------------------->

</div>
<!---------------------------------EOF main--------------------------------------->


<!--Nivo Slider script-->
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>

<script type="text/javascript">
$(window).load(function() {
        $('#slider').nivoSlider({
		
        });
    });
    
</script>
</body>

<!Created by Hwebs on Sat, 16 Nov 2013 20:04:27 GMT -->
</html>