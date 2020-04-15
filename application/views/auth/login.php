<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                                </div>
                                <?= $this->session->flashdata('flash'); ?>
                                <form class="user" method="post" action="">
                                    <!--Memanggil method default UP bisa pake name di submit-->
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email . . ." value="">
                                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <small class="form-text text-danger"><?= form_error('password'); ?></small>
                                    </div>
                                    <button type="submit" name="auth" class="btn btn-primary btn-user btn-block">
                                        <strong>Login</strong>
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>"> Lupa Password? Hubungi admin!</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>