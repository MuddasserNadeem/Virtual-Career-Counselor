<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.html">Home</a></li>
							<li>Contact</li>
						</ul>
						<h1 class="white-text">Get In Touch</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>Send A Message</h4>
							<form action="send_message.php" method="POST">
                            <input class="input" type="text" name="name" placeholder="Name" required>
                            <input class="input" type="email" name="email" placeholder="Email" required>
                            <input class="input" type="text" name="subject" placeholder="Subject" required>
                            <textarea class="input" name="message" placeholder="Enter your Message" required></textarea>
                            <button class="main-button icon-button pull-right" type="submit">Send Message</button>
                        </form>
							<!-- <form>
								<input class="input" type="text" name="name" placeholder="Name">
								<input class="input" type="email" name="email" placeholder="Email">
								<input class="input" type="text" name="subject" placeholder="Subject">
								<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
								<button class="main-button icon-button pull-right">Send Message</button>
							</form> -->
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1">
						<h4>Contact Information</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>muddassernadeem@gmail.com</li>
							<li><i class="fa fa-envelope"></i>abuzaransari312324@gmail.com</li>
							<li><i class="fa fa-phone"></i>+92 313 5818286</li>
							<li><i class="fa fa-phone"></i>+92 341 7690907</li>
							<li><i class="fa fa-map-marker"></i>Department of CS, UET Taxila, Punjab, Pakistan</li>
						</ul>

						<!-- contact map -->
						<div id="contact-map" style="width:100%; height:300px;">
    <!-- <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.743252578535!2d72.82031278242206!3d33.76729990433278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa4379f98c421%3A0x689151ad40e0a54b!2sUET%2C%20UET%20Football%20Ground%2C%20University%20of%20Engineering%20%26%20Technology%2C%20Taxila%2C%2047080%2C%20Pakistan!5e0!3m2!1sen!2s!4v1744550861900!5m2!1sen!2s" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe> -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6633.721532054478!2d72.81949184332291!3d33.76426364306678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa5a82737d54d%3A0x5d9b1d2c1aefdbc4!2sDepartment%20of%20Computer%20Science!5e0!3m2!1sen!2sus!4v1744551136605!5m2!1sen!2sus" 
		width="100%" 
		height="100%" 
		style="border:0;" 
		allowfullscreen="" 
		loading="lazy" 
		referrerpolicy="no-referrer-when-downgrade">
	</iframe>
</div>
						<!-- /contact map -->

					</div>
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

		
		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" style="font-size: 30px;" href="main.html">Virtual Career Counselor</a>
						</div>
					</div>
					<!-- footer logo -->


				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2025. All Rights Reserved. </span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->
		
		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
