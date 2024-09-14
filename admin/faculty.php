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
	<title>Mobilizing App - Faculties</title>
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
    <?php include 'navbar.php';
        if($_GET){
            $facultyid = $_GET['id'];
        }elseif (isset($_POST['id'])) {
            $facultyid = $_POST['id'];
        }else{
            header("Location:faculties");
        }
          $facultyINFOR = $conn->query("SELECT * FROM faculties WHERE faculty_id='".$facultyid."' ") or die($conn->error);
          while ($row = $facultyINFOR->fetch_assoc()) {
            $title = $row['facultyTitle'];
            $code = $row['facultyCode'];
            $status = $row['status'];
          }
    ?>
	<!-- Featured articles -->
	<section class="farko p-3 mt-5">
        <center>
        <div class="col-md-5">    
                        
		    <div class="container text-center mt-4 page-card">
            <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">Edit <span class="text-color2">Faculty</span></h1>
            <form method="POST" action="process.php">
                <input type="text" value="<?= $facultyid?>" name="id" hidden>
                <div class="form-group text-start">
                    <label for="floatingInput">Faculty Title</label>
                    <input type="text" class="form-control" value="<?= $title?>" name="name">
                </div>
                <div class="form-group text-start mb-5">
                    <label for="floatingInput">Faculty Code</label>
                    <input type="text" class="form-control" value="<?= $code?>" name="code" readonly>
                </div>
                <button class="w-100 btn btn-lg btn-success" type="submit" name="editFaculty">Save Faculty</button>
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
