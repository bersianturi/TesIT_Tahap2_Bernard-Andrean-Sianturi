<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo justify-content-center">
                    <a href="index.html" class="app-brand-link py-8">
                        <span class="app-brand-logo demo">
                            <img src="<?= base_url('assets') ?>/img/logo.png" height="40" alt="Logo">
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
                    </a>
                </div>

                <div class="menu-divider mt-0"></div>

                <div class="menu-inner-shadow"></div>


                <ul class="menu-inner py-1">
                    <li class="menu-item <?php if ($title === "Dashboard") {
                                                echo 'active';
                                            } ?>">
                        <a href="<?= base_url() ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                            <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item <?php if ($title === "Data Pasien" || $title === "Tambah Pasien Baru") {
                                                echo 'active';
                                            } ?>">
                        <a href="<?= base_url('pasien') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div class="text-truncate" data-i18n="Data Pasien">Data Pasien</div>
                        </a>
                    </li>
                    <li class="menu-item <?php if ($title === "Rawat Jalan" || $title === "Pendaftaran Rawat Jalan") {
                                                echo 'active';
                                            } ?>">
                        <a href="<?= base_url('rawat-jalan') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-handicap"></i>
                            <div class="text-truncate" data-i18n="Rawat Jalan">Rawat Jalan</div>
                        </a>
                    </li>
                    <li class="menu-item <?php if ($title === "Riwayat Rawat Jalan") {
                                                echo 'active';
                                            } ?>">
                        <a href="<?= base_url('riwayat') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-time"></i>
                            <div class="text-truncate" data-i18n="Riwayat Rawat Jalan">Riwayat Rawat Jalan</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav
                    class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="icon-base bx bx-menu icon-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a
                                    class="nav-link dropdown-toggle hide-arrow p-0"
                                    href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="<?= base_url('assets/img/profile.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="<?= base_url('assets/img/profile.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0"><?= $this->session->userdata('name'); ?></h6>
                                                    <small class=" text-body-secondary">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url('logout') ?>">
                                            <i class="icon-base bx bx-power-off icon-md me-3"></i><span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->