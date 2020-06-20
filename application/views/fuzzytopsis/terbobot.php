<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?>
    </h1>
    <!-- RUMUS -->
    <div class="card-header">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
            Rumus
        </button>
        <div class="collapse" id="collapse1">
            <div class="card card-body">
                <img class="img img-fluid" src="<?= base_url('assets'); ?>/img/t1.jpg" alt="Card image" overflow="hidden" width="70%" height="auto">
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
    <p class="mb-2 mt-2">Matriks Keputusan Fuzzy dan Nilai Bobot tiap Kriteria <em>(Fuzzy Decision Matrix and Weight Value of Criteria)</em></p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <label for="">Matriks Keputusan <em>Fuzzy</em> 1</label>
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
                                <?php foreach ($nilaifuzzy[$alter['id_alternatif']] as $k => $v) : ?>
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
                    <label for="">Matriks Keputusan <em>Fuzzy</em> 2</label>
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

                                <?php foreach ($nilaifuzzy2[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>
                                        <?= $v; ?>
                                    </td>
                                <?php endforeach; ?>

                                <!-- <?php $data = array();
                                        foreach ($nilaifuzzy as $row) { ?>
                                    <td><?= $data[$row->id_alternatif][$row->id_kriteria] = $row->fuzzy_number1; ?></td>
                                <?php } ?> -->

                                <!-- <td><?= $nilaifuzzy[$alter->fuzzy_number]; ?></td> -->

                                <!-- <td>
                                    <?= $nilaifuzzy->fuzzy_number1; ?>
                                </td> -->

                                <!-- <?php foreach ($nilaifuzzy as $row) : ?>
                                    <td>(
                                        <?= $row->fuzzy_number1; ?>,
                                        )
                                    </td>
                                <?php endforeach; ?> -->

                                <!-- foreach ($rows as $row) {
                                // $data[$row->id_alternatif][$row->id_kriteria] = $row->fuzzy_number1;
                                // } -->

                                <!-- <?php foreach ($nilaifuzzy[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>(
                                        <?= $v; ?>,
                                        <?php foreach ($nilaifuzzy2[$alter['id_alternatif']] as $k2 => $v2) : ?>
                                            <?= $v2; ?>,
                                        <?php endforeach; ?>
                                        <?php foreach ($nilaifuzzy3[$alter['id_alternatif']] as $k3 => $v3) : ?>
                                            <?= $v3; ?>
                                        <?php endforeach; ?>
                                        )
                                    </td>
                                <?php endforeach; ?> -->


                                <!-- <?php foreach ($nilaifuzzy[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>
                                        <?= $v; ?>
                                    </td>
                                <?php endforeach; ?>
                                <?php foreach ($nilaifuzzy2[$alter['id_alternatif']] as $k1 => $v2) : ?>
                                    <td>
                                        <?= $v2; ?>
                                    </td>
                                <?php endforeach; ?>
                                <?php foreach ($nilaifuzzy3[$alter['id_alternatif']] as $k3 => $v3) : ?>
                                    <td>
                                        <?= $v3; ?>
                                    </td>
                                <?php endforeach; ?> -->

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
                    <label for="">Matriks Keputusan <em>Fuzzy</em> 3</label>
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
                                <?php foreach ($nilaifuzzy3[$alter['id_alternatif']] as $k => $v) : ?>
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

    <!-- Weight Value of Criteria -->
    <div class="card shadow mb-4 col-lg-11">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <!-- class display3 -->
                    <label for="">Nilai Bobot Kriteria <em>(Weight Value of Criteria)</em></label>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kriteria</th>
                            <th>Nilai Bobot Fuzzy Terendah</th>
							<th>Nilai Bobot Fuzzy Tengah</th>
							<th>Nilai Bobot Fuzzy Tertinggi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($AllBobot as $bbt) { ?>
                            <tr>
                                <td style="text-align: center"><?= $bbt['id_kriteria']; ?></td>
                                <td><?= $bbt['nama_kriteria']; ?></td>
                                <td><?= $bbt['nilai_bobot1']; ?></td>
                                <td><?= $bbt['nilai_bobot2']; ?></td>
                                <td><?= $bbt['nilai_bobot3']; ?></td>

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