<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

    <title>Hello, world!</title>
  </head>
  <body>

    <?php if($this->session->userdata('login') == 0): ?>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">Beranda</a>
        <a href="<?= base_url('auth'); ?>" class="btn btn-outline-dark">Login</a>
    </nav>
    <?php else: ?>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">Beranda</a>
        <a href="<?= base_url('dashboard'); ?>" class="text-decoration-none"><?= $this->session->userdata('nama'); ?></a>
    </nav>
    <?php endif; ?>

		<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Seminar Aja</h1>
      <p class="lead text-muted">Temukan seminar yang sesuai dengan minat Anda di sini.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>