<!-- Dashboard -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <!-- Begin Page Content -->
    <!-- <div class="container-fluid"> -->

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
                    <!-- <iframe width="100%" height="520" frameborder="0" src="https://agungmamet.carto.com/builder/5184ca33-3dc7-473e-91b5-0fa71e3a2692/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                    <iframe width="100%" height="520" frameborder="0" src="https://korneliussb.carto.com/builder/15c916e0-36e3-4843-994f-449de5771f95/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe> -->
                    <iframe width="100%" height="520" frameborder="0" src="https://korneliussb.carto.com/builder/639cd4c6-48ad-4df6-aea4-4877f8c25fa0/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>


                    <!-- <div class="px-3 py-5 bg-gradient-primary text-white">.bg-gradient-primary</div> -->

                </div>
            </div>
        </div>


        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->