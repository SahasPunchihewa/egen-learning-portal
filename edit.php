<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Profile</title>
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
									<li><a href="downloads.php">Downloads</a></li>
									<li><a href="profile.php">Profile</a></li>
									<li class="active"><a href="edit.php">Edit Profile</a></li>
								</ul>
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
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="profile.php">Profile</a></li>
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
								<li><a href="index.html">Home</a></li>
								<li><a href="profile.html">Profile</a></li>
								<li>Edit Profile</li>
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
							<div class="contact_info_title">Edit Profile</div>
							<form action="scripts/profile.php" class="comment_form" method="POST">
								<div></div>
								<br>
								<div class="form_title">
									<table class="table">
										<tr>
											<td><img src="images/profilepic.png" width="200" height="200" alt="Profile Picture"/></td>
											<td>&nbsp;</td>
											<td class="upl"><br><br><br><button type="submit" class="comment_button trans_200">Upload</button></td>
										</tr>
										<tr>
											<td>Username</td>
											<td>:</td>
											<td><input type="text" name="username" class="slist"></td>
										</tr>
										<tr>
											<td>Full Name</td>
											<td>:</td>
											<td><input type="text" name="fname" class="slist"></td>
											
										</tr>
										<tr>
											<td>Class</td>
											<td>:</td>
											<td><select name="clz" class="slist">
												<option value="20T">2020 Theory</option>
												<option value="21T">2021 Theory</option>
												<option value="22T">2022 Theory</option>
												<option value="20R">2020 Revision</option>
												</select></td>
										</tr>
										<tr>
											<td>Current Password</td>
											<td>:</td>
											<td><input type="password" name="cpasswd" class="slist"></td>
										</tr>
										<tr>
											<td>New Password</td>
											<td>:</td>
											<td><input type="password" name="npasswd" class="slist"></td>
										</tr>
										<tr>
											<td>Re-Enter New Password</td>
											<td>:</td>
											<td><input type="password" name="rnpasswd" class="slist"></td>
										</tr>
									</table>
									<div>
									<button type="submit" class="comment_button trans_200">Save</button>
									</div>
								</div>
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