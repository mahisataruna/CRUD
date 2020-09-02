<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Data</title>
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

	<!-- Page Wrapper -->
	
	<?php
	include "koneksi.php";
	$id_customer = mysqli_real_escape_string ($db, $_GET['id_customer']);
	$id_transaksi = mysqli_real_escape_string ($db, $_GET['tgltag']);
	$query = mysqli_query($db, "SELECT * FROM tbtransaksi where id_transaksi='$id_transaksi'");
	$baris = mysqli_fetch_array($query);
	$id_transaksi=$baris['id_transaksi'];
	$id_customer=$baris['id_customer'];
	$id_fasilitas=$baris['id_fasilitas'];
	$jumlahbeli_rumah=$baris['jumlahbeli_rumah'];
	$jmlhbeli_fasilitas=$baris['jmlhbeli_fasilitas'];
	$uang_muka=$baris['uang_muka'];
	$jangka_kredit=$baris['jangka_kredit'];


	?>
	<!-- Judul -->
	<div class="modal-content">
		<div class="card-header">
			<h1 align="center" class="h2 mb-2 text-gray-800"><span><b>EDIT DATA TRANSAKSI</b></span></h1>
		</div>

		<!-- disini tabel edit-->
		<div class="card-body">
			<div class="col-lg">
				<div class="card shadow mb-4">

					<form action = 'simpan_ubah_costumer.php' method='post'>
						<div class="modal-body">
							<fieldset>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="id_transaksi">Id Transaksi</label></th>
										<input type="text" class="form-control" name="id_transaksi" readonly value='<?= $id_transaksi ?>'>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="id_customer">Nama Customer</label>
										<select name="id_customer" class="form-control" value='<?= $id_customer ?>'>
											<?php $c=mysqli_query($db,"select * from tbcustomer"); while($dc=mysqli_fetch_array($c)){ ?>
												<option value="<?= $dc['id_customer'] ?>"><?= $dc['nama_customer'] ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="id_fasilitas">Id Fasilitas</label>
										<select name="id_fasilitas" class="form-control" value='<?= $id_fasilitas ?>'>
											<?php $f=mysqli_query($db,"select * from tbfasilitas"); while($df=mysqli_fetch_array($f)){ ?>
												<option value="<?= $df['id_fasilitas'] ?>"><?= $df['nama_fasilitas'] ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="jumlahbeli_rumah">Jumlah Beli Rumah</label>
										<input type="text" name="jumlahbeli_rumah" class="form-control"  value='<?= $jumlahbeli_rumah ?>'>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="jmlhbeli_fasilitas">Jumlah Beli Fasilitas</label>
										<input type="text" name="jmlhbeli_fasilitas" class="form-control" value='<?= $jmlhbeli_fasilitas ?>'>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="uang_muka">Uang Muka</label>
										<input type="text" name="uang_muka" class="form-control" value='<?= $uang_muka ?>'>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="jangka_kredit">Jangka Kredit(TH)</label>
										<input type="text" name="jangka_kredit" class="form-control" value='<?= $jangka_kredit ?>'>
									</div>
								</div>
								<p>
									<input type="submit" name="submit" value="Ubah" class="btn btn-primary"> <a href="transaksi.php" class="btn btn-secondary">Kembali</a>
								</p>
							</fieldset>
						</div>
					</form>
				</div>
			</div>
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
</body>
</html>