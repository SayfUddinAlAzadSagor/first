<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Forward a Sports Category Flat Bootstrap responsive Website Template | About :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Forward Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/main/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/main/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/main/css/football.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- js -->
<script src="main/js/jquery.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="main/js/move-top.js"></script>
<script type="text/javascript" src="main/js/easing.js"></script>
<script src="https://use.fontawesome.com/c56ebc4a5c.js"></script>
<!-- Optional: Include the jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="main/js/football.js"></script>

  <script type="text/javascript" src="sketch.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
<!-- start-smoth-scrolling -->
</head>
	<body>
		<!-- header -->
		<div class="header">
			<div class="header-top">
				<!-- container -->
				<div class="container">
					<div class="header-middle-logo">
						<a href="#"><h2>CSE Football Tournament Arch.</h2></a>
					</div>
					<div class="header-middle-right">
						<div class="phone">
							<span> </span>
							<ul>
								<li class="gray">Phone</li>
								<li>+01777555555 (524 House)</li>
							</ul>
							<div class="clearfix"> </div>
						</div>
						<div class="location">
							<span> </span>
							<ul>
								<li class="gray">Address<li>
								<li>sust, cse dept., Sylhet</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
			<div class="top-nav">
				<!-- container -->
				<div class="container">
					<span class="menu">MENU</span>
					<ul class="nav1">
					    <li><a href="/profile">Player Profile</a><li> 
						<li><a href="/teams">Team</a><li>                        
						<li><a href="/tournament">Tournaments</a><li>                 
						<li><a href="/galleries">Gallery</a><li> 
						<li><a href="/live">live</a><li>              
						<li><a href="/about">About us</a><li>
						<div class="clearfix"> </div>
					</ul>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				<!-- //container -->
			</div>
			<!-- <div class="blue"> </div> -->
		</div>
		<!-- about -->
		@section('body')
		@show
		<!-- //about -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="footer-top">
						<div class="footer-grids">
							<div class="col-md-3 f-address">
								<h5>Address</h5>
								<ul>
									<li>iict building,</li>
									<li>cse department</li>
									<li>Telephone: +1 234 567 9871</li>
									<li>FAX: +1 234 567 9871</li>
									<li>E-mail : <a href="#">Example@mail.com</a></li>
								</ul>
							</div>
							<div class="col-md-6 f-address f-contact">
								<h5>Stay in Touch</h5>
								<form>
									<input type="text" placeholder="Email address" required="">
									<input type="submit" value="Subscribe">
								</form>
							</div>
							<div class="col-md-3 footer-logo">
								<a href="index.html">cse_society</a>
								<div class="footer-left">
									<ul>
										<li><a class="facebook" href="#"></a></li>
										<li><a class="twitter" href="#"></a></li>
										<li><a class="linked-in" href="#"></a></li>
										<li><a class="you-tube" href="#"></a></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="footer-bottom">
							<div class="copyright">
								<p>© 2016. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">sagor & rizvi</a> </p>
							</div>
							<div class="clearfix"> </div>
						</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>