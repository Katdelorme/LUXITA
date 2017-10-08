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

		<section class="section contacttop">
			<div class="row">
				<div class="col-xs-12 text-center contact">
					<h1>Get In Contact</h1>
					<p>Wait no longer. Come experience Tokyo’s newest, most fashionable nail salon. Indulge in luxury, fashion and relaxation. LUXITA is located in the Shangri-La hotel in Tokyo on the 29th floor inside of Chi Spa.</p>
					<a href="#" class="btn">Book Now</a>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="row">
				<div class="col-md-8 col-xs-12 basepadding contactform">
					<h1>Send Us A Message</h1>
					<h3>Have any questions? Fill the form below.</h3>
					<form action="mailto:info@luxita.com" class="secondaryForm">
								<input type="text" value="" name="FNAME" placeholder="First Name">
								<input type="email" value="" name="EMAIL" class="required email" placeholder="Email Address">
								<textarea rows="5" cols="50" name="message" id="yourmessage" placeholder="Message"></textarea>
								<input type="submit" value="Send" name="">
					</form>
				</div>
				<div class="col-md-4 col-xs-12 middle basepadding" style="background-color:#edece8;">
          <address>
					<p>Marunouchi Trust Tower
					<br/>Main, 1-8-3 Marunouchi Chiyoda-ku,
					<br/>Tokyo, 100-8283, Japan
          <br/>Level 29</p>
          </address>
          <p>
          Via the JR Line to Tokyo Station a 1 min walk from the Nihonbashi Exit and 2 min walk from the Yaesu North Exit.
          <br/>For further directions visit the <a href="http://www.shangri-la.com/tokyo/shangrila/about/map-directions/" target="_blank">Shangri-La Map Directory</a></p>
          <p>
            Hours: 10:00am - 7:00pm
            <br/><a href="mailto:hi.slt@shangra-la.com?subject=Question%20About%20LUXITA%20Nail%20Salon">hi.slt@shangra-la.com</a>
            <br/><a href="tel:81367397880">T: (813) 6739 7880</a></p>
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
