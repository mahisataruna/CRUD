<?php include 'koneksi.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data customer</title>
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
	<div class="modal-content">
		<div class="card-header">
			<h1 align="center" class="h2 mb-2 text-gray-800"><span><b>INPUT DATA TRANSAKSI</b></span></h1>
		</div>
		<div class="card-body">
			<div class="col-lg">

				<div class="card shadow mb-4">
					<form action="proses.php" method="POST">
						<div class="modal-body">

							<fieldset>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="id_transaksi">ID Transaksi</label>
										<input type="text" name="id_transaksi" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="id_customer">Nama Customer</label>
										<select class="form-control" name="id_customer">
											<?php $c=mysqli_query($db,"select * from tbcustomer"); while($dc=mysqli_fetch_array($c)){ ?>
												<option value="<?= $dc['id_customer'] ?>"><?= $dc['nama_customer'] ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="id_fasilitas">Id Fasilitas</label>
										<select class="form-control" name="id_fasilitas">
											<?php $f=mysqli_query($db,"select * from tbfasilitas"); while($df=mysqli_fetch_array($f)){ ?>
												<option value="<?= $df['id_fasilitas'] ?>"><?= $df['nama_fasilitas'] ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="jumlahbeli_rumah">Jumlah Beli Rumah</label>
										<input class="form-control" type="text" name="jumlahbeli_rumah">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="jmlhbeli_fasilitas">Jumlah Beli Fasilitas</label>
										<input class="form-control" type="text" name="jmlhbeli_fasilitas">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="uang_muka">Uang Muka</label>
										<input class="form-control" type="text" name="uang_muka">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7">
										<label for="jangka_kredit">Jangka Kredit(TH)</label>
										<input class="form-control" type="text" name="jangka_kredit">
									</div>
								</div>
								<p>
									<div class="col-sm-7">
										<input type="submit" name="submit" value="Simpan" class="btn btn-primary"> <a href="transaksi.php" class="btn btn-secondary">Kembali</a>
									</div>
								</p>
								
							</fieldset>

						</form>
					</div>
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