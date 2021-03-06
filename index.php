<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>PHP Local Network Video Player</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<!-- <header id="header" class="alt"> -->
				<!-- <div class="logo"><a href="index.html">Transitive <span>by TEMPLATED</span></a></div> -->
				<!-- <a href="#menu" class="toggle"><span>Menu</span></a> -->
			<!-- </header> -->

		<!-- Nav -->
<!-- 			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>
 -->
		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="images/banner">
				<div class="inner">
					<h1>Home Network Video Player</h1>
					<p>A network video player for tv's and other devices without native support for video files<br />
					built by <a href="https://github.com/acadetorres/php-video-player">acadetorres</a>.</p>
					<a href="#one" class="button special scrolly">Get Started</a>
					</div>
			</section>

		<!-- One -->
			<!-- <section id="one" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
								<img src="images/pic01.jpg" alt="" />
							</div>
							<div class="content">
								<header class="align-center">
									<h2>Lorem ipsum dolor</h2>
									<p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
								</header>
								<hr />
								<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
								<p>Vivamus fermentum nibh vel pharetra blandit. Cras a purus urna. Sed et libero ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse id hendrerit felis. Nulla viverra tempor dui at congue. Pellentesque quis nulla ornare, congue nisi id, finibus nulla. Aliquam sit amet hendrerit purus. Donec libero massa, posuere fermentum eros sit amet, maximus fringilla augue. Maecenas at rhoncus lorem. Vivamus ultricies consequat est, efficitur convallis libero. Vivamus rutrum semper mauris, vitae consequat eros tempor ac. Pellentesque et ornare sapien</p>
							</div>
						</div>
					</div>
				</div>
			</section> -->

		<!-- Two -->
			<!-- <section id="two" class="wrapper style3">
				<div class="inner">
					<div id="flexgrid">
						<div>
							<header>
								<h3>Tempus Feugiat</h3>
							</header>
							<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>Aliquam Nulla</h3>
							</header>
							<p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed </p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>Sed Magna</h3>
							</header>
							<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Learn More</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
 -->
		<!-- Three -->
<section id="one" class="wrapper style2">
	<div class="inner">
		<div class="grid-style">

		<?php 
		// $counter = 0;
		require("php/scanFiles.php");
		// echo "<h2>" . print_r($videoArray) ."</h2>";
		// echo "<h2>" . print_r($videoArray) . "</h2>";
		
		foreach ($videoArray as $video) {

		// echo '<section id="'. $counter . '" class="wrapper style2">';
		// echo	'<div class="inner">';
		// echo		'<div class="grid-style">';
		echo			'<div style="overflow:hidden">';
		echo				'<div class="box">';
		echo					'<div class="image fit" style="display: flex; flex-direction: column; overflow: hidden;">';
		echo						'<video width="100%" height="100%" controls>';
		echo							'<source src="videos/' . $video . '" type="video/mp4">';	
		echo						'</video>';
		echo						'</div>';
		echo						 '<div class="content">';
		echo							'<header class="align-center">';
		echo								'<h2 style = "overflow: hidden">'  . $video . '</h2>';										
		echo							'</header>';
		echo							'<hr />';
		echo '</div></div></div>';
		// $counter++;
	}

		// print_r($videoArray);

		?>
		
		</div>
	</div>

		<!-- <div class = -->	
</section>
			
<!-- 

						<div>
							<div class="box">
								<div class="image fit">
									<video width="100%" height="100%" controls>
										<source src="videos/Flutter Crash Course.mp4" type="video/mp4">
									</video>
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Vestibulum sit amet</h2>
										<p>mattis sapien pretium tellus venenatis</p>
									</header>
									<hr />
									
								</div>
							</div>
						</div>

					</div>
				</div>
			</section> -->

		<!-- Four -->
			<section id="four" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2>Built and Maintained by acadetorres</h2>
						<p>Software is free to distribute, modify under gpl v3. </p>
					</header>

				</div>
			</section>

		<!-- Footer -->
			<!-- <footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center">Get in Touch</h2>
								<hr />
								<form action="#" method="post">
									<div class="field half first">
										<label for="name">Name</label>
										<input name="name" id="name" type="text" placeholder="Name">
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input name="email" id="email" type="email" placeholder="Email">
									</div>
									<div class="field">
										<label for="dept">Department</label>
										<div class="select-wrapper">
											<select name="dept" id="dept">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
									</div>
									<ul class="actions align-center">
										<li><input value="Send Message" class="button special" type="submit"></li>
									</ul>
								</form>
							</div>
						</div>
					</section>
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.
					</div>
				</div>
			</footer> -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>