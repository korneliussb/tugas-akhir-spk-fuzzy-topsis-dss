<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><em><?= $title; ?></em></h1>

    <!-- RUMUS -->
    <div class="card-header">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
            Rumus
        </button>
        <div class="collapse" id="collapse1">
            <div class="card card-body">
                <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/t4.jpg" alt="Card image" overflow="hidden" width="40%" height="auto">
            </div>
        </div>
    </div>
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
    <p class="mb-2"><strong>Jarak antara alternatif dan FPIS <em>(Distance between alternative and FPIS)</em></strong></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="text-align: left">
                        <tr>
                            <th>Alternatif</th>
                            <th>K1</th>
                            <th>K2</th>
                            <th>K3</th>
                            <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($alternatif as $alter) { ?>
                            <tr>
                                <td><?= $alter['nama_alternatif']; ?></td>
                                <?php foreach ($dplus[$alter['id_alternatif']] as $d => $v) : ?>
                                    <td><?= $v; ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php } ?>




                        <!-- <?php foreach ($dis1fpis as $row) { ?>
                            <tr>
                                <?php foreach ($alternatif as $row) { ?>

                                    <td><?= $row->nama_alternatif; ?></td>

                                <?php } ?>
                                <td><?= $row->dplus1; ?></td>
                            </tr>
                        <?php } ?> -->
                        <!-- <?php foreach ($alternatif as $alter) { ?>

                            <td><?= $alter['nama_alternatif']; ?></td>

                            <?php foreach ($dis1fpis as $k1) { ?>

                                <td><?= $k1->dplus; ?></td>

                            <?php } ?>

                        <?php } ?> -->



                        <!-- <?php foreach ($dis1fpis as $k1) { ?>
                            <tr>
                                <td><?= $k1->nama_alternatif; ?></td>
                                <td><?= $k1->dplus; ?></td>
                            </tr>
                        <?php } ?> -->

                        <!-- <td><?= $alter['nama_alternatif']; ?></td> -->
                        <!-- <td><?= $dis1fpis->dplus; ?></td> -->
                        <!-- <?php foreach ($dis1fpis as $k1) { ?>

                            <td><?= $k1->dplus; ?></td>

                        <?php } ?> -->

                        <!-- <td>0.57</td> -->


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <p class="mb-2">
        <strong> Jarak antara alternatif dan FNIS <em>(Distance between alternative and FNIS)</em></strong>
    </p>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display4" id="" width="100%" cellspacing="0">
                    <thead style="text-align: left">
                        <tr>
                            <th>Alternatif</th>
                            <th>K1</th>
                            <th>K2</th>
                            <th>K3</th>
                            <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($alternatif as $alter) { ?>
                            <tr>
                                <td><?= $alter['nama_alternatif']; ?></td>
                                <?php foreach ($dneg[$alter['id_alternatif']] as $d => $v) : ?>
                                    <td><?= $v; ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p class="mb-2">
        <strong> Jumlah Jarak antara alternatif dan FPIS (Distance between alternative and FPIS) dan <p>Jumlah Jarak antara alternatif dan FNIS <em>(Distance between alternative and FNIS)</em></p></strong>
    </p>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display5" id="" width="100%" cellspacing="0">
                    <thead style="text-align: left">
                        <tr style="text-align: center">
                            <th>Alternatif</th>
                            <th><em>di<sup>*</sup></em></th>
                            <th><em>di<sup>-</sup></em></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dAll as $row) { ?>
                            <tr>
                                <td><?= $row->nama_alternatif; ?></td>
                                <td><?= $row->dplus; ?></td>
                                <td><?= $row->dneg; ?></td>
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