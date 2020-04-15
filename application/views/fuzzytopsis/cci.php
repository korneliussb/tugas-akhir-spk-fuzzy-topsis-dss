<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
    <!-- <p class="mb-2"> <em>(Fuzzy Decision Matrix and Weight Value of Criteria)</em></p> -->

    <!-- DataTales Example -->
    <p class="mb-2">
        <strong> Koefisiensi Terdekat <em>(Closeness Coefficient)</em></strong>
    </p>
    <div class="card shadow mb-4 col-lg-8 ml-auto mr-auto">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
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
                                <td><?= $row->cci; ?></td>
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