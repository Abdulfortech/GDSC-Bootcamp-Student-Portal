<?php include 'auth.php';?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @Abdulfortech">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Student Portal App | CRFs</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
    <link rel="stylesheet" href="vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="vendor/DataTables/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendor/DataTables/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
    <?php include 'navbar.php';?>
    <section class="farko p-3 mt-5">
        <center>
        <div class="col-md-6">              
            <div class="container text-center mt-5 page-card">
                <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">Add Picture</span></h1>

                <form method="POST" action="process.php" enctype="multipart/form-data">
                    <input type="text" value="<?= $studentid?>" name="studentid" hidden>
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="floatingInput">Picture</label>
                                <input type="file" class="form-control" name="picture" required>
                            </div>
                            <div class="col-md-12">
                                <label for="floatingInput">Description</label>
                                <input type="text" class="form-control" name="description" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-success mt-4" type="submit" name="addGallery">Save</button>
                </form>

            </div>
        </div>
        </center>
    </section>
    
	<section class="farko p-3 mt-5">
    <center>
    <h1 class="featurette-heading fw-bold mb-5 text-success">My Pictures</span></h1>
        <div class="container text-center mt-0 p-0">
			<div class="row">
                <?php
                    $gallery = $conn->query("SELECT * FROM gallery ") or die($conn->error);
                    foreach($gallery as $picture)
                    {
                ?>
				<div class="col-md-4  mb-3">
					<a href="#" class="text-decoration-none">
						<div class="card shadow border-bottom-success gallery" style="border-radius: 10px">
                            <img src="<?= $picture['picture']?>" alt="ssssss">
							<div class="card-body p-3 text-success">
								<p><?= $picture['description']?></p>
                                
							</div> 
						</div>
					</a>
				</div>
                <?php
                    }
                ?>
            </div>
        </div>
      </center>
	</section>
	<!-- PROJECT HIRING -->
  </main>

<!--Footer-->

<!--Footer-->
    <?php include 'footer.php';?>
<!--/.Footer-->

<!-- scripts -->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendor/Bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/Bootstrap/js/bootstrap.min.js"></script>  
<!-- lga plugin -->
<script src="vendor/lga/lga.min.js"></script>
<!-- overlayScrollbars -->
<script src="vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
  <?php if (isset($_SESSION['msg'])) { $msg = $_SESSION['msg'];?>
  <script type="text/javascript">
      $(document).ready(function() {
          $.notify({
          title: "<b>Alert :</b>",
          message: "<?= $msg?>",
          icon: 'fa fa-bell',
          type: "info"
          });
      });
  </script>
  <?php  unset($_SESSION['msg']); }?>
      
  </body>
</html>
