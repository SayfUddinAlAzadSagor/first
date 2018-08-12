@extends("layout.app")

@section('body')
        <!-- banner -->
		<div class="banner-slider">
			<!-- banner Slider starts Here -->
					<script src="main/js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner"> </div>
							</li>
							<li>
								<div class="banner-img"> </div>
							</li>
						</ul>
					</div>
		</div>
			<!-- //banner -->
		<!-- how -->
		<div class="how">
			<!-- container -->
			<div class="container">
				<div class="how-top-grids">
					<div class="col-md-7 how-left">
						<h3>How the people like to play</h3>
						<img src="main/images/4.jpg" alt="" />
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
							<span> </span>
						</a>
						<!-- pop-up-box -->
						<script type="text/javascript" src="main/js/modernizr.custom.min.js"></script>    
						<link href="main/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
						<script src="main/js/jquery.magnific-popup.js" type="text/javascript"></script>
						<!--//pop-up-box -->
						<div id="small-dialog" class="mfp-hide">
							<iframe src="//player.vimeo.com/video/37369607" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
						 <script>
							$(document).ready(function() {
							$('.popup-with-zoom-anim').magnificPopup({
								type: 'inline',
								fixedContentPos: false,
								fixedBgPos: true,
								overflowY: 'auto',
								closeBtnInside: true,
								preloader: false,
								midClick: true,
								removalDelay: 300,
								mainClass: 'my-mfp-zoom-in'
							});
																							
							});
						</script>
						<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
						</h4>
						<p>when an unknown printer took a galley of type and scrambled it to make a type specimen
							book. It has survived not only five centuries, but also the leap into electronic typesetting,
							remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
							heets containing Lorem Ipsum passages, and more recently with desktop publishing software 
							like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
					</div>
					<div class="col-md-5 how-right">
						<h3>Tournament Dates</h3>
						<div class="tournament">
							<div class="how-right-left">
								<img src="main/images/5.jpg" alt="" />
							</div>
							<div class="how-right-right">
								<h4>Aug 12</h4>
								<P>Lorem Ipsum is simply dummy text 
									of the printing and typesetting industry.
									Lorem Ipsum has been the industry's
									dummy text ever since the 1500s,
								</p>
								<div class="more">
									<a href="single.html">MORE</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="tournament t-middle">
							<div class="how-right-left">
								<img src="main/images/6.jpg" alt="" />
							</div>
							<div class="how-right-right">
								<h4>Aug 12</h4>
								<P>Lorem Ipsum is simply dummy text 
									of the printing and typesetting industry.
									Lorem Ipsum has been the industry's
									dummy text ever since the 1500s,
								</p>
								<div class="more">
									<a href="single.html">MORE</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="tournament t-middle">
							<div class="how-right-left">
								<img src="main/images/7.jpg" alt="" />
							</div>
							<div class="how-right-right">
								<h4>Aug 12</h4>
								<P>Lorem Ipsum is simply dummy text 
									of the printing and typesetting industry.
									Lorem Ipsum has been the industry's
									dummy text ever since the 1500s,
								</p>
								<div class="more">
									<a href="single.html">MORE</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //how -->
		<!-- news -->
		<div class="news">
			<!-- container -->
			<div class="container">
				<div class="news-info">
					<h3>Our News</h3>
				</div>
				<div class="news-grids">
					<div class="col-md-4 news-grid">
						<div class="news-grid-left news-grid-left-img">
							<p>11 / 09</p>
						</div>
						<div class="news-grid-left-info">
							<h5>Lorem Ipsum is simply dummy</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-left news-grid-middle">
							<p>11 / 09</p>
						</div>
						<div class="news-grid-left-info">
							<h5>Lorem Ipsum is simply dummy</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-left news-grid-right">
							<p>11 / 09</p>
						</div>
						<div class="news-grid-left-info">
							<h5>Lorem Ipsum is simply dummy</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //news -->
		<!-- banner-bottom -->
		<div class="banner-bottom">
			<!-- container -->
			<div class="container">
				<div class="banner-bottom-info">
					<h3>Expert Opinion</h3>
				</div>
				<div class="banner-bottom-grids">
					<div class="col-md-4 banner-bottom-grid">
						<span>Mortyn tim<label>[ 24 articles ]</label></span>
						<img src="main/images/c3.jpg" alt="" />
						<h4>Marty luthar Tim Break</h4>	
						<p>Lorem Ipsum is simply dummy text 
							of the printing and typesetting industry.
							Lorem Ipsum has been the industry's
							dummy text ever since the 1500s,
							including versions of Lorem Ipsum.
						</p>
					</div>
					<div class="col-md-4 banner-bottom-grid">
						<span>Mortyn tim<label>[ 24 articles ]</label></span>
						<img src="main/images/c1.jpg" alt="" />
						<h4>Marty luthar Tim Break</h4>	
						<p>Lorem Ipsum is simply dummy text 
							of the printing and typesetting industry.
							Lorem Ipsum has been the industry's
							dummy text ever since the 1500s,
							including versions of Lorem Ipsum.
						</p>
					</div>
					<div class="col-md-4 banner-bottom-grid">
						<span>Mortyn tim<label>[ 24 articles ]</label></span>
						<img src="main/images/c2.jpg" alt="" />
						<h4>Marty luthar Tim Break</h4>	
						<p>Lorem Ipsum is simply dummy text 
							of the printing and typesetting industry.
							Lorem Ipsum has been the industry's
							dummy text ever since the 1500s,
							including versions of Lorem Ipsum.
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //banner-bottom -->
	@endsection