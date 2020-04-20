<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST">
                <div class="form-group row">
                    <!-- komen dikit -->
                    <!-- <label class="col-sm-2 col-form-label">ID Alternatif</label> -->
                    <div class="col-sm-4">
                        <input type="hidden" class="form-control form-control-round" name="id_alternatif" readonly="readonly" value="<?= $gen; ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="" class="col-sm-4 col-form-label">Nama Alternatif</label>
                    <div class="col-sm-6">
                        <!--5-->
                        <input type="text" class="form-control" required placeholder="Masukkan nama alternatif ..." name="nama_alternatif" value="">
                        <!-- <input type="hidden" name="id_alternatif" value="<?= $row->id_alternatif; ?>"> -->
                    </div>
                </div>

                <div class="form-group row">
                    <?php foreach ($form as $row) : ?>
                        <label for="k1" class="col-sm-4 col-form-label"><?= $row->nama_kriteria; ?></label>
                        <div class="col-sm-6">
                            <select class="form-control" id="" name="id_aspek_teknik-<?= $row->id_kriteria ?>">
                                <?php foreach ($intervals as $item) : if ($item->id_kriteria != $row->id_kriteria) {
                                        continue;
                                    } ?>
                                    <option value="<?= $item->nilai_kriteria; ?>">
                                        (<?= $item->nilai_kriteria; ?>) <?= $item->nilai_interval; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?= "<div><h5></h5></div>" ?>
                        </div>
                    <?php endforeach; ?>
                </div>


                <div class="form-group row">
                    <div class="col-md-8 col-lg-10 d-flex justify-content-between">
                        <!--lg-9-->

                        <a href="<?= base_url('alternatif'); ?>" class="btn btn-info btn-icon-split">
                            <span class="icon">
                                <i class="fas fa-fw fa-chevron-circle-left"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>

                        <button name="nambahAlternatif" value="nambahAlternatif" type="submit" class="btn btn-success btn-icon-split">
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