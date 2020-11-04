<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css" />
<link rel="stylesheet" href="assets/css/svl-global.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="assets/css/flag.min.css">
<link rel="stylesheet" href="assets/css/animated-headlines.css">
<link rel="stylesheet" href="assets/css/hover-min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/back-to-top.css">
<link rel="stylesheet" href="assets/css/global.css">
<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<link rel="stylesheet" href="assets/css/styles.css">
<title>SVL Global</title>
<link rel="icon" href="assets/img/fav.png" type="image/gif">
</head>
<body>
<!--
Sign Up Modal
-->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<nav class="nav justify-content-center social-login a-mx-2 my-2">
				<a href="#" class="nav-link rounded-circle bg-facebook text-white"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="nav-link rounded-circle bg-google text-white"><i class="fab fa-google"></i></a>
				<a href="#" class="nav-link rounded-circle bg-grey-200"><i class="fab fa-apple"></i></a>
				<a href="#" class="nav-link rounded-circle bg-amazon black"><i class="fab fa-amazon"></i></a>
			</nav>
			<p class="text-center text-muted">or Sign-Up with</p>
			<form>
				<div class="form-group">
					<label for="" class="sr-only">Name</label>
					<input type="text" class="form-control" id="" placeholder="Enter your Name">
				</div>
				<div class="form-group">
					<label for="" class="sr-only">Enter Email or Phone Number</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone Number">
				</div>
				<div class="form-group font-size-1">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
						<label class="form-check-label text-muted" for="inlineCheckbox1">Tell me about SVL Updates</label>
					</div>
				</div>
				<p class="font-size-2 text-muted">By signing up, I agree to SVL's <a href="#">Terms of Service, Privacy Policy, Guest Refund policy, and Host Guarantee Terms. Click Here</a></p>
				<button type="submit" class="btn btn-primary btn-block">Send OTP</button>
			</form>
		  </div>
			<div class="modal-footer text-center">
				<p class="font-size-2">Already a SVL Member? <a href="#signup" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Sign-In</a></p>
			</div>
		</div>
	</div>
</div>
<!--
Sign In Modal
-->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signInModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav class="nav justify-content-center social-login a-mx-2 my-2">
			<a href="#" class="nav-link rounded-circle bg-facebook text-white"><i class="fab fa-facebook-f"></i></a>
			<a href="#" class="nav-link rounded-circle bg-google text-white"><i class="fab fa-google"></i></a>
			<a href="#" class="nav-link rounded-circle bg-grey-200"><i class="fab fa-apple"></i></a>
			<a href="#" class="nav-link rounded-circle bg-amazon black"><i class="fab fa-amazon"></i></a>
		</nav>
		<p class="text-center text-muted">or Sign-In with</p>
		<form>
			<div class="form-group">
				<label for="" class="sr-only">Enter Email or Phone Number</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone Number">
			</div>
			<div class="form-group">
				<label for="" class="sr-only">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
			</div>
			<div class="form-group font-size-1">
				<a href="#" class="float-right" data-toggle="modal" data-target="#forgotPassModal" data-dismiss="modal">Forgot password?</a>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
					<label class="form-check-label" for="inlineCheckbox1">Remember me</label>
				</div>
			</div>
			<a type="submit" class="btn btn-primary btn-block" href="http://myaccount.svlglobal.com/" target="_blank">Submit</a>
		</form>
      </div>
			<div class="modal-footer text-center">
				<p class="font-size-2">Don't have an account? <a href="#" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal">Sign up</a></p>
			</div>
		</div>
	</div>
</div>
<!--
Forgot Password Modal
-->
<div class="modal fade" id="forgotPassModal" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotPassModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form>
					<div class="form-group">
						<label for="" class="sr-only">Enter Email or Phone Number</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone Number">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Send OTP</button>
				</form>
      </div>
			<div class="modal-footer text-center">
				<p class="font-size-2">Already a SVL Member? <a href="#" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Sign-In</a></p>
			</div>
    </div>
  </div>
</div>
<!--
Map Share
-->
<div class="modal fade" id="shareMapModal" tabindex="-1" role="dialog" aria-labelledby="shareMapModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="shareMapModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav class="nav justify-content-center social-login a-mx-2 my-2">
					<a href="#" class="nav-link rounded-circle bg-facebook text-white"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="nav-link rounded-circle bg-google text-white"><i class="fab fa-google"></i></a>
					<a href="#" class="nav-link rounded-circle bg-grey-200"><i class="fab fa-apple"></i></a>
					<a href="#" class="nav-link rounded-circle bg-amazon black"><i class="fab fa-amazon"></i></a>
				</nav>
				<p class="text-center text-muted">or Sign-In with</p>
				<form>
					<div class="form-group">
						<label for="" class="sr-only">Enter Email or Phone Number</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email or Phone Number">
					</div>
					<div class="form-group">
						<label for="" class="sr-only">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
					</div>
					<div class="form-group font-size-1">
						<a href="#" class="float-right">Forgot password?</a>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
							<label class="form-check-label" for="inlineCheckbox1">Remember me</label>
						</div>
					</div>
					<a type="submit" class="btn btn-primary btn-block" href="dashboard.html">Submit</a>
				</form>
      </div>
			<div class="modal-footer text-center">
				<p class="font-size-2">Don't have an account? <a href="#">Sign up</a></p>
			</div>
    </div>
  </div>
</div>
<!--
Topbar
-->
<section class="bg-black top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <nav class="nav nav-divided justify-content-center justify-content-sm-start a-py-2 a-px-2 a-px-sm-4">
					<a href="#mail-us" class="nav-link" uk-scroll="offset:170;"><i class="fas fa-envelope"></i> Feedback</a>
					<a href="#contact-us" class="nav-link" rel="PageScroll2id" data-ps2id-offset="20"><i class="fas fa-map-marker-alt"></i> Contact Us</a>
				</nav>
            </div>
            <div class="col-sm-auto">
                <nav class="nav nav-divided justify-content-center justify-content-sm-end a-py-2 a-px-4">
					<a href="#" class="nav-link"><i class="fas fa-rupee-sign"></i></a>
					<a href="#" class="nav-link"><i class="in flag"></i></a>
					<a href="#" target="_blank" class="nav-link">Download Apps</a>
					<a href="#" target="_blank" class="nav-link"><i class="fab fa-apple"></i></a>
					<a href="#" target="_blank" class="nav-link"><i class="fab fa-android"></i></a>
					<a href="#" target="_blank" class="nav-link"><i class="fab fa-youtube"></i></a>
					<a href="http://blog.svlglobal.com/" target="_blank" class="nav-link">SVLG Blog</a>
					<a href="#" class="nav-link" data-toggle="modal" data-target="#signUpModal">Sign-Up</a>
					<a href="#" class="nav-link" data-toggle="modal" data-target="#signInModal">Sign-In</a>
				</nav>
            </div>
        </div>
    </div>
</section>
<!--
Navbar
-->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top" data-hover="dropdown">
    <div class="container-fluid">
		<a class="navbar-brand" href="http://staging.svlglobal.com/">
			<img src="assets/img/svl-global-logo.svg" alt="" width="130px" height="38px">
		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHome" aria-controls="navbarHome" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarHome">
            <div class="navbar-nav ml-auto align-items-sm-center">
				<a class="nav-item nav-link" href="http://staging.svlglobal.com/"><i class="fas fa-home"></i></a>
				<a class="nav-item nav-link" href="about.php">About</a>
				<a class="nav-item nav-link" href="services.php">Services</a>
				<a class="nav-item nav-link" href="mission.php">Mission</a>
				<!--
                <div class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="visionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Vision </a>
					<div class="dropdown-menu animated flipInY" aria-labelledby="visionDropdown">
						<a class="dropdown-item" href="vision.html">Global Vision</a>
						<a class="dropdown-item" href="vision.html">Travel</a>
						<a class="dropdown-item" href="vision.html">Transport</a>
						<a class="dropdown-item" href="vision.html">Fleet Management</a>
						<a class="dropdown-item" href="vision.html">Doorstep Services</a>
						<a class="dropdown-item" href="vision.html">Fleet Insurance</a>
						<a class="dropdown-item" href="vision.html">Branding Services</a>
						<a class="dropdown-item" href="vision.html">Technology</a>
						<a class="dropdown-item" href="vision.html">Vocational Courses</a>
					</div>
                </div>-->
				<a class="nav-item nav-link" target="_blank" href="http://guide.svlglobal.com/">Guide</a>
				<a class="btn btn-sm btn-primary rounded-pill shadow-sm mx-3 bg-orange-500-hover border-orange-500-hover" target="_blank" href="http://book.svlglobal.com/">Book Now</a>
				<!--All Service-->
				<div class="ml-2 mr-2 allServices" type="button">
					<img src="assets/img/services.svg" alt="" uk-svg>
				</div>
				<div class="uk-width-large allServicesDropdown" uk-dropdown="mode: click; offset: 10">
					<ul class="uk-nav uk-dropdown-nav text-center uk-grid-column-collapse uk-grid-row-small uk-child-width-1-5" uk-grid>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -290px;"></span>
								<span class="services-text">Account</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -115px;"></span>
								<span class="services-text">Search</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -874px;"></span>
								<span class="services-text">Maps</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -1222px;"></span>
								<span class="services-text">YouTube</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -640px;"></span>
								<span class="services-text">Play</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -1862px;"></span>
								<span class="services-text">News</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -1802px;"></span>
								<span class="services-text">Gmail</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -2212px;"></span>
								<span class="services-text">Contacts</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 0;"></span>
								<span class="services-text">Drive</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -1513px;"></span>
								<span class="services-text">Calendar</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -1338px;"></span>
								<span class="services-text">Translate</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -1746px;"></span>
								<span class="services-text">Photos</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -58px;"></span>
								<span class="services-text">Shopping</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -1047px;"></span>
								<span class="services-text">Duo</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="services-icon" style="background-position: 0 -290px;"></span>
								<span class="services-text">Account</span>
							</a>
						</li>
					</ul>
				</div>
            </div>
        </div>
    </div>
</nav>