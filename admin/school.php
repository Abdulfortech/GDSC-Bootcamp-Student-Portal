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
	<title>Mobilizing App - School Information</title>
	<!-- Favicon -->
	<!-- <link rel="icon" href="img/sgr.png" type="image/png"> -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="../vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome -->
	<link href="../vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- overlayScrollbars -->
    <link rel="stylesheet" href="../vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendor/datatables/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Custom styles for this template -->
	<link href="../css/style.css" rel="stylesheet">
</head>
<body>
    
  <main>
	<!-- Navigation bar -->
	<?php include 'navbar.php';?>
	<!-- Featured articles -->
	<section class="farko p-3 mt-5">
        <center>
        <div class="col-md-6">    
                        
		    <div class="container text-center mt-4 page-card">
            <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">School <span class="text-color2">Information</span></h1>
            <form method="POST" action="process.php">
                <input type="text" value="<?= $accountid?>" name="id" hidden>
                <div class="form-group text-start">
                    <label for="floatingInput">School Name</label>
                    <input type="text" class="form-control" id="floatingInput" value="<?= $schName?>" name="name">
                </div>
                <div class="form-group text-start">
                    <label for="floatingInput">School Moto</label>
                    <input type="reg" class="form-control" value="<?= $schMoto?>" name="moto">
                </div>
                <div class="form-group text-start">
                    <label for="floatingInput">School Category</label>
                    <select class="form-control" id="floatingInput" name="category">
                        <option><?= $schCategory?></option>
                        <option>University</option>
                        <option>Polytechnic</option>
                        <option>College</option>
                    </select>
                </div>
                <div class="form-group text-start">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="floatingInput">School E-mail</label>
                            <input type="text" class="form-control" value="<?= $schEmail?>" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="floatingInput">School Phone</label>
                            <input type="number" class="form-control" value="<?= $schPhone?>" name="phone">
                        </div>
                    </div>
                </div>
                <div class="form-group text-start">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="floatingInput">School Address</label>
                            <input type="text" class="form-control" value="<?= $schAddress?>" name="address">
                        </div>
                        <div class="col-md-6">
                            <label for="floatingInput">School City</label>
                            <input type="text" class="form-control" value="<?= $schCity?>" name="city">
                        </div>
                        <div class="col-md-6">
                            <label for="floatingInput">School Country</label>
                            <select class="form-control" id="floatingInput" name="country">
                                <option><?= $schCountry?></option>
                                <option>Nigeria</option>
                                <option>Niger</option>
                                <option>Ghana</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group text-start mb-5">
                    <label for="floatingInput">School Website</label>
                    <input type="text" class="form-control" value="<?= $schWebsite?>" name="website">
                </div>

                <button class=" btn btn-lg btn-success" type="submit" name="editSchool">Save</button>
            </form>
            </div>
        </div>
        </center>
	</section>
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
    <!-- DataTables -->
    <script src="../vendor/datatables/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendor/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendor/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
    </script>
  </body>
</html>
