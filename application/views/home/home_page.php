<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $judul; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">

</head>  
<body>
  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>

    <?php if($this->session->userdata('login') == 1): ?>
<!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('nama'); ?></span>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?= base_url('dashboard');?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Dashboard
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>
    <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth'); ?>">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= "Login" ?></span>
        </a>
      </li>
    <?php endif; ?>

    
  </ul>
  </nav>
  <!-- End of Topbar -->

	<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Seminar Aja</h1>
      <p class="lead text-muted">Temukan seminar yang sesuai dengan minat Anda di sini.</p>
    </div>
  </section>

    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <section class="card mb-4 shadow-sm" style="width: 18rem;">
                <img src="<?= base_url('assets/img/template_poster2.jpg'); ?>" alt="img poster" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <!-- <h5 class="card-title">Judul Seminar</h5> -->
                    <a href="#" class="card-title text-decoration-none">Judul Seminar</a>
										<p class="card-text">Beberapa informasi</p>
										<div class="d-flex justify-content-between align-item-center">
											<div class="btn-group">
												<a href="#" class="btn btn-sm btn-outline-secondary">Lihat Selengkapnya</a>
											</div>
											<small class="text-muted">9 mins</small>
										</div>
                </div>
            </section>
				</div>    
				
				<div class="col-md-4">
            <section class="card mb-4 shadow-sm" style="width: 18rem;">
                <img src="<?= base_url('assets/img/template_poster2.jpg'); ?>" alt="img poster" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <!-- <h5 class="card-title">Judul Seminar</h5> -->
                    <a href="#" class="card-title text-decoration-none">Judul Seminar</a>
										<p class="card-text">Beberapa informasi</p>
										<div class="d-flex justify-content-between align-item-center">
											<div class="btn-group">
												<a href="#" class="btn btn-sm btn-outline-secondary">Lihat Selengkapnya</a>
											</div>
											<small class="text-muted">9 mins</small>
										</div>
                </div>
            </section>
				</div>    
				
				<div class="col-md-4">
            <section class="card mb-4 shadow-sm" style="width: 18rem;">
                <img src="<?= base_url('assets/img/template_poster2.jpg'); ?>" alt="img poster" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <!-- <h5 class="card-title">Judul Seminar</h5> -->
                    <a href="#" class="card-title text-decoration-none">Judul Seminar</a>
										<p class="card-text">Beberapa informasi</p>
										<div class="d-flex justify-content-between align-item-center">
											<div class="btn-group">
												<a href="#" class="btn btn-sm btn-outline-secondary">Lihat Selengkapnya</a>
											</div>
											<small class="text-muted">9 mins</small>
										</div>
                </div>
            </section>
				</div>    
				
				<div class="col-md-4">
            <section class="card mb-4 shadow-sm" style="width: 18rem;">
                <img src="<?= base_url('assets/img/template_poster2.jpg'); ?>" alt="img poster" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <!-- <h5 class="card-title">Judul Seminar</h5> -->
                    <a href="#" class="card-title text-decoration-none">Judul Seminar</a>
										<p class="card-text">Beberapa informasi</p>
										<div class="d-flex justify-content-between align-item-center">
											<div class="btn-group">
												<a href="#" class="btn btn-sm btn-outline-secondary">Lihat Selengkapnya</a>
											</div>
											<small class="text-muted">9 mins</small>
										</div>
                </div>
            </section>
				</div>    
				
				<div class="col-md-4">
            <section class="card mb-4 shadow-sm" style="width: 18rem;">
                <img src="<?= base_url('assets/img/template_poster2.jpg'); ?>" alt="img poster" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <!-- <h5 class="card-title">Judul Seminar</h5> -->
                    <a href="#" class="card-title text-decoration-none">Judul Seminar</a>
										<p class="card-text">Beberapa informasi</p>
										<div class="d-flex justify-content-between align-item-center">
											<div class="btn-group">
												<a href="#" class="btn btn-sm btn-outline-secondary">Lihat Selengkapnya</a>
											</div>
											<small class="text-muted">9 mins</small>
										</div>
                </div>
            </section>
				</div>    
				
				<div class="col-md-4">
            <section class="card mb-4 shadow-sm" style="width: 18rem;">
                <img src="<?= base_url('assets/img/template_poster2.jpg'); ?>" alt="img poster" class="bd-placeholder-img card-img-top">
                <div class="card-body">
                    <!-- <h5 class="card-title">Judul Seminar</h5> -->
                    <a href="#" class="card-title text-decoration-none">Judul Seminar</a>
										<p class="card-text">Beberapa informasi</p>
										<div class="d-flex justify-content-between align-item-center">
											<div class="btn-group">
												<a href="#" class="btn btn-sm btn-outline-secondary">Lihat Selengkapnya</a>
											</div>
											<small class="text-muted">9 mins</small>
										</div>
                </div>
            </section>
        </div>    
        </div>
    </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin akan logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" untuk keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-info" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.js'); ?>"></script>

  </body>
</html>
