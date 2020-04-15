<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?><em> (Fuzzy Number)</em></h1>

    <div class="row">
        <div class="col-md-10">
            <form action="" method="post">
                <div class="form-group row">
                    <input type="hidden" name="id_kriteria" value="<?= $bobot['id_kriteria']; ?>">
                    <!-- <input type="hidden" name="nama_kriteria" value="<?= $bobot['nama_kriteria']; ?>"> -->
                    <!-- Juga bisa tanpa nama kriteria -->
                    <label for="gender" class="col-sm-4 col-form-label"><?= $bobot['nama_kriteria']; ?></label>
                    <div class="col-sm-2">
                        <input class="form-control" type="number" name="nilai_bobot1" placeholder="1.0" step="0.01" min="0" max="1" name="" value="<?= $bobot['nilai_bobot1']; ?>">
                        <small class="form-text text-danger"><?= form_error('nilai_bobot1'); ?></small>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-control" type="number" name="nilai_bobot2" placeholder="1.0" step="0.01" min="0" max="1" name="" value="<?= $bobot['nilai_bobot2']; ?>">
                        <small class="form-text text-danger"><?= form_error('nilai_bobot2'); ?></small>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-control" type="number" name="nilai_bobot3" placeholder="1.0" step="0.01" min="0" max="1" name="" value="<?= $bobot['nilai_bobot3']; ?>">
                        <small class="form-text text-danger"><?= form_error('nilai_bobot3'); ?></small>
                    </div>
                </div>

                <div><br></div>

                <div class="form-group row">
                    <div class="col-md-8 col-lg-10 d-flex justify-content-between">

                        <a href="<?= base_url('nilaibobotkriteria'); ?>" class="btn btn-info btn-icon-split">
                            <span class="icon">
                                <i class="fas fa-fw fa-chevron-circle-left"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                        <button name="ubahBobot" type="submit" class="btn btn-success btn-icon-split">
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