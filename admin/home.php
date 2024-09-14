<?php include 'auth.php';?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @ibn__aminu">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Mobilizing App - Home</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="../vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="../vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="../vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
	<?php include 'navbar.php';?>
	<!-- Header container -->
	<div class="px-4 py-5 my-5 text-center">
		<div class="mb-4">
			<h1 class="display-5 fw-bold text-color2 mb-0"> <?php echo $schName;?> </h1>
			<h5 class="mb-0 fst-italic"> <?php echo $schMoto;?> ! </h5>
			<p class="mb-0 "> <?php echo $schAddress . ", " . $schCity;?> </p>
			<p class="mb-0 "> <?php echo $schPhone . ", " . $schEmail;?> </p>
		</div>
		<div class="col-lg-8 mx-auto">
		  <div class="row">
				<div class="col-md-4 mb-3">
					<a href="sessions" class="text-decoration-none">
						<div class="card shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-dark">
								<i class="fa fa-calendar " style="font-size: 50px"></i>
								<?php 
								$session = $conn->query("SELECT * FROM sessions WHERE status=1 ORDER BY session_id DESC LIMIT 1") or die($conn->error);
								$row = mysqli_fetch_array($session);?>
								<h3 class="text-dark text-center"><?= $row['title'];?></h3>
							</div> 
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-3">
					<a href="classes" class="text-decoration-none">
						<div class="card shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-dark">
								<i class="fa fa-home " style="font-size: 50px"></i>
								<?php $classesAll = $conn->query("SELECT * FROM classes WHERE status=1 ") or die($conn->error);?>
								<h3 class="text-dark text-center"><?= mysqli_num_rows($classesAll)?> Classes</h3>
							</div> 
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-3">
					<a href="courses" class="text-decoration-none">
						<div class="card shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-dark">
								<i class="fa fa-book " style="font-size: 50px"></i>
								<h3 class="text-dark text-center"><?= mysqli_num_rows($coursesAll)?> Courses</h3>
							</div> 
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-3">
					<a href="faculties" class="text-decoration-none">
						<div class="card shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-dark">
								<i class="fa fa-home " style="font-size: 50px"></i>
								<h3 class="text-dark text-center"><?= mysqli_num_rows($facultyAll)?> Faculties</h3>
							</div> 
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-3">
					<a href="departments" class="text-decoration-none">
						<div class="card shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-dark">
								<i class="fa fa-sitemap " style="font-size: 50px"></i>
								<h3 class="text-dark text-center"><?= mysqli_num_rows($depsAll)?> Departments</h3>
							</div> 
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-3">
					<a href="students" class="text-decoration-none">
						<div class="card shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-dark">
								<i class="fa fa-user " style="font-size: 50px"></i>
								<h3 class="text-dark text-center"><?= mysqli_num_rows($studentsAll)?> Students</h3>
							</div> 
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-3">
					<a href="requests" class="text-decoration-none">
						<div class="card shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-dark">
								<i class="fa fa-file " style="font-size: 50px"></i>
								<h3 class="text-dark text-center"><?= mysqli_num_rows($requestsAll)?> Applications</h3>
							</div> 
						</div>
					</a>
	      </div>
		  	<div class="col-md-4 mb-3">
					<a href="school" class="text-decoration-none">
						<div class="card shadow border-bottom-success" style="border-radius: 10px">
							<div class="card-body p-3 text-dark">
								<i class="fa fa-bank " style="font-size: 50px"></i>
								<h3 class="text-dark text-center"> School Profile</h3>
							</div> 
						</div>
					</a>
				</div>

		  </div>
		</div>
	</div>
  </main>

<!--Footer-->
    <?php include 'footer.php';?>
<!--/.Footer-->

<!-- scripts -->
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendor/Bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- <script src="../vendor/Bootstrap/js/bootstrap.min.js"></script>   -->
<!-- overlayScrollbars -->
<script src="../vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

      
  </body>
</html>
