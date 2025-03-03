<!doctype html>

<html
  lang="en"
  class="layout-wide customizer-hide"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title><?= $title ?> | RSU Sakina Idaman</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/img/icon.jpg" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/fonts/iconify-icons.css" />

  <!-- Core CSS -->
  <!-- build:css assets/vendor/css/theme.css  -->

  <link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/css/core.css" />
  <link rel="stylesheet" href="<?= base_url('assets') ?>/css/demo.css" />

  <!-- Vendors CSS -->

  <link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- endbuild -->

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/css/pages/page-auth.css" />

  <!-- Helpers -->
  <script src="<?= base_url('assets') ?>/vendor/js/helpers.js"></script>

  <script src="<?= base_url('assets') ?>/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="d-flex justify-content-center mb-6">
          <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" height="50">
        </div>
        <div class="card px-sm-6 px-0">
          <div class="card-body">

            <h4 class="mb-1">Selamat Datang!</h4>
            <p class="mb-6">Silahkan masuk dengan akun yang sudah dibuat</p>
            <?= $this->session->flashdata('message') ?>
            <form id="formAuthentication" class="mb-6" action="<?= base_url('login') ?>" method="POST">
              <div class="mb-6">
                <label for="email" class="form-label">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Masukan email"
                  value="<?= set_value('email') ?>"
                  autofocus />
                <?= form_error('email') ?>
              </div>
              <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
                </div>
                <?= form_error('password') ?>
              </div>
              <div class="mb-6">
                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->

  <!-- Core JS -->

  <script src="<?= base_url('assets') ?>/vendor/libs/jquery/jquery.js"></script>

  <script src="<?= base_url('assets') ?>/vendor/libs/popper/popper.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/js/bootstrap.js"></script>

  <script src="<?= base_url('assets') ?>/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?= base_url('assets') ?>/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->

  <script src="<?= base_url('assets') ?>/js/main.js"></script>

  <!-- Page JS -->
</body>

</html>