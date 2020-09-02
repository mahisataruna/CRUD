<!-- Koneksi Database -->
<?php
include("koneksi.php");
?>

<!-- Tag HTML -->
<!DOCTYPE html>
<html>
<head>
	<!-- Title dan Css disini -->
	<title>Transaksi Perumahan</title>
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

<!-- Body disini -->
<body>
	
	<!-- Mulai Tag Tabel -->
	<div class="card-body">
		<!-- Judul disini -->
		<div class="card-header">
			<h1 align="center" class="h3 mb-2 text-gray-800"><span><b>PT. PERUMAHAN MANDIRI</b></span></h1>
			<h4 align="center">Laporan Penjualan Rumah Per Tipe Rumah</h4>
		</div>
		<!-- Disini letak Tabel -->

		<div class="card shadow mb-4">

			<div class="card-body">

				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Id Transaksi</th>
								<th scope="col">Id Customer</th>
								<th scope="col">Nama Customer</th>
								<th scope="col">Nama Fasilitas Tambahan</th>
								<th scope="col">Biaya Fasilitas Tambahan</th>
								<th scope="col">Jumlah Beli Fasilitas</th>
								<th scope="col">Jumlah Beli Rumah</th>
								<th scope="col">Total Harga Rumah</th>
								<th scope="col">Uang Muka</th>
								<th scope="col">Hutang</th>
								<th scope="col">Hutang Bunga</th>
								<th scope="col">Total Hutang</th>
								<th scope="col">Jangka Kredit(TH)</th>
								<th scope="col">Jangka Kredit(BL)</th>
								<th scope="col">Anggaran Per Bulan</th>
								<th scope="col">Action</th>
							</tr>
							<?php
							$no=0;
							$query = mysqli_query($db,"select * from q_laporan");
							while ($row = mysqli_fetch_array($query)) {
								$no++;
								?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $row['id_transaksi']; ?></td>
									<td><?php echo $row['id_customer']; ?></td>
									<td><?php echo $row['nama_customer']; ?></td>
									<td><?php echo $row['nama_fasilitas']; ?></td>
									<td><?php echo $row['biaya_fasilitas']; ?></td>
									<td><?php echo $row['jmlhbeli_fasilitas']; ?></td>
									<td><?php echo $row['jumlahbeli_rumah']; ?></td>
									<td><?php echo $row['ttlhrgrumah']; ?></td>
									<td><?php echo $row['uang_muka']; ?></td>
									<td><?php echo $row['hutang']; ?></td>
									<td><?php echo $row['hutangbunga']; ?></td>
									<td><?php echo $row['ttlhutang']; ?></td>
									<td><?php echo $row['jangka_kredit']; ?></td>
									<td><?php echo $row['jngkakreditbulan']; ?></td>
									<td><?php echo $row['angsuranperbulan']; ?></td>
									<?php
									echo "<td><a href='edit.php?id_customer=$row[id_customer]&tgltag=$row[id_transaksi]' class='badge badge-pill badge-success'>Edit</a>
									<a href='delete.php?id_customer=$row[id_customer]' class='badge badge-pill badge-danger'>Delete</a></td>";
									?>
								</tr>
								<?php

							}
							?>
						</thead>
					</table>

				</div>

			</div>

		</div>

		<!-- Tombol -->
		<div class="card-body">
			<center><a href="tambah.php" class="btn btn-primary">Tambah Data Transaksi</a> <a href="customer.php" class="btn btn-secondary"> Data Customer</a> <a href="fasilitas.php" class="btn btn-info">Data Fasilitas</a></center>
		</div>	
		
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

	<!-- Design By Ezi Saputra -->

</body>
</html>
