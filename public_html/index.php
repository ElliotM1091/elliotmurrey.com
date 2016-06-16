<!DOCTYPE html> <!--this is the doctype declaration-->
<html lang="en"><!--this is to set this page to english-->
	<head>  <!--this is the head tag to start the doc out-->

		<!--this is hte 8 bit setting used universally. this is a self closing tag-->
		<meta charset="utf-8">
		<!--this helps out IE-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<!--going to be used for view port -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!--customer CSS-->
		<link rel="stylesheet" href="./css/styles.css" type="text/css">
		<!-- favicon -->
		<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon"/>

		<!-- jQuery (needed for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<script src='https://www.google.com/recaptcha/api.js'></script>
<!--		<script src='https://www.google.com/recaptcha/api/verify'></script>-->

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>


		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->

	</head>
	<body class="sfooter">
		<div class="sfooter">

			<!-- header-->
			<header class="p-y-4">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<a href="#" class="thumbnail">
								<img src="image/20141112_161628-1.png" alt="pic of me" width="200" height="280">
							</a>
						</div>
						<div class="col-md-9">
							<div class="block_1"><h1 class="my-name">Elliot Murrey</h1>
								<p class="title">FULL STACK WEB DEVELOPER</p></div>
							<br>
							<hr/>

							<div class="container-fluid">

								<ul class="nav navbar-nav navbar-right">
									<li class="list"><a href="#about-me">About me</a></li>
									<li class="list"><a href="#Experience">Experience</a></li>
									<li class="list"><a href="#Contact me">Contact me</a></li>
								</ul>
							</div>
							<div class="block_1">
							</div>
						</div>
					</div>
					<hr/>
				</div>
			</header>
			<!-- welcome!-->
			<!-- welcome section -->
			<a name="about-me"><h1 class="about-me">ABOUT ME</h1></a>
			<section id="welcome" class="p-y-4">
				<div class="container">
					<div class="row row-flex">
						<div class="col-md-8">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2 class="panel-title">Just a little about me</h2>
								</div>
								<div class="panel-body">
									<p>My Name is Elliot Murrey. I am a full stack junior web developer based in Albuquerque New
										Mexico. I enjoy creating websites and absolutely love programming.</p>
									<p> I am currently attending the Central New Mexico's STEMules Deep Dive Coders Bootcamp, and
										will be graduating on June, 17, 2016. If you'd like to see a demo of the project my team
										has been working on, we will be doing DEMO NIGHT at The Fate pipe on June, 15, 2016.</p>
									<p>I love working with people and would love to help you create your dream. Rather it be a
										personal website, or taking your dream or a thought and making it a reality. I'm the guy
										for
										you. </p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Tech Tool box!</h3>
								</div>
								<ul>
									<li>PHP</li>
									<li>mySQL</li>
									<li>javaScript</li>
									<li>CSS</li>
									<li>html</li>
								</ul>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Other Skills</h3>
									</div>
								</div>
								<ul>
									<li>TDD( Test Driven Development)</li>
									<li>Bootstrap</li>
									<li>Object Oriented programming</li>
									<li>Data Design</li>
									<li>Ecommerce web sights</li>
									<li>Working as part of a team</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<h3 class="about-me">Education</h3>
			<h2 class="subH">Where I've learned everything that I know so far.</h2>
			<div class="container">
				<div class="row row-flex">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="./image/icon-ddcb-lg.png" alt="Deep Dive Logo" height="60" width="100">
							<div class="caption">
								<h3>CNM STEMulus Center Deep Dive Coders Bootcamp</h3>
								<h3>Albuquerque, NM</h3>
								<h4>Capstone Project:</h4>
								<p>Project: Co-developer an Ecommerce website for buying and selling game cartridges
									including PayPal integration.</p>
								<h4>Coursework to include:</h4>
								<ul>
									<li>PHP 7</li>
									<li>MySQL</li>
									<li>JavaScript</li>
									<li>Enterprise Application Development</li>
									<li>Security</li>
									<li>It Project Management</li>
									<li>Web Design</li>
									<li>Test Driven Development</li>
									<li>Computer Architecture</li>
									<li>Object Oriented Programming</li>
									<li>Bootstrap 3</li>
									<li>CSS 3</li>
								</ul>
								<p><a href="http://Romules.com" class="btn btn-primary" role="button">Capstone Project</a> <a
										href="http://stemuluscenter.org/deep-dive-coding-application/"
										class="btn btn-default" role="button">Apply For Deep Dive</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="./image/lynda.png" alt="Lynda Logo" height="60" width="100">
							<div class="caption">
								<h3>Lynda.com</h3>
								<h4>Coursework to include:</h4>
								<ul>
									<li>PHP fundamentals</li>
									<li>JavaScript fundamentals</li>
									<li>MySQL Essential Training</li>
									<li>Code clinic: Python</li>
									<li>C++ Programming</li>
									<li>Java Essential training</li>
								</ul>
								<p><a href="https://lynda.com" class="btn btn-primary" role="button">View Lynda.com</a> <a
										href="http://www.lynda.com/promo/trial/default.aspx?lpk35=8006"
										class="btn btn-default" role="button">Sign up for Lynda.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="./image/sololearnLogo.png" alt="Deep Dive Logo" height="240" width="320">
							<div class="caption">
								<h3>Solo Learn</h3>
								<h4>Coursework to include:</h4>
								<ul>
									<li>C++</li>
									<li>Learn PHP</li>
									<li>Learn JavaSript</li>
									<li>Learn Css</li>
									<li>Learn SQL</li>
									<li>Learn HTML</li>
									<li>Digital Marketing</li>
									<li>Learn Python</li>
								</ul>
								<p><a href="https://play.google.com/store/apps/developer?id=SoloLearn"
										class="btn btn-primary" role="button">Solo Learn on Android</a> <a
										href="https://itunes.apple.com/us/developer/sololearn-inc/id933957049"
										class="btn btn-default" role="button">Solo Learn on IOS</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a name="Experience"><h3 class="about-me">Experience</h3></a>
			<p class="subH">I'm only getting started!</p>
			<div class="container">
				<div class="row-padded">
					<!-- Begin Columns Here -->
					<div class="row row-flex">

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<div class="caption">
									<h3 class="Rom">::ROMuLess::</h3>
									<h4>Albuquerque, NM</h4>
									<h4>2016</h4>
									<h4>Co Developer</h4>
									<ul>
										<li>Data Design- Producing wireframes, personas, use casese, and ERD</li>
										<li>Programming the back end using PHP, and mySQL to form a data base</li>
										<li>creating apis so that user input can be added to data base, only after sanitized
											through Encapsulation.
										</li>
										<li>Creating the font end using Css, Bootstrap, JavaScript, and Angular.</li>
									</ul>
								</div>
							</div>
						</div><!--/.col-->

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="./image/Sprint.png" alt="Sprint logo" height="300" width="300">
								<div class="caption">
									<h3>Sprint Corporation</h3>
									<h4>Albuquerque, NM</h4>
									<h4>2013-2016</h4>
									<h4>Account manager</h4>
									<ul>
										<li>Providing customer service excellence while deescalating calls.</li>
										<li>Managing customer accounts, updating info, deleting customer account, posting notes to
											account.
										</li>
										<li>finding customers wants interests and needs.</li>
									</ul>
								</div>
							</div>
						</div><!--.col-->

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="./image/sitel.jpg" alt="Sitel" height="300" width="300">
								<div class="caption">
									<h3>Sitel</h3>
									<h4>Albuquerque, NM</h4>
									<h4>2010-2013</h4>
									<h4>Customer Service Req</h4>
									<ul>
										<li>Assisting customers with any account related issues.</li>
										<li>up-selling.</li>
									</ul>
								</div>
							</div>
						</div><!--/.col-->
					</div><!--/.row-->

					<p class="pull-right">
						<button><a href="#">Back to top</a></button>
					</p>
				</div><!-- /.container -->


			</div>
			<a name="Contact me"><h3 class="about-me">Contact Me</h3></a>
			<p class="subH">Enough about me I'd love to hear from you!</p>
			<div class="container">
				<div class="row-padded">
					<!-- Begin Columns Here -->
					<div class="row row-flex">
						<div class="col-sm-6 col-md-9"
					</div>

					<!--Begin Contact Form-->
					<div class="form-horizontal well"">
						<form id="contact-form" action="php/mailer.php" method="post">
							<div class="form-group">
								<label for="name">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment" aria-hidden="true"></i>
									</div>
								<textarea class="form-control" rows="5" id="message" name="message"
											 placeholder="Message (2000 characters max)"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6LcDKCITAAAAAKgl4_0e4mod1CjksGRgKFiOJn0z"></div>

							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form>

						<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div> <!-- end form -->
					</div>
				</div>
				<div class="container">
					<footer class="footer">
						<div class="foot-content">
							<div class="container">
								<!--footer links/content-->
								<div class="row">
									<div class="col-md-6 visible-md-block visible-lg-block footer-brand">

									</div>
									<div class="col-xs-12 col-md-6">
										<div class="foot-links col-md-6"></div>
										<div class="foot-links col-md-6">
											<h4 class="wantmore">But wait there's more!</h4>
											<a href="https://twitter.com/EnhancedElliot?lang=en"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"> | </i></a>
											<a href="https://www.linkedin.com/in/elliot-murrey-a6b692121
"> <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"> | </i></a>
											<a href="https://github.com/ElliotM1091"> <i class="fa fa-github-square fa-3x" aria-hidden="true"> | </i></a>
											<a href=""> <i class="fa fa-google-plus-square fa-3x" aria-hidden="true"> </i></a>
										</div>
									</div>
									<div class="col-xs-12 col-md-" 12>
										<h4 class="footer-elliot">www.elliotmurrey.com</h4>
									</div>
								</div><!--.row-->
							</div>
						</div>
				</div>
			</div>
		</div>
	</body>
</html>

