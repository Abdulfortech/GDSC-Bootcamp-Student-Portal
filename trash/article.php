<?php include 'connection.php';
    session_start();
    if (isset($_SESSION['studentid'])) {
    $studentid = $_SESSION['studentid'];
    }else {
    echo "<script>window.open('index', '_self')</script>";
    }

  $studentINFOR = $conn->query("SELECT * FROM students WHERE student_id='".$studentid."' ") or die($conn->error);
    while ($row = $studentINFOR->fetch_assoc()) {
    $name = $row['name'];
    $reg = $row['regnum'];
    $dep = $row['department'];
    $status = $row['status'];
    }

    if($_GET){
        $articleid = $_GET['id'];
    }elseif (isset($_POST['id'])) {
        $articleid = $_POST['id'];
    }else{
        // echo "<script> window.open('users', '_self')</script>";
        header("Location:articles");
    }

    $article = $conn->query("SELECT * FROM articles WHERE article_id=$articleid") or die($conn->error);
    while ($row = $article->fetch_assoc()) {
        $title = $row['title'];
        $author = $row['author'];
        $body = $row['body'];
        $status = $row['status'];
        $date = $row['date'];
        $uptime = $row['uptime'];
    }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @ibn__aminu">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Kano State Polytechnic</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="vendor/assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="vendor/assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="vendor/assets/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top rounded" aria-label="Eleventh navbar example">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#">
			<h2 class="text-primary"><b>Kano State Polytechnic</b></h2>
		  </a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
  
		  <div class="collapse navbar-collapse" id="navbarsExample09">
			<ul class="navbar-nav ms-auto">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="signout">Sign Out</a>
			  </li>
			</ul>
		  </div>
		</div>
	</nav> 
	<!-- Featured articles -->
	<section class="farko p-3 mt-5">
        <center>
        <div class="col-md-7">                
		    <div class="container text-center mt-4 page-card">
                <h1 class="text-dark fw-bold text-start"><?= $title?></h1>
                <h6 class="text-primary fw-bold text-start"><?= $author?> 
                    <i class="fa fa-dot-circle-o text-primary fa-sm"></i> 
                    <?= substr($date,0,10)?>
                </h6>

                <div class="body"><?= $body; ?>  </div>
                
            </div>
        </div>
        </center>
	</section>
  </main>

<!--Footer-->
<!--/.Footer-->

    <!-- scripts -->
    <!-- jQuery -->
    <script src="vendor/assets/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/js/bootstrap.bundle.min.js"></script> 
    <script src="vendor/js/bootstrap.min.js"></script>  
    <!-- overlayScrollbars -->
    <script src="vendor/assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  </body>
</html>
