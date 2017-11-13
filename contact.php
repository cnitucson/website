<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Call & Nicholas - International Mining Consultants">
		<meta name="author" content="Call & Nicholas">
		<link rel="icon" href="images/favicon.ico">

		<title>How to Contact Us - CALL &#38; NICHOLAS</title>

		<?php $page = 'index'; include("includes/css.php"); ?>

	</head>

	<body>
		<?php $page = 'index'; include("includes/header.php"); ?>

		<div class="container">
			<div class="row">
				<div class="col-12 pageHeader">
					<h2>Contact us</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>The easiest way to get in contact with us is by phone or email.</p>
					<p>(520) 670-9774<br>
						<SCRIPT TYPE="text/javascript">
						emailE='cnitucson.com'
						emailE=('cni' + '@' + emailE)
						document.write('<A href="mailto:' + emailE + '">' + emailE + '</a>')
						</script>
						<NOSCRIPT>
							<em>Email address is protected<BR>
							Please enable JavaScript to contact us by email.</em>
						</NOSCRIPT><br>
					</p>
					<p>
					Call &#38; Nicholas, Inc.<br>
					2475 North Coyote Drive<br>
					Tucson, Arizona 85745 USA<br>
					</p>
					<br>
				<h2 style="font-size: 18pt">Principal Engineers</h2>
					<a href="./resumes/cicchini.pdf">Mr. Paul F. Cicchini P.E., President</a><br>
					<a href="./resumes/ryan.pdf">Mr. Thomas M. Ryan P.E., Vice-President</a><br>
					<a href="./resumes/barkley.pdf">Mr. Ross C. Barkley P.E., Vice-President</a><br>
					<a href="./resumes/pratt.pdf">Mr. Robert W. Pratt P.E., Vice-President</a><br>
				</div>
				<div class="d-none d-md-block d-lg-block d-xl-block col-6">
<!--					<img class="imgBorder" src="images/map.png" width="100%"> -->
					<div id="map"></div>
					<script>
						function initMap() {
							var uluru = {lat: 32.2519882, lng: -111.0055738};
							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 5,
								center: uluru,
								disableDefaultUI: true,
								scrollwheel: false,
								navigationControl: false,
								mapTypeControl: false,
								scaleControl: false,
								draggable: false,
								disableDoubleClickZoom: true
							});
							var marker = new google.maps.Marker({
								position: uluru,
								map: map
							});
						}
					</script>
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzxBI87unr9eXYc8jL6XSTBlg5umjwP1U&callback=initMap"></script>
					<script>
						(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
						})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
						ga('create', 'UA-39355527-5', 'auto');
						ga('send', 'pageview');
					</script>
				</div>
			</div>
		</div> <!-- /container -->
		<?php $page = 'index'; include("includes/footer.php"); ?>
		<?php $page = 'index'; include("includes/js.php"); ?>
	</body>
</html>

