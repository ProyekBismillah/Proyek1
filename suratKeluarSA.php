<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ARSIP SURAT</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="indexSA.php">ARSIP SURAT</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <!-- <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div> -->
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <!-- <li class="xn-openable">
          <a style="color: white;">Hallo, 
            <?php session_start();
            echo $_SESSION['user']; ?></a>
      </li> -->
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <!-- <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="indexSA.php">
          <i class="fas fa-fw fa-home"></i>
          <span>BERANDA</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="suratMasukSA.php">
          <i class="fas fa-fw fa-archive"></i>
          <span>SURAT MASUK</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="suratKeluarSA.php">
          <i class="fas fa-fw fa-archive"></i>
          <span>SURAT KELUAR</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="disposisiSA.php">
          <i class="fas fa-fw fa-file-archive"></i>
          <span>DISPOSISI</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pengaturanSA.php">
          <i class="fas fa-fw fa-sync"></i>
          <span>PENGATURAN</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dataAdmin.php">
          <i class="fas fa-fw fa-address-book"></i>
          <span>DATA ADMIN</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="indexSA.php">Beranda</a>
          </li>
          <li class="breadcrumb-item active">Surat Keluar</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-archive"></i>
            Data Surat Keluar</div>
            <!-- <div class = "btn-group pull-right"> -->
              <a style="margin-left: 890px; margin-top: 25px" class ="col-xl-2 btn btn-info" href="tambahSKSA.php">
                <i class = "fa fa-plus">
                  <!-- ::before -->
                </i>
                Tambah Surat
              </a>
              <!-- <a style="margin-left: 890px; margin-top: 5px" class ="col-xl-2 btn btn-info" href="cetakSMSA.php">
                <i class = "fa fa-print">
                   ::before
                </i>
                CETAK SURAT
              </a> 
           </div> -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No. Urut</th>
                    <th>Tanggal Surat</th>
                    <th>Kode Agenda</th>
                    <th>No. Surat</th>
                    <th>Jenis Surat</th>
                    <th>Pengirim</th>
                    <th>Perihal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php
                    include 'koneksi.php';
                    $a = mysqli_query($kon, "SELECT * FROM surat_keluar");
                    $no =1;
                    while($b = mysqli_fetch_array($a)){
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $b['tanggal_surat']; ?></td>
                    <td><?php echo $b['kode_agenda']; ?></td>
                    <td><?php echo $b['nomor_surat']; ?></td>
                    <td><?php echo $b['jenis_surat']; ?></td>
                    <td><?php echo $b['pengirim']; ?></td>
                    <td><?php echo $b['perihal']; ?></td>
                    <td><a class="badge badge-success" href = "editSKSA.php?no=<?php echo $b['id_keluar'];?>">Edit</a>
                    <!-- <a class="badge badge-info" href = "cetakSK.php?no=<?php echo $b['id_keluar'];?>">Cetak</a> -->
                  <a class="badge badge-danger" href = "hapusSKSA.php?no=<?php echo $b['id_keluar'];?>">Hapus</a></td>
                  </tr>
                  <?php
                  $no++;
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Alya Diana Umami</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
