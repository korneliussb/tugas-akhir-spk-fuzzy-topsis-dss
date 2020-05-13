<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> <em>(Fuzzy Number)</em></h1>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a s, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <!-- col-lg-11 -->
    <div class="card shadow mb-4 col-lg-12 col-md-5">
        <?php if ($this->session->flashdata()) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data nilai bobot kriteria <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align: center">
                            <th>No</th>
                            <th>Nama Kriteria</th>
                            <th>Nilai Bobot</th>
                            <th>Nilai Bobot</th>
                            <th>Nilai Bobot</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($AllBobot as $bbt) { ?>
                            <tr>
                                <td style="text-align: center"><?= $bbt['id_kriteria']; ?></td>
                                <td><?= $bbt['nama_kriteria']; ?></td>
                                <td style="text-align: center"><?= $bbt['nilai_bobot1']; ?></td>
                                <td style="text-align: center"><?= $bbt['nilai_bobot2']; ?></td>
                                <td style="text-align: center"><?= $bbt['nilai_bobot3']; ?></td>
                                <td style="text-align: center">
                                    <!-- <a href="" class="btn btn-success btn-icon-split">
                                    <span class="fas fa-edit"> Ubah</span>
                                </a> -->
                                    <a href="<?= base_url(); ?>nilaibobotkriteria/ubahBobot/<?= $bbt['id_kriteria']; ?>" class="btn btn-success btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->