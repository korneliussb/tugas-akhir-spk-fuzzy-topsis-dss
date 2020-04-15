<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <input type="hidden" name="id_alternatif" value="<?= $alternatif['id_alternatif']; ?>">
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Nama Alternatif</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" value=" <?= $alternatif['nama_alternatif']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama_alternatif'); ?></small>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-8 col-lg-10 d-flex justify-content-between">

                        <a href="<?= base_url('alternatif'); ?>" class="btn btn-info btn-icon-split">
                            <span class="icon">
                                <i class="fas fa-fw fa-chevron-circle-left"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                        <button name="ubahAlternatif" type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon">
                                <i class="fas fa-fw fa-save"></i>
                            </span>
                            <span class="text">Simpan</span>
                        </button>
                        <!-- <a href="" class="btn btn-success btn-icon-split" type="submit">
                            <span class="icon">
                                <i class="fas fa-fw fa-save"></i>
                            </span>
                            <span class="text">Simpan</span>
                        </a> -->
                    </div>
                </div>
            </form>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->