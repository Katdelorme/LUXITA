<?php
$page_title='Contact - LUXITA';
$page_desc='Visit the LUXITA salon or get in contact. Located at the Shangri-La Tokyo.';
$page_keywords="Contact LUXITA, contact Luxita, how to schedule a nail appointment in Luxita, schedule nail appointment, Luxita phone number, Luxita address, Luxita email, where is Luxita, address of Luxita, English speaking nail salon in Japan, Nail salon near Tokyo Station";
$facebook_img="http://luxita.com/assets/social/fbGeneral.png";
$twitter_img="http://luxita.com/assets/social/twitterGeneral.png";
include ('./includes/header.html');
/* PAGE CONTENT STARTS HERE! */
?>

  <div id="fullpage">
	<div class="container-fluid">

		<section class="section">
			<div class="row">
				<div class="col-xs-12 text-center contact">
					<h1>Get In Contact</h1>
					<p>This is fake text please create the copy: Sed sed semper elit. Donec interdum tristique justo, a placerat dui posuere imperdiet. Donec turpis leo, rutrum vitae posuere vel, varius vitae velit. Integer eu posuere mauris, sed tincidunt odio. Integer eros erat, rutrum id nunc id, tempor accumsan nunc.</p>
					<a href="#" class="btn">Book Now</a>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="row">
				<div class="col-md-8 col-xs-12 basepadding contactform">
					<h1>Send Us A Message</h1>
					<h3>Have any questions? Fill the form below.</h3>
					<form action="mailto:luxitatokyo@gmail.com" class="secondaryForm">
								<input type="text" value="" name="FNAME" placeholder="First Name">
								<input type="email" value="" name="EMAIL" class="required email" placeholder="Email Address">
								<textarea rows="5" cols="50" name="message" id="yourmessage" placeholder="Message"></textarea>
								<input type="submit" value="Send" name="">
					</form>
				</div>
				<div class="col-md-4 col-xs-12 middle basepadding" style="background-color:#edece8;">
					<p>This is fake text please create the copy: ADD step-by-step directions on how to get to the salon. Sed sed semper elit. Donec interdum tristique justo, a placerat dui posuere imperdiet. Donec turpis leo, rutrum vitae.</p>
          <address>
					<p>Marunouchi Trust Tower
					<br>Main, 1-8-3 Marunouchi Chiyoda-ku,
					<br>Tokyo, 100-8283, Japan</p>
          </address>
					<p><a href="tel:81355555555">T:(813) 5555 5555</a></p>
				</div>
			</div>
		</section>

		<!--<section class="section fp-auto-height fullpagefooter basepadding middle">
			<div class="text-center">
				<i class="fa fa-twitter fa-lg"></i>
				<i class="fa fa-instagram fa-lg"></i>
			</div>
			<div class="footerSplit">
				<div>
					<p>LUXITA - Bringing Fashion To Your Finger Tips</p>
					<p>Hand Coded and designed with <span>♥</span> by Katherine Delorme</p>
				</div>
				<div>
					<p>Privacy Policy     Press     Photo Rights</p>
					<p>© 2017 LUXITA Ltd. All Rights Reserved</p>
				</div>
			</div>
		</section>-->

	</div><!--container close-->
	</div><!--fullpage close-->

<?php
/* PAGE CONTENT ENDS HERE! */
require ('./includes/footer.html');
?>
