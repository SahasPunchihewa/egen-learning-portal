<?php
	session_start();
	if (isset($_SESSION['userName'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Downloads</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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
									<li class="active"><a href="downloads.php">Downloads</a></li>
									<?php if($_SESSION['userType'] == 'admin'){?>   
										<li><a href="portal.php">Portal</a></li>    
										<?php } ?>
									<li><a href="scripts/logout.php">Logout</a></li>
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
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="downloads.php">Downloads</a></li>
				<li class="menu_mm"><a href="scripts/logout.php">Logout</a></li>
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
								<li>Downloads</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>All Categories</option>
								<option>Videos</option>
								<option>Tutorials</option>
								<option>Papers</option>
							</select>
							<button action="submit" class="courses_search_button ml-auto">Submit</button>
						</form>
					</div>
				</div>
				
	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row courses_row">
				<!-- Course Start Here -->

				<?php
						include("scripts/db.php");

						$sql = "SELECT * FROM doc WHERE docGrade=".$_GET['grade'];

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
			?>
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
                <div class="course_body">
					<h3 class="course_title"><?php echo($row['docTitle']) ?></h3>
					<div class="course_text">
								<p>Date: <?php echo($row['docDate']) ?></p>
					</div>
					<div class="course_footer">
					<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
					<div class="col">
						<?php
							if($row['docType'] == 'paper'){
						?>
						<div class="courses_button trans_200">
								<a href="uploads/<?php echo($row['docId']) ?>.pdf" target="_blank">Download</a>
							</div>
							<?php
							if($_SESSION['userType'] == "admin"){
								?>
								<div class="courses_button trans_200">
								<a href="scripts/delete.php?id=<?php echo($row['docId']) ?>.pdf" target="_blank">Delete</a>
							</div>
								<?php
							}
							?>

						<?php

							}elseif ($row['docType'] == 'vid') {
								?>
								<div class="courses_button trans_200">
								<a href="<?php echo($row['docLink']) ?>"  target="_blank">Watch</a>
							</div>
								<?php
							if($_SESSION['userType'] == "admin"){
								?>
								<div class="courses_button trans_200">
								<a href="scripts/delete.php?id=<?php echo($row['docId']) ?>.pdf" target="_blank">Delete</a>
							</div>
								<?php
							}
							?>
							
								<?php
							}else {
								?>
								<div class="courses_button trans_200">
								<a href="uploads/<?php echo($row['docId']) ?>.pdf" target="_blank">Download</a>
							</div>
							
							<div class="courses_button trans_200">
								<a href="<?php echo($row['docLink']) ?>"  target="_blank">Submit Answer</a>
							</div>
								<?php
							if($_SESSION['userType'] == "admin"){
								?>
								<div class="courses_button trans_200">
								<a href="scripts/delete.php?id=<?php echo($row['docId']) ?>.pdf" target="_blank">Delete</a>
							</div>
								<?php
							}
							?>
								<?php
							}
						?> 
				</div>
					</div>	
				</div>
                </div>
					</div>
				</div>
				<!-- Course Start Here  -->
				<?php
							}
						}
				?>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
</body>
</html>
<?php
	}else{
		header("Location:"."login.php");
	}
?>