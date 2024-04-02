<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- link to your favicon -->
	<!-- <link rel="icon" href=""> -->

	<title>Jesse D. Cortado</title>
	<link rel="icon" type="image/x-icon" href="img/kojack-face.ico">

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- FontAwesome Icons -->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<!-- Custom PreLoader CSS -->
	<link rel="stylesheet" type="text/css" href="css/loader.css">
	<!-- Social Media CSS -->
	<link rel="stylesheet" type="text/css" href="css/social.css">
	<!-- Resume CSS -->
	<link rel="stylesheet" type="text/css" href="css/resume.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<!-- Google Fonts -->
	<!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:400,700"> -->

	<!-- Bootstrap Core JS -->
	<script src="js/bootstrap.min.js"></script>

	<?php
		$var = (isset($_GET['var'])) ? $_GET['var'] : 'Guest';
	?>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="80">

	<!-- Social Buttons -->
	<div class="social-media">
		<a href="https://www.facebook.com/jesse.cortado" target="_blank">Facebook <i class="fab fa-facebook-square"></i></a>
		<a href="https://www.linkedin.com/in/jesse-cortado-b84b75135" target="_blank">LinkedIn <i class="fab fa-linkedin" style="    color: #0a66c2;"></i></a>
	</div>

	<!-- HEADER -->
	<header class="site-header" role="banner">
		<!-- NAVBAR -->
		<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		  <div class="container">
		    <a class="navbar-brand" href="#about-me">
		    	JDC
		    </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link" href="#my-projects">
		          	<i class="fas fa-boxes"></i> Projects
		          </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#my-resume">
		          	<i class="fas fa-file-invoice"></i> Resume
		          </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#my-contact">
		          	<i class="fas fa-phone"></i> Contact
		          </a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>

	<!-- About Me -->
	<section id="about-me">
		<div class="intro">
			<div class="if-else-style">
				<!-- <a id="guest-name-link"><?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'?var=Jesse'; ?></a> -->
				<input type="text" id="guest-name-link" class="guest_textbox" name="guest_name" spellcheck="false" placeholder="Enter your name" maxlength="12">
				<span id="echo-guest-name">
					<?php echo $var.'!"'; ?>
				</span>
			</div>
			<!-- Custom Loader -->
			<div class="custom-loader">
				<div class="loading">
					<div class="box">J</div>
					<div class="box">D</div>
					<div class="box">C</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		
		<!-- My Projects -->
		<section id="my-projects">
			<h1>THIS IS MY PROJECTS</h1>
			<article>
				<h2>Project #1</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<figure>
					<img src="John Doe.png" alt="John Doe"/>
				</figure>
			</article>
			<article>
				<h2>Project #2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<figure>
					<img src="John Doe.png" alt="John Doe"/>
				</figure>
			</article>
			<article>
				<h2>Project #3</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<figure>
					<img src="John Doe.png" alt="John Doe"/>
				</figure>
			</article>
		</section>

		<!-- My Resume -->
		<section id="my-resume">
			<div id="left-panel">
				<div class="codes-img"></div>
				<div id="line-border-1"></div>
				<div id="line-border-2"></div>
				<div class="details">
					<h3 class="title white blue-line">About Me</h3>
					<h3 class="title white blue-line">Contact Me Pls</h3>
				</div>
			</div>
			<div id="main-content">
				<div class="personal-info">
					<img src="img/my-picture.jpg">
					<div class="details">
						<h1 class="first-name">
							Jesse <span class="last-name">Cortado</span>
						</h1>
						<span class="occupation">Web / Software Developer</span>
						<hr class="line">
					</div>
				</div>
				<div class="resume-container">
					<h3 class="title blue-line">Experiences</h3>
					<h3 class="title blue-line">Education</h3>
				</div>
			</div>

			<a href="javascript:;">Download</a>
		</section>

		<!-- My Contact -->
		<section id="my-contact">
			<h1>THIS IS MY CONTACT</h1>
		</section>

	</div>

	<!-- Footer -->
	<section class="footer">
		<div class="container-fluid">
			<div class="container d-flex justify-content-center">
				<h1>THIS IS THE FOOTER</h1>
			</div>
		</div>
	</section>

	<!-- JQUERY -->
	<script src="js/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#guest-name-link').click(function(){
				if (this.value != '') {
					window.location.href = '?var='+this.value;
				}
			});

			$('a.nav-link, a.navbar-brand').on('click', function (event) {
			    event.preventDefault();

			    $('html, body').animate({
			        scrollTop: $($.attr(this, 'href')).offset().top
			    }, 500);
			});
		});
	</script>
</body>
</html>