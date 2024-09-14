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
	<title>Mobilizing App - Classes</title>
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
                <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">Add 
                    <span class="text-color2">New Class</span>
                </h1>
                <form method="POST" action="process.php">
                    <div class="form-group text-start">
                        <div class="row">
                            <div class="col-md-6">
                                <label >Class Title</label>
                                <input type="text" class="form-control"name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="floatingInput">Class Code</label>
                                <?php
                                    // generating code
                                    $date = substr(date("his"),0,4); $m = date("m"); $y = date("y");
                                    $ran = mt_rand(1, $date); $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
                                    $code = 'CLS/'.$y.'/'.$ran. $rand;
                                ?>
                                <input type="text" class="form-control" value="<?= $code?>" name="code" readonly>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-md mt-3 btn-success" type="submit" name="addClass">Add Class</button>
                </form>


                <h1 class="featurette-heading fw-bold mt-4 mb-5 text-success">All <span class="text-color2">Classes</span></h1>
                
                <table id="example1" class="table table-bordered table-striped text-start">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Class Title</th>
                            <th>Class Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $classes = $conn->query("SELECT * FROM classes WHERE status=1  ORDER BY class_id DESC") or die($conn->error);
                            $count = 1;
                            foreach($classes as $class){
                        ?>
                        <tr>
                            <td><?= $count; ?></td>
                            <td><?= $class['title']?></td>
                            <td><?= $class['code']?></td>
                            <td>
                                <?php if($class['status'] == 1){echo '<span class="badge bg-success badge-pill">Active</span>';}
                                    else{echo '<span class="badge bg-warning badge-pill">Inactive</span>';}?>
                            </td>
                            <td>
                                <a href="class?id=<?= $class['class_id']?>" class="btn btn-sm btn-success shadow-sm">
                                    <i class="fa fa-edit fa-sm text-white"></i>
                                </a>
                                <a href="process.php?action=DeleteClass&id=<?= $class['class_id']?>" class="btn btn-sm btn-danger shadow-sm">
                                    <i class="fa fa-trash fa-sm text-white"></i>
                                </a>  
                            </td>
                            
                        </tr>
                        <?php $count++;}?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Class Title</th>
                            <th>Class Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
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
      <script src="../vendor/js/bootstrap.bundle.min.js"></script> 
      <script src="../vendor/js/bootstrap.min.js"></script>  
      <!-- overlayScrollbars -->
      <script src="../vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="../vendor/bootstrap-notify-3/dist/bootstrap-notify.min.js"></script>
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
