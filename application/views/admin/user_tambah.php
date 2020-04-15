<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-8">

            <!-- <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?> -->

            <form action="<?= base_url('user/tambahUser'); ?>" method="post">
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label"><em>Email</em></label>
                    <div class="col-sm-7">
                        <input type="text" name="email" class="form-control" id="email" value="">
                        <!-- kalo ditambah required akan keluar Isi Isian ini-->
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_user" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-7">
                        <input type="text" name="nama_user" class="form-control" id="nama_user" value="">
                        <small class="form-text text-danger"><?= form_error('nama_user'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label"><em>Username</em></label>
                    <div class="col-sm-7">
                        <input type="text" name="username" class="form-control" id="username" value="">
                        <small class="form-text text-danger"><?= form_error('username'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label"><em>Password</em></label>
                    <div class="col-sm-7">
                        <input type="password" name="password" class="form-control" id="password">
                        <!-- value="<?= set_value('password'); ?>" perlu kah ini?-->
                        <small class="form-text text-danger"><?= form_error('password'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hak_akses" class="col-sm-3 col-form-label">Hak Akses</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="hak_akses">
                            <option <?php if (set_value('hak_akses') == 1) : ?> <?php echo "selected"; ?> <?php endif ?> value="1">Admin</option>
                            <option <?php if (set_value('hak_akses') == 2) : ?> <?php echo "selected"; ?> <?php endif ?> value="2">Manajer</option>
                        </select>

                        <!-- <option <?php set_value('hak_akses') == 1 ?> <?php echo "selected"; ?> value="1">Admin</option> -->


                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="instansi" class="col-sm-3 col-form-label">Instansi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="instansi" name="instansi">
                        <small class="form-text text-danger"><?= form_error('instansi'); ?></small>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 col-lg-10 d-flex justify-content-between">
                        <!-- <div class="col-sm-3">

                    </div> -->
                        <a href="<?= base_url('user'); ?>" class="btn btn-info btn-icon-split">
                            <span class="icon">
                                <i class="fas fa-fw fa-chevron-circle-left"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>


                        <button name="tambahUser" type="submit" class="btn btn-success btn-icon-split">
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