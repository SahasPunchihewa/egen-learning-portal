<?php
	session_start();
	if ($_SESSION['userType'] == "admin"){

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Staff Portal</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+94 777 342 065</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>prasannagalle@gmail.com</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text"><img src="images/icon.png"/></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="register.php">Student Registration</a></li> 
									<li class="active"><a href="portal.php">Staff Portal</a></li>
								</ul>
								

								<!-- Hamburger -->

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="register.php">Student Registration</a></li>
				<li class="menu_mm"><a href="#">Staff Portal</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Staff Portal</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
		

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">File Upload Portal</div>
							<?php
								if (isset($_GET['fail'])){
									echo("<p style='color: red;'>Can't Upload file. File type must be pdf</p>");
								}												
							?>
							<form action="scripts/portal.php" class="comment_form" method="POST" enctype = "multipart/form-data">
								<div>
									<div class="form_title">Select Class</div>
									<select id="courses_search_select" class="courses_search_select courses_search_input" name="grade" required>
										<option value="">Select Class</option>
										<option value="2020">2020 A/L</option>
										<option value="2021">2021 A/L</option>
										<option value="2022">2022 A/L</option>
									</select>
								</div>
								<div class="form_title">File Type</div>
								  <p>
									  <label>
									    <input type="radio" name="filetype" value="vid" id="filetype_0" required>
										  Video&emsp;</label>
									  <label>
									    <input type="radio" name="filetype" value="tute" id="filetype_1">
									    MCQ/Structure&emsp;</label>
									  <label>
									    <input type="radio" name="filetype" value="paper" id="filetype_2">
									    E Material(PDF)</label>
								  </p>
                                </div>
								<div>
									<div class="form_title">Title</div>
									<input type="text" class="comment_input" required="required" name="title">
								</div>
								<div>
									<div class="form_title">Submission Link / Video Link</div>
									<input type="text" class="comment_input" name="link">
								</div>
								<div>
								<div>
									<div class="form_title">Attach File</div>
									<input type="file" name="document" accept=".pdf">
								</div>
								<div>
									<button type="submit" class="comment_button trans_200">submit now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->

	<footer class="footer">
		
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
										<div class="footer_logo_text">E<span>GEN</span></div>
										</a>
									</div>	
									<div class="cr_text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>
<?php
	}else{
		header("Location:"."login.php");
	}
?>