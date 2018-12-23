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
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<!-- Superfish Dropdown menu script -->
<script src="js/superfish.js" type="text/javascript"></script>
<script src="js/supersubs.js" type="text/javascript"></script>
<script src="js/hoverIntent.js" type="text/javascript"></script>
<!-- Footer Slider -->
<script type="text/javascript" src="js/carousel.js"></script>
<!-- Superfish custom script -->
<script type="text/javascript" src="js/navigation.js"> </script>
<!-- colorpicker script -->
<script type="text/javascript" src="colorpicker/js/eye.js"></script>
<script type="text/javascript" src="colorpicker/js/utils.js"></script>
<script type="text/javascript" src="colorpicker/js/colorpicker.js"></script>
<script type="text/javascript" src="colorpicker/js/scripts.js"></script>
<!--contact form script-->
<script type="text/javascript">
function move( input, div, onoff ) {
	var value = document.getElementById( input ).value.split(' ').join('');
	if( onoff == 1 ) {
		document.getElementById( div ).style.margin = '-20px 0 0 6px';
	} else {
		if( value == "" ) {
			document.getElementById( div ).style.margin = '8px 0 0 6px';
		}
	}
}

function makeObject(){
	var x;
	var browser = navigator.appName;
	if(browser == "Microsoft Internet Explorer"){
		x = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		x = new XMLHttpRequest();
	}
	return x;
}

var request = makeObject();

function submitForm( ){
	var name = document.getElementById( 'name' ).value;
	var email = document.getElementById( 'email' ).value;
	var message = document.getElementById( 'message' ).value;
	var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
	var error = false;
	document.getElementById("nameerror").innerHTML="";
	document.getElementById("emailerror").innerHTML="";
	document.getElementById("messageerror").innerHTML="";

	if( name.split(' ').join('') == "" ) {
		document.getElementById("nameerror").innerHTML="Field is Empty";
		error = true;
	}

	if( !filter.test( email ) ) {
		document.getElementById("emailerror").innerHTML="Email is Invalid";
		error = true;
	}
	
	if( email.split(' ').join('') == "" ) {
		document.getElementById("emailerror").innerHTML="Field is Empty";
		error = true;
	}
	if( message.split(' ').join('') == "" ) {
		document.getElementById("messageerror").innerHTML="Field is Empty";
		error = true;
	}


	if( error == false ) {
		message = message.split('\n').join('__');
		message = encodeURI( message );
		request.open('get.php', 'mail49de.php?name='+ name +'&email='+ email +'&message='+ message);
		request.onreadystatechange = parseInfo;
		request.send('');
	}
}

function parseInfo(){
	if( request.readyState == 1 ) {
		document.getElementById('response').innerHTML = '<img src="loader.gif" alt="Loading..." />';
	}
	if(request.readyState == 4){
		var answer = request.responseText;
		document.getElementById('response').innerHTML = answer;
	}
}
</script>

</head>
<body>

<div class="schemas">
			<a class="styleswitch default-pat" rel="default-pat" href="#"><span></span></a>
			<a class="styleswitch head-pat3" rel="head-pat3" href="#"><span></span></a>			
            <a class="styleswitch head-pat1" rel="head-pat1" href="#"><span></span></a>
            <a class="styleswitch head-pat2" rel="head-pat2" href="#"><span></span></a>
			<a class="styleswitch head-pat4" rel="head-pat4" href="#"><span></span></a>			
            <a style="text-indent: 0px;" class="styleswitch colors tiptip" title="Click and choose our favorite color" id="schema-colorpicker" rel="header-trans" href="#"></a>
            <!-- color picker -->
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
    	<div class="wrapper">	
		<div class="container">
		<div class="content_other_page">
			<div class="content_body">

		<!-- *************************************** -->
		
			<div id="box">
			<div id="box_head">
						<div id="box_head_heading"><h1 id="box_head_left">Contact us</h1>
						</div>

					
				</div>
				<div class="clear"></div>
				
			<div class="full_width">
				<div class="two_col_left">
				<p>Thank you for your interest in Upica Institute!<br />If you would like to contact us, here's how you can do it:
				</p>
				
				<div id="contact_form">		
						<form method="post" action="mail.php" >
			<input type="text" name="name" id="name" class="input-box" value="" />
			<label for="name">Name</label>
			<span id="nameerror"></span>

			<input type="text" name="email" id="email" class="input-box" value=""/>
			<label for="email">E-mail</label>
			<span id="emailerror"></span>
			

			<textarea name="msg" id="message" class="text-box" cols="10" rows="8" ></textarea>
			<span id="messageerror"></span>
			
			<p id="send">
			<input  type="button" name="send" value="Send" onClick="submitForm( );" />
			</p>

			<span id="response"></span>

		</form>
		</div>
				
				</div>
				
				
				
				<div class="two_col_right">
					<div class="map">
							<iframe width="463" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=upica&amp;aq=&amp;sll=25.584042,83.57702&amp;sspn=0.093363,0.169086&amp;g=Ghazipur,+Uttar+Pradesh&amp;ie=UTF8&amp;ll=25.573239,83.563408&amp;spn=0.005836,0.010568&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=15658942583465677139&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=upica&amp;aq=&amp;sll=25.584042,83.57702&amp;sspn=0.093363,0.169086&amp;g=Ghazipur,+Uttar+Pradesh&amp;ie=UTF8&amp;ll=25.573239,83.563408&amp;spn=0.005836,0.010568&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=15658942583465677139" style="color:#0000FF;text-align:left">View Larger Map</a></small>
						</div>
				</div>
				
				<div class="address">
					<h5>Our Address</h5>
					<ul>
						<li>Upica Institute</li>				
						<li>Near By : V-Mart, Bandhawa Pull</li>
						<li>Ghazipur</li>
					</ul>
				</div>
				<div class="contact_info">
					<h5>Direct</h5>
					<ul>
						<li>Mob.no.: 9453306665 </li>
						<li>Office : +91 548-222571</li>
						<li>Email: info@upicacomputers.com </li>
					</ul>
				</div>
				<div class="clear"></div>
				</div>
			</div>
			<!--EOF contact-->
		
			<div class="clear"></div>
		</div>
		<!--EOF content_body-->		</div>
		<!--EOF Content-->
		

		</div>
		<!--EOF Container-->
		
		<div class="clear"></div>
		
	<?php include"footer.php"; ?>
		<!--EOF copyright-->
	</div>
	<!--EOF wrapper-->

</div>


</div>
</body>

<!Created by Hwebs on Sat, 16 Nov 2013 20:04:27 GMT -->
</html>
 class=