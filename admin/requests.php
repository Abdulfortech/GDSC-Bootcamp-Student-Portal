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
	<title>Mobilizing App - Mobilization Applications</title>
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
        <div class="col-md-10">    
		    <div class="container text-center mt-4 page-card">
            <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">Mobilization <span class="text-color2"> Applications </span></h1>
                
            <table id="example1" class="table table-bordered table-striped text-start">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Student Name</th>
                            <th>Reg No.</th>
                            <th>Current JAMB No.</th>
                            <th>Course</th>
                            <th>Class</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 1;
                            foreach($requestsAll as $info){
                        ?>
                        <tr>
                            <td><?= $count; ?></td>
                            <td><?= $info['fname']." ". $info['lname'];?></td>
                            <td><?= $info['reg']?></td>
                            <td><?= $info['cjamb']?></td>
                            <td><?= $info['course']?></td>
                            <td><?= $info['class']?></td>
                            <td>
                                <?php 
                                    if ($info['status'] == 1) {echo '<span class="badge bg-primary badge-pill">Active</span>';}
                                    elseif($info['status'] == 2) {echo '<span class="badge bg-info badge-pill">Reviewing</span>';}
                                    elseif($info['status'] == 3) {echo '<span class="badge bg-success badge-pill">Approved</span>';}
                                    else{echo '<span class="badge bg-danger badge-pill">Rejected</span>';}
                                ?>
                                
                            </td>
                            <td>
                                <a href="request-single?id=<?= $info['request_id']?>" class="btn btn-sm btn-success shadow-sm">
                                    <i class="fa fa-eye fa-sm text-white"></i>
                                </a>
                            </td>
                            
                        </tr>
                        <?php $count++;}?>
                    </tbody>
                </table>
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
