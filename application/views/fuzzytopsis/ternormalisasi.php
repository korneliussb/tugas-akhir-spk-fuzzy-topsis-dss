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
                <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/t2.jpg" alt="Card image" overflow="hidden" width="70%" height="auto">
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
    <p class="mb-2">Matriks Keputusan Normalisasi Terbobot Fuzzy <em>(Fuzzy Weighted Normalized Decision Matrix)</em></p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <label for="">Matriks Keputusan Normalisasi Terbobot <em>Fuzzy</em> 1</label>
                    <thead style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
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
                        <?php // $no = 1;
                        foreach ($alternatif as $alter) { ?>
                            <tr>
                                <!-- <td style="text-align: center"><?= $no++; ?></td> -->
                                <td><?= $alter['nama_alternatif']; ?></td>
                                <?php foreach ($bobot1[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>
                                        <?= $v; ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                    <tfoot style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Alternatif</th>
                            <th>Vegetasi Area Genangan Embung</th>
                            <th>Volume Material Timbunan</th>
                            <th>Luas daerah yang akan dibebaskan</th>
                            <th>Volume Tampungan Efektif</th>
                            <th>Lama Operasi</th>
                            <th>Harga air per m<sup>3</sup></th>
                            <th>Akses Jalan menuju Lokasi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- DUA -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                    <label for="">Matriks Keputusan Normalisasi Terbobot <em>Fuzzy</em> 2</label>
                    <thead style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
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
                        <?php // $no = 1;
                        foreach ($alternatif as $alter) { ?>
                            <tr>
                                <!-- <td style="text-align: center"><?= $no++; ?></td> -->
                                <td><?= $alter['nama_alternatif']; ?></td>

                                <?php foreach ($bobot2[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>
                                        <?= $v; ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php } ?>

                    </tbody>
                    <tfoot style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Alternatif</th>
                            <th>Vegetasi Area Genangan Embung</th>
                            <th>Volume Material Timbunan</th>
                            <th>Luas daerah yang akan dibebaskan</th>
                            <th>Volume Tampungan Efektif</th>
                            <th>Lama Operasi</th>
                            <th>Harga air per m<sup>3</sup></th>
                            <th>Akses Jalan menuju Lokasi</th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- TIGA -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered display1" id="" width="100%" cellspacing="0">
                    <label for="">Matriks Keputusan Normalisasi Terbobot <em>Fuzzy</em> 3</label>
                    <thead style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
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

                        <?php // $no = 1;
                        foreach ($alternatif as $alter) { ?>
                            <tr>
                                <!-- <td style="text-align: center"><?= $no++; ?></td> -->
                                <td><?= $alter['nama_alternatif']; ?></td>

                                <?php foreach ($bobot3[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>
                                        <?= $v; ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php } ?>

                        <!-- KOMENTAR -->
                        <!-- <?php
                                foreach ($alternatif as $alter) { ?>
                            <tr>

                                <td><?= $alter['nama_alternatif']; ?></td>
                                <?php foreach ($bobot3[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>
                                        <?= $v; ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php } ?>

                        <?php foreach ($bobot3 as $row) { ?>
                            <tr>
                                <td><?= $row->nama_alternatif; ?></td>
                                <td><?= $row->field_bobot1; ?></td>
                                <td><?= $row->field_bobot2; ?></td>
                                <td><?= $row->field_bobot3; ?></td>

                            </tr>
                        <?php } ?> -->
                    </tbody>
                    <tfoot style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Alternatif</th>
                            <th>Vegetasi Area Genangan Embung</th>
                            <th>Volume Material Timbunan</th>
                            <th>Luas daerah yang akan dibebaskan</th>
                            <th>Volume Tampungan Efektif</th>
                            <th>Lama Operasi</th>
                            <th>Harga air per m<sup>3</sup></th>
                            <th>Akses Jalan menuju Lokasi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->