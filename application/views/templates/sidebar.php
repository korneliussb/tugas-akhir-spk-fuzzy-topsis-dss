<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SPK - FT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <!-- Heading -->
    <div class="sidebar-heading text-light">
        <?php if ($this->session->userdata('hak_akses') == 1) { ?>
            Admin
        <?php } else if ($this->session->userdata('hak_akses') == 2) { ?>
            Manajer
        <?php } ?>
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Beranda</span></a>


    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Pengaturan
      </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="<?= base_url('user'); ?>">Pengguna</a>
                <a class="collapse-item" href="<?= base_url('alternatif'); ?>">Alternatif</a>
                <a class="collapse-item" href="<?= base_url('nilaibobotkriteria'); ?>">Nilai Bobot Kriteria</a>
                <a class="collapse-item" href="<?= base_url('peta'); ?>">Peta</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Kriteria</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                <a class="collapse-item" href="<?= base_url('fuzzymember'); ?>">Data Nilai <em>Fuzzy</em></a>
                <a class="collapse-item" href="<?= base_url('kriteria'); ?>">Data Nilai Kriteria</a>
                <!-- <a class="collapse-item" href="<?= base_url('kriteria1'); ?>">Data Kriteria 1</a>
                <a class="collapse-item" href="<?= base_url('kriteria2'); ?>">Data Kriteria 2</a>
                <a class="collapse-item" href="<?= base_url('kriteria3'); ?>">Data Kriteria 3</a>
                <a class="collapse-item" href="<?= base_url('kriteria4'); ?>">Data Kriteria 4</a>
                <a class="collapse-item" href="<?= base_url('kriteria5'); ?>">Data Kriteria 5</a>
                <a class="collapse-item" href="<?= base_url('kriteria6'); ?>">Data Kriteria 6</a>
                <a class="collapse-item" href="<?= base_url('kriteria7'); ?>">Data Kriteria 7</a> -->
            </div>
        </div>
    </li>
    <!-- Fuzzy TOPSIS menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-calculator"></i>
            <span>Fuzzy TOPSIS</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                <!-- <a class="collapse-item" href="<?= base_url('fuzzytopsis/terbobot'); ?>"><strong>Terbobot</strong></a>
                <a class="collapse-item" href="<?= base_url('fuzzytopsis/ternormalisasi'); ?>"><strong>Ternormalisasi</strong></a>
                <a class="collapse-item" href="<?= base_url('fuzzytopsis/fpisfnis'); ?>"><strong>FPIS dan FNIS</strong></a>
                <a class="collapse-item" href="<?= base_url('fuzzytopsis/di'); ?>"><strong>di <sup>*</sup> dan di <sup>-</sup></strong></a>
                <a class="collapse-item" href="<?= base_url('fuzzytopsis/cci'); ?>"><strong>Koefisiensi Terdekat</strong></a> -->

                <a class="collapse-item" href="<?= base_url('Fuzzytopsis/Hitung'); ?>"><strong>Terbobot</strong></a>
                <a class="collapse-item" href="<?= base_url('Fuzzytopsis/Hitung/ternormalisasi'); ?>"><strong>Ternormalisasi</strong></a>
                <a class="collapse-item" href="<?= base_url('Fuzzytopsis/Hitung/fpisfnis'); ?>"><strong>FPIS dan FNIS</strong></a>
                <a class="collapse-item" href="<?= base_url('Fuzzytopsis/Hitung/distance'); ?>"><strong>di <sup>*</sup> dan di <sup>-</sup></strong></a>
                <a class="collapse-item" href="<?= base_url('Fuzzytopsis/Hitung/cci'); ?>"><strong>Koefisiensi Terdekat</strong></a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->