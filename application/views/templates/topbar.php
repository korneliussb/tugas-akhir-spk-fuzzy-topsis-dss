<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- <h1 class="h3 mt-1 mb-1 ml-2 text-gray-800"><?= $title; ?></h1> -->

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">

                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-800 small"><?= $user['nama_user']; ?></span>
                        <!-- <?= $user['nama_user']; ?> -->
                        <!-- <i class="fas fa-fw fa-user rounded-circle"></i> -->
                        <img class="img-profile rounded-circle" src=" <?= base_url('assets/img/profile/default.jpg'); ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url(); ?>user/detailUser/<?= $user['user_id']; ?>">
                            <!-- <a class="dropdown-item" href="<?= base_url('user/detailUser'); ?>"> -->
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-800"></i>
                            Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-800"></i>
                            Keluar
                        </a>
                        <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a> -->
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->