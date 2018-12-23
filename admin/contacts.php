<!DOCTYPE html>
<head>
		
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

		<title>JRSS | Contact Us</title>
	</head>
<body>
<!-- __________________________________________________ Start Page -->
		<section id="page">

			<a href="#" id="slide_top"></a>
			<div class="container">
<!--
 __________________________________________________ Start Header -->
				<?php include"menu.php"; ?>
<!--
 __________________________________________________ Finish Header -->

				<div class="cont_nav"><a 
href="index.html">Home</a>&nbsp;/&nbsp;<span>Contacts</span></div>
<!--
 __________________________________________________ Start Middle -->
				<section id="middle">
					
<div class="headline">
						<h2>Contacts</h2>
					</div>
					<div class="content_wrap">
<!--
 __________________________________________________ Start Content -->
						<section id="content">

							<div class="entry">
								<h3>Visit us</h3>
								<br />
								<div class=
"resizable_block">
									<div id="google_map_5" class="google_map fullwidth"></div>
								
</div>
								

<script type="text/javascript">jQuery(document).ready(function (){
  jQuery('#google_map_5').gMap({
    zoom : 13, markers : [{
      address : '', latitude : 51.486782, longitude :  - 0.143242, html : 
      'London, United Kingdom', mapTypeControl : false, popup : true
    }
    ], controls : [], scrollwheel : true
  }
  );
}
);
</script>

								<br /><br />
								<h3>Send us a message</h3>
								<div class="cmsms-form-builder">

									<div class="box success_box" style="display:none;">
										<table>
											<tr>

												<td>&nbsp;</td>
												<td>Thank You!<br>Your message has been sent successfully.
</td>
											</tr>
										</table>
									</div>
									

<script type="text/javascript">jQuery(document).ready(function (){
  jQuery('#contactform').validationEngine('init');
  jQuery('#contactform a#contact_form_formsend').click(function (){
    var form_builder_url = jQuery('#contact_form_url').val();
    jQuery('#contactform .loading').animate({
      opacity : 1
    }
    , 250);
    if (jQuery('#contactform').validationEngine('validate')){
      jQuery.post(form_builder_url, {
        contact_name : jQuery('#contact_name').val(), contact_email : jQuery(
        '#contact_email').val(), contact_subject : jQuery('#contact_subject').val(), 
        contact_message : jQuery('#contact_message').val(), formname : 'contact_form', 
        formtype : 'contactf'
      }
      , function (){
        jQuery('#contactform .loading').animate({
          opacity : 0
        }
        , 250);
        document.getElementById('contactform').reset();
        jQuery('#contactform').parent().find('.box').hide();
        jQuery('#contactform').parent().find('.success_box').fadeIn('fast');
        jQuery('html, body').animate({
          scrollTop : jQuery('#contactform').offset().top - 100
        }
        , 'slow');
        jQuery('#contactform').parent().find('.success_box').delay(5000).fadeOut(1000);
      }
      );
      return false;
    }
    else {
      jQuery('#contactform .loading').animate({
        opacity : 0
      }
      , 250);
      return false;
    }
  }
  );
}
);
</script>

									<form action="#" method="post" id="contactform">
										<div class=
"form_info cmsms_input">
											<label for="contact_name">Name<span> *</span></label>

											<input type="text" name="contact_name" id="contact_name" value="" size="22" tabindex="3"
 class="validate[required,minSize[3],maxSize[100],custom[onlyLetterSp]]"/>
										</div>

										<div class="cl"></div>
										<div class="form_info cmsms_input">
											<label 
for="contact_email">Email<span> *</span></label>
											<input type="text" name="contact_email" 
id="contact_email" value="" size="22" tabindex="4" class="validate[required,custom[email]]" />

										</div>
										<div class="cl"></div>
										<div class="form_info cmsms_input">

											<label for="contact_subject">Subject<span> *</span></label>
											<input type=
"text" name="contact_subject" id="contact_subject" value="" size="22" tabindex="6" class=
"validate[required,minSize[3],maxSize[100]]" />
										</div>
										<div class="cl"></div>

										<div class="form_info cmsms_textarea">
											<label for="contact_message">Message
<span> *</span></label>
											<textarea name="contact_message" id="contact_message" cols="28" 
rows="6" tabindex="7" class="validate[required,minSize[3]]" ></textarea>
										</div>
										
<div><input type="hidden" name="contact_form_url" id="contact_form_url" value=
"http://willbridge-html.cmsmasters.net/php/sendmail.php" /></div><!--
 Here you need to set the path to the sendmail file -->
										<div>
											<a href="#" 
class="button" id="contact_form_formsend" tabindex="8"><span>Send a message</span></a>
											
<div class="loading"></div>
										</div>
									</form>
								</div>
								<div class="cl"
></div>
							</div>
						</section>
<!--
 __________________________________________________ Finish Content -->

<!--
 __________________________________________________ Start Sidebar -->
						<section id="sidebar">

							<div class="one_first">
								<aside class="widget widget_search">
									<h3 class=
"widgettitle">Search</h3>
									<div class="search_line">
										<form action="#">
											
<p>
												<input type="text" name="search" id="search" placeholder="" value="" />
												
<input type="submit" value="" />
											</p>
										</form>
									</div>
								</aside>

							</div>
							<div class="one_first">
								<aside class=
"widget widget_custom_recent_entries">
									<h3 class="widgettitle">Latest posts</h3>
									
<ul>
										<li>
											<a href="openpost.html">Sample post</a>
											<abbr title=
"18.09.12" class="published">2 days ago</abbr>
											<div class="entry-content">
												<p
>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque t
ristique volutpat nunc, id rhoncus augue </p>
											</div>
										</li>
										<li>

											<a href="openpost.html">Sample post</a>
											<abbr title="18.09.12" class=
"published">2 days ago</abbr>
											<div class="entry-content">
												<p>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque t
ristique volutpat nunc, id rhoncus augue </p>
											</div>
										</li>
									</ul>

								</aside>
							</div>
							<div class="one_first">
								<aside class=
"widget widget_custom_flickr_entries">
									<h3 class="widgettitle">Flickr</h3>
									<ul id=
"flickr_images_sidebar"></ul>
									

<script type="text/javascript">jQuery(document).ready(function (){
  jQuery('#flickr_images_sidebar').jflickrfeed({
    limit : 6, qstrings : {
      id : '49053047@N04'
    }
    , itemTemplate : 
    '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
  }
  );
}
);
</script>

								</aside>
							</div>
							<div class="one_first">
								<aside class=
"widget widget_links">
									<h3 class="widgettitle">List widget</h3>
									<ul>
										<li
><a href="#">Styling options</a></li>
										<li><a href="#">Theme options</a></li>
										<li
><a href="#">Sidebars & widgets</a></li>
										<li><a href="#">Shortcodes</a></li>
										<li
><a href="#">Blogs & posts</a></li>
										<li><a href="#">Sliders & slides</a></li>
										
<li><a href="#">Contact form builder</a></li>
										<li><a href="#">Demo content</a></li>

									</ul>
								</aside>
							</div>
						</section>
<!--
 __________________________________________________ Finish Sidebar -->
					</div>
				</section>

<!-- __________________________________________________ Finish Middle -->

<!--
 __________________________________________________ Start Bottom -->
				<?php include"bottom.php"; ?>
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

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

<script src="http://maps.gstatic.com/intl/en_us/mapfiles/api-3/9/14/main.js" type="text/javascript">
</script>

<script src="js/jquery.gMap.js" type="text/javascript"></script>

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
