<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a s, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4 col-lg-12">
        <!-- col-lg-10 -->
        <div class="card-header py-2">
            <!-- <h6 href="#" class="btn btn-primary m-0 font-weight-bold text-light">Tambah Pengguna</h6> -->
            <a href="<?= base_url('alternatif/tambahAlternatif'); ?>" class="btn btn-primary btn-icon-split">
                <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
            <?php if ($this->session->flashdata()) : ?>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data alternatif <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="text-align: center">
                        <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($alternatif as $alter) { ?>
                            <tr>
                                <td style="text-align: center"><?= $no++; ?></td>
                                <td><?= $alter['nama_alternatif']; ?></td>
                                <td style="text-align: center">
                                    <!-- <a href="" class="btn btn-success btn-icon-split">
                                    <span class="fas fa-edit"> Ubah</span>
                                </a> -->
                                    <a href="<?= base_url(); ?>alternatif/ubahAlternatif/<?= $alter['id_alternatif']; ?>" class="btn btn-success btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </a>

                                    <a href="<?= base_url(); ?>alternatif/hapusAlternatif/<?= $alter['id_alternatif']; ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin mau dihapus?');">
                                        <span class="icon">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>Lh heh</td>
                                <td style="text-align: center">

                                    <a href="" class="btn btn-success btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </a>
                                    <a href="" class="btn btn-danger btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                            </tr> -->
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