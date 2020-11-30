<?php 
include '../connection.php';
$id = base64_decode($_GET['id']);
$query = mysqli_query($db,"SELECT * FROM team WHERE id ='$id'");
$row = mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bakale Arts & Crafts Co. Ltd | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" href="../assets/img/favicon.png">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>



  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../assets/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Bakale Arts & Crafts</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/img/favicon.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Adminstratrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="services.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Services
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="team.php" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Team
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="board.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Baord Members
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="works.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Our Works
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="clients.php" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Clients
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="testimonies.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Testimonies
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="messages.php" class="nav-link">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Messages
              </p>
            </a>
          </li> 
         <li class="nav-item">
           <a href="catalogue.php" class="nav-link">
             <i class="nav-icon fas fa-book"></i>
             <p>
               Catalogue
             </p>
           </a>
         </li> 
         <li class="nav-item">
           <a href="cert.php" class="nav-link">
             <i class="nav-icon fas fa-file-contract"></i>
             <p>
               Certifications
             </p>
           </a>
         </li> 
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Team</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Team</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <!-- Default box -->
      <!-- /.card -->
      <form action="" method="POST" id="teamForm" enctype="Multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Team Member</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
               <div id="statusMsg"></div>
               <input type="hidden" name="team_id" value="<?php echo $row['id'] ?>">
              <div class="form-group row">
                <div class="col-md-6">
                <label for="inputName">Member Name</label>
                <input type="text" id="Name" name="name" value="<?php echo $row['name'] ?>" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="inputName">Member Rank</label>
                <input type="text" id="Rank" name="rank" value="<?php echo $row['rank'] ?>" class="form-control">
              </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                <label for="inputName">Twitter Handle</label>
                <input type="text" id="Twitter" name="twitter" value="<?php echo $row['twitter'] ?>" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="inputName">Facebook Handle</label>
                <input type="text" id="Facebook" name="facebook" value="<?php echo $row['facebook'] ?>" class="form-control">
              </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                <label for="inputName">Instagram Handle</label>
                <input type="text" id="Instagram" name="instagram" value="<?php echo $row['instagram'] ?>" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="inputName">Linkedn Handle</label>
                <input type="text" id="Linkedn" name="linkedn" value="<?php echo $row['linkedn'] ?>" class="form-control">
              </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                <label for="inputName">Phone Number</label>
                <input type="text" id="Phone" name="phone" value="<?php echo $row['phone'] ?>" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="inputName">Picture</label>
                <input type="file" id="file" name="file" class="form-control">
              </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update member" id="submitBtn" class="btn btn-success float-right">
        </div>
      </div>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-<?php echo date('Y'); ?>  <a href="">Bakale Arts & Crafts Co. Ltd</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Powered By</b> Bnetworks Tech Solutions
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/plugins/moment/moment.min.js"></script>
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script src="../assets/js/App.js"></script>
<script>
  var team = new App();
  team.teamList();
  $(document).ready(()=>{
    $('#teamForm').on('submit', ((e)=>{
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '../api/editTeam.php',
            data: new FormData(document.getElementById('teamForm')),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: (()=>{
              $('#submitBtn').attr("disabled", "disabled");
              $('#teamForm').css("opacity",".5");
            }), 
            success: ((response)=>{
              //console.log(response);
              $('#submitBtn').removeAttr("disabled");
              $('#teamForm').css("opacity","");
              document.getElementById('statusMsg').innerHTML=`<div class="alert alert-${response.type} col-lg-12" id="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  ${response.message}</div>`;
              setTimeout((()=>{
               team.teamList();

              }), 5000)
            })
        });
    }));
    $('#file').change(((e)=>{
        var  file = e.target.files[0];
        //console.log(file);
        var fileType = file.type;
        var match = ['image/jpeg', 'image/png', 'image/jpg'];
        if(!((fileType == match[0]) || (fileType == match[1]) || (fileType = match[2]))){
          alert('Sorry, Only PNG, JPEG, JPG file are Allowed');
          $('#file').val('');
          return false;
        }
    }));
  });
</script>
</body>
</html>
