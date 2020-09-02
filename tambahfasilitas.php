
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Fasilitas</title>
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
	<div id="wrapper">
		<div class="modal-content">
			<div class="card-header">
				<h1 align="center" class="h2 mb-2 text-gray-800"><span><b>INPUT DATA FASILITAS</b></span></h1>
			</div>
			<div class="card-body">
				<div class="col-lg">
					<div class="card shadow mb-4">
						<form action="prosesfasilitas.php" method="POST">
							<div class="modal-body">
								<fieldset>
									<div class="form-group">
										<div class="col-sm-7">
											<label for="id_customer">ID Fasilitas</label>
											<input type="text" class="form-control" name="id_fasilitas">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-7">
											<label for="id_fasilitas">Nama Fasilitas</label>
											<input type="text" class="form-control" name="nama_fasilitas">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-7">
											<label for="id_fasilitas">Biaya Fasilitas</label>
											<input type="text" class="form-control" name="biaya_fasilitas">
										</div>
									</div>
									<div class="col-sm-7">
										<input type="submit" name="submit" class="btn btn-primary" value="Simpan"> <a href="fasilitas.php" class="btn btn-secondary">Kembali</a>
									</div>
								</fieldset>
							</div>
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