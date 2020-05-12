<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <!-- RUMUS -->
    <div class="card-header">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
            Rumus
        </button>
        <div class="collapse" id="collapse1">
            <div class="card card-body">
                <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/t5.jpg" alt="Card image" overflow="hidden" width="30%" height="auto">
            </div>
        </div>
    </div>
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
    <!-- <p class="mb-2"> <em>(Fuzzy Decision Matrix and Weight Value of Criteria)</em></p> -->

    <!-- DataTales Example -->
    <!-- <p class="mb-2">
        <strong> Koefisiensi Terdekat <em>(Closeness Coefficient)</em></strong>
    </p> -->
    <div class="card shadow mb-4 col-lg-8 ml-auto mr-auto">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="text-align: center">
                        <tr>
                            <th>Peringkat</th>
                            <th>Alternatif</th>
                            <th>Nilai <em>CC<sub>i</sub> (Closeness Coefficient)</em></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1;
                        foreach ($cci as $row) { ?>
                            <tr>
                                <td style="text-align: center"><?= $no++; ?></td>
                                <td><?= $row->nama_alternatif; ?></td>
                                <td style="text-align: center"><?= round($row->cci, 5); ?></td>
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->