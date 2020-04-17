<!-- Dashboard -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 text-gray-800"><?= $title; ?></h1>
    <!-- mb-4 -->


    <!-- Begin Page Content -->
    <!-- <div class="container-fluid"> -->

    <!-- Content Row -->
    <div class="row">

        <!-- Admin Terdaftar -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Admin Terdaftar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahAdmin->jumlah_admin; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-cog fa-2x text-gray"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Alternatif -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Alternatif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahAlternatif->jumlah_alternatif; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray"></i>
                            <!-- <i class="fas fa-chart-area "></i> -->
                            <!-- <i class="fas fa-dollar-sign "></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Kriteria -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kriteria</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlahKriteria->jumlah_kriteria; ?></div>
                                </div>
                                <!-- <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manajer Terdaftar -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Manajer Terdaftar </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahManajer->jumlah_manajer; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray"></i>
                            <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- First Column -->
        <div class="col-lg-5">
            <!-- <p class="mb-4">Daerah prioritas pembangunan embung adalah daerah XXX dengan nilai Koefisien Terdekat <em>(CCi)</em> sebesar YYY.</p> -->

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Prioritas Terbaik</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align: center">
                                    <th>Peringkat</th>
                                    <th>Alternatif</th>
                                    <!-- <th>Nilai <em>CC<sub>i</sub></em></th> -->
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($cci as $row) { ?>
                                    <tr>
                                        <td style="text-align: center"><?= $no++; ?></td>
                                        <td><?= $row->nama_alternatif; ?></td>
                                        <!-- <td><?= $row->cci; ?></td> -->
                                        <!-- <td><?= round($row->cci, 5); ?></td> -->
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

        <!-- Second column -->
        <div class="col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Peta Kabupaten Semarang</h6>
                </div>
                <div class="card-body">

                    <iframe width="100%" height="520" frameborder="0" src="https://korneliussb.carto.com/builder/7138dec4-d14a-4530-9579-62e740c0bc86/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                    <!-- <div class="px-3 py-5 bg-gradient-primary text-white">.bg-gradient-primary</div> -->
                </div>
            </div>
        </div>


        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->