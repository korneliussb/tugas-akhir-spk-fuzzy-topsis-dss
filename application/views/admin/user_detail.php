<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <!-- <?= $this->session->flashdata('flash'); ?> -->
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $pengguna['nama_user']; ?></h5>
                    <p class="card-text"><em><?= $pengguna['email']; ?></em></p>
                    <p class="card-text"><?php if ($pengguna['jenis_kelamin'] == 1) {
                                                echo 'Laki-laki';
                                            } elseif ($pengguna['jenis_kelamin'] == 2) {
                                                echo 'Perempuan';
                                            } ?></p>
                    <p class="card-text"><?= $pengguna['instansi']; ?></p>
                    <!-- <p class="card-text"><small class="text-muted">Terakhir login sejak <?= $pengguna['last_login']; ?></small></p> -->
                    <p class="card-text"><small class="text-muted">Menjadi member sejak <?= $pengguna['last_login']; ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->