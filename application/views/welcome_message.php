<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SPK - Fuzzy TOPSIS</title>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- <link href="<?= base_url('assets/front/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

	<link rel="icon" href="<?= base_url('assets/img/favicon.ico'); ?>" type="image/gif">

	<!-- Custom styles for this template -->
	<!-- <link href="<?= base_url('assets/front/'); ?>css/business-frontpage.css" rel="stylesheet"> -->

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#home"><strong>SPK - FT</strong></a>
			<!-- <?= base_url(); ?> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">

					<!-- <li class="nav-item">
						<a class="nav-link text-light" href="#">Data Alternatif</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="#">Data Kriteria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="#">Peringkat</a>
					</li> -->
					<li class="nav-item active">
						<a href="<?= base_url('auth'); ?>" class="btn btn-primary btn-lg- active" role="button" aria-pressed="true">
							<i class="fas fa-sign-in-alt"></i> Masuk
						</a>
						<!-- <a class="nav-link " href="#">Masuk
							<span class="sr-only">(current)</span>
						</a> -->
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header class="bg-primary py-5 mb-5">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-lg-12 col-md-6">
					<br>
					<h1 class="display-4 text-white mt-2">Sistem Pendukung Keputusan</h1>
					<h1 class="display text-white">Penentuan Prioritas Pembangunan Embung</h1>
					<p class="lead mb-2 text-white">dirancang untuk menentukan prioritas pembangunan embung menggunakan metode <em>Fuzzy TOPSIS</em>
						<p class="text-white lead"> di Kabupaten Semarang</p>
					</p>
				</div>
			</div>
		</div>
	</header>

	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div class="col-md-8 mb-0">
				<h2>Tentang Sistem</h2>
				<hr>
				<!-- <p>L</p> -->
				<p>Sistem ini memiliki fitur-fitur dasar <em>CRUD (Create, Read, Update, & Delete)</em> dengan pengolahan data menggunakan metode <em>Fuzzy TOPSIS </em>(<em>Technique for Order Performance by Similarity to Ideal Solution</em>)
				</p>
				<div class="row ml-auto mr-auto">
					<div class="col-md-4">
						<h6 href=""><i class="fas fa-fw fa-map-marked"></i>&nbsp; Dukungan Carto Map</h6>
						<h6 href=""><i class="fas fa-fw fa-database"></i>&nbsp; Data Dinamis</h6>
					</div>
					<div class="col-md-4">
						<h6><i class="fas fa-fw fa-user-friends"></i>&nbsp; Multi Level User</h6>
						<h6><i class="fas fa-fw fa-fire"></i>&nbsp; Framework Populer</h6>
					</div>
				</div>
				<!-- <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a> -->
			</div>
			<div class="col-md-4 mb-5">
				<h2>Butuh Bantuan <a class="fas fa-question"></a> </h2>
				<hr>
				<address>
					<a href=""></a>
					<strong>Hubungi Admin <a class="fas fa-user-cog"></a></strong>
					<br>Kornelius Satria B
					<br>Universitas Diponegoro
					<br>
				</address>
				<address>
					<abbr title="Telegram"><i class="fab fa-telegram-plane"></i></abbr>
					<a href="https://t.me/korneliussatria">Kirim pesan via Telegram</a>
					<br>
					<abbr title="Email"><i class="fa fa-envelope"></i></abbr>
					<a href="mailto:korneliussb@student.ce.undip.ac.id">Hubungi via <em>email</em></a>
				</address>
			</div>
		</div>
		<!-- /.row -->
		<!-- <div class="row">
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="http://placehold.it/300x200" alt="">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus
							neque sequi doloribus.</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="http://placehold.it/300x200" alt="">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus
							neque sequi doloribus totam ut praesentium aut.</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="http://placehold.it/300x200" alt="">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus
							neque.</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
			</div>
		</div> -->

		<div class="row">
			<div class="col-md-5 card shadow">
				<!-- Alternatif -->
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered ml-auto mr-auto" id="alternatif" width="100%" cellspacing="0">
							<thead style="text-align: center">
								<tr>
									<th>No</th>
									<th>Nama Alternatif</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($alternatif as $alter) { ?>
									<tr>
										<td style="text-align: center"><?= $no++; ?></td>
										<td><?= $alter['nama_alternatif']; ?></td>

									</tr>

								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- akhir Alternatif -->
			</div>
			<div class="col-md-1">
				<!-- JARAK -->
			</div>

			<div class="col-md-6 card shadow">
				<!-- Peringkat -->
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered ml-auto mr-auto" id="peringkat" width="100%" cellspacing="0">
							<!-- display -->
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
										<!-- <td><?= round($row->cci, 5); ?></td> -->
									</tr>
								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
				<!-- akhir Peringkat -->
			</div>
		</div>
		<br>
		<div class="row">
			<div class="card shadow ml-auto mr-auto col-md-10">
				<!-- Nilai Bobot Kriteria-->
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="kriteria" width="100%" cellspacing="0">
							<thead>
								<tr style="text-align: center">
									<th>No</th>
									<th>Nama Kriteria</th>
									<th>Nilai Bobot</th>
									<th>Nilai Bobot</th>
									<th>Nilai Bobot</th>

								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($AllBobot as $bbt) { ?>
									<tr>
										<td style="text-align: center"><?= $no++; ?></td>
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
				<!-- Akhir Nilai Bobot Kriteria-->
			</div>

		</div>






		<!-- /.row -->

	</div>
	<!-- /.container -->
	<br>
	<!-- Footer -->
	<footer class="py-3 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy;
				<a class="text-info" href="https://github.com/korneliussb">Kornelius Satria Budiyanto
				</a> 2020
			</p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="<?= base_url('assets/front/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!--jQuery dibutuhkan oleh Bootstrap's JavaScript Plugins-->
	<!-- <script src="<?= base_url('assets/front/'); ?>vendor/js/jquery-3.3.1.min.js"></script> -->


	<!-- Page level plugins -->
	<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

	<!-- <script>
		$(document).ready(function() {
			$('table.display').DataTable();
		});
	</script> -->

	<script>
		$(document).ready(function() {
			$('#alternatif').DataTable({
				language: {
					searchPlaceholder: "Cari Data",
					paginate: {
						previous: "<",
						next: ">"
					}
				}
			});

			$('#kriteria').DataTable({
				// "dom": '<"pull-right"f><"pull-left"l>tip',
				language: {
					searchPlaceholder: "Cari Data",
					paginate: {
						previous: "<",
						next: ">"
					}
				}
			});

			$('#peringkat').DataTable({
				language: {
					searchPlaceholder: "Cari Data",
					paginate: {
						previous: "<",
						next: ">"
					}
				}
			});

		});
	</script>


</body>

</html>