<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fasilitas</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Custom fonts for this template-->
	<link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


	<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="card-body">
		<!-- Disini Judul -->
		<div class="card-header">
			<h1 align="center" class="h2 mb-2 text-gray-800"><span><b>PT. PERUMAHAN MANDIRI</b></span></h1>
			<h4 align="center">Laporan Penjualan Rumah Per Tipe Rumah</h4>
		</div>
		<!-- Mulai Table disini -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Fasilitas</h6>
			</div>

			<div class="card-body">
				<div class="row">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Id Fasilitas</th>
									<th>Nama Fasilitas</th>
									<th>Biaya Fasilitas</th>
									<th>Aksi</th>
								</tr>
								<?php
								$no=0;
								$query = mysqli_query($db,"select * from tbfasilitas");
								while ($row = mysqli_fetch_array($query)) {
									$no++;
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $row['id_fasilitas']; ?></td>
										<td><?php echo $row['nama_fasilitas']; ?></td>
										<td><?php echo $row['biaya_fasilitas']; ?></td>
										<td>

											<?php
											echo "
											<a href='deletefasilitas.php?id_fasilitas=$row[id_fasilitas]' class='badge badge-pill badge-danger'>Delete</a></td>";
											?>
										</td>
									</tr>
									<?php

								}
								?>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- Tombol tambah dan lainnya disini -->
		<center><a href="tambahfasilitas.php" class="btn btn-primary">Tambah Data Fasilitas</a> <a href="transaksi.php" class="btn btn-secondary">Data Transaksi</a>	<a href="customer.php" class="btn btn-info">Data Customer</a></center>

	</div>

	<!-- Footer mulai -->	
	<footer class="sticky-footer bg-white">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright &copy; SI Perumahan - Ekabasa Solusindo <?= date('Y'); ?></span>
			</div>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript-->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="assets/sb-admin-2.min.js"></script>

</body>
</html>
