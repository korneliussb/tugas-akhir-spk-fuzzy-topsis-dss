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
                <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/t3.jpg" alt="Card image" overflow="hidden" width="30%" height="auto">
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->

    <!-- <p class="mb-2"><strong>Fuzzy Solusi Ideal Positif <em>(Fuzzy Positive Ideal Solution)</em> A<sup>*</sup></strong></p>
    <p class="mb-2"><strong>Fuzzy Solusi Ideal Negatif <em>(Fuzzy Negative Ideal Solution)</em> A<sup>-</sup></strong></p> -->
    <!-- FPIS -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <p class="mb-2"><strong>Fuzzy Solusi Ideal Positif <em>(Fuzzy Positive Ideal Solution)</em> A<sup>*</sup></strong></p>

                    <thead style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Vegetasi Area Genangan Embung</th>
                            <th>Volume Material Timbunan</th>
                            <th>Luas daerah yang akan dibebaskan</th>
                            <th>Volume Tampungan Efektif</th>
                            <th>Lama Operasi</th>
                            <th>Harga air per m<sup>3</sup></th>
                            <th>Akses Jalan menuju Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- FPIS -->
                        <?php foreach ($k1fpis as $k1) { ?>

                            <td><?= $k1->field_bobot1; ?></td>

                        <?php } ?>

                        <?php foreach ($k2fpis as $k2) { ?>

                            <td><?= $k2->field_bobot2; ?></td>

                        <?php } ?>

                        <?php foreach ($k3fpis as $k3) { ?>

                            <td><?= $k3->field_bobot3; ?></td>

                        <?php } ?>
                        <?php foreach ($k4fpis as $k4) { ?>

                            <td><?= $k4->field_bobot4; ?></td>

                        <?php } ?>
                        <?php foreach ($k5fpis as $k5) { ?>

                            <td><?= $k5->field_bobot5; ?></td>

                        <?php } ?>
                        <?php foreach ($k6fpis as $k6) { ?>

                            <td><?= $k6->field_bobot6; ?></td>

                        <?php } ?>
                        <?php foreach ($k7fpis as $k7) { ?>

                            <td><?= $k7->field_bobot7; ?></td>

                        <?php } ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- FNIS -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <p class="mb-2"><strong>Fuzzy Solusi Ideal Negatif <em>(Fuzzy Negative Ideal Solution)</em> A<sup>-</sup></strong></p>

                    <thead style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Vegetasi Area Genangan Embung</th>
                            <th>Volume Material Timbunan</th>
                            <th>Luas daerah yang akan dibebaskan</th>
                            <th>Volume Tampungan Efektif</th>
                            <th>Lama Operasi</th>
                            <th>Harga air per m<sup>3</sup></th>
                            <th>Akses Jalan menuju Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- FPIS -->
                        <?php foreach ($k1fnis as $k1) { ?>

                            <td><?= $k1->field_bobot1; ?></td>

                        <?php } ?>
                        <?php foreach ($k2fnis as $k2) { ?>

                            <td><?= $k2->field_bobot2; ?></td>

                        <?php } ?>
                        <?php foreach ($k3fnis as $k3) { ?>

                            <td><?= $k3->field_bobot3; ?></td>

                        <?php } ?>
                        <?php foreach ($k4fnis as $k4) { ?>

                            <td><?= $k4->field_bobot4; ?></td>

                        <?php } ?>
                        <?php foreach ($k5fnis as $k5) { ?>

                            <td><?= $k5->field_bobot5; ?></td>

                        <?php } ?>
                        <?php foreach ($k6fnis as $k6) { ?>

                            <td><?= $k6->field_bobot6; ?></td>

                        <?php } ?>
                        <?php foreach ($k7fnis as $k7) { ?>

                            <td><?= $k7->field_bobot7; ?></td>

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