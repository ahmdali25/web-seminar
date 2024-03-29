<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registrasi</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
                  </div>

                  <form class="user" action="<?= base_url('auth/input_registrasi'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="name" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Daftar sebagai</label>
                        <select id="inputState" class="form-control" name="level_akses">
                            <option selected>Choose...</option>
                            <option value="1">Admin</option>
                            <option value="2">Penyelenggara Seminar</option>
                            <option value="3">Peserta Seminar</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block">Lanjut</button>
                  </form>

                  <hr>
                  <div class="text-center text-decoration-none">
                    <a class="small" href="<?= base_url('auth/lupa_password'); ?>">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth'); ?>">Sudah Punya Akun? Login Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.js'); ?>"></script>

</body>

</html>
