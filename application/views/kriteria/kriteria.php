<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a s, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <?php if ($this->session->flashdata()) : ?>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data nilai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  // $no = 1;
                        foreach ($alternatif as $alter) { ?>
                            <tr>
                                <!-- <td style="text-align: center"><?= $no++; ?></td> -->
                                <td><?= $alter['nama_alternatif']; ?></td>
                                <!-- <td><?= $alter['nilai_interval']; ?></td> -->
                                <?php foreach ($nilai[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td style="text-align: center"><?= $v; ?></td>
                                <?php endforeach; ?>

                                <!-- <td>FOrest</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td> -->
                                <td style="text-align: center">

                                    <a href="<?= base_url(); ?>kriteria/ubahNilai/<?= $alter['id_alternatif']; ?>" class="btn btn-success btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </a>

                                </td>
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
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- DETAIL KRITERIA -->
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Detail Kriteria</h5>
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="nav flex-column nav-pills nav-secondary nav-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                                <?php
                                foreach ($kriteria as $row) : ?>
                                    <a class="nav-link " id="v-pills-home-tab-nobd" data-toggle="pill" href="#v-<?php echo $row->id_kriteria ?>" role="tab" aria-controls="v-pills-home-nobd" aria-selected="true"><?= $row->id_kriteria ?>. <?= $row->nama_kriteria ?></a>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-sm-7">

                            <div class="tab-content" id="v-pills-without-border-tabContent">

                                <?php foreach ($kriteria as $row) : ?>
                                    <div class="tab-pane fade show" id="v-<?= $row->id_kriteria ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <?php foreach ($intervals as $item) :  if ($item->id_kriteria != $row->id_kriteria) {
                                                continue;
                                            } ?>
                                            <input type="text" class="form-control form-control-round" value="Nilai <?= $item->nilai_kriteria; ?> = <?= $item->nilai_interval; ?>" disabled><br>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->