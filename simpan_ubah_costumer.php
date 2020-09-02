<?php
include ("koneksi.php");

	$id_transaksi=$_POST['id_transaksi'];
	$id_customer=$_POST['id_customer'];
	$id_fasilitas=$_POST['id_fasilitas'];
	$jumlahbeli_rumah=$_POST['jumlahbeli_rumah'];
	$jmlhbeli_fasilitas=$_POST['jmlhbeli_fasilitas'];
	$uang_muka=$_POST['uang_muka'];
	$jangka_kredit=$_POST['jangka_kredit'];


	$query=mysqli_query($db,"update tbtransaksi set  
		id_customer='$id_customer', 
		id_fasilitas='$id_fasilitas', 
		jumlahbeli_rumah='$jumlahbeli_rumah',
		jmlhbeli_fasilitas='$jmlhbeli_fasilitas',
		uang_muka= '$uang_muka',
		jangka_kredit='$jangka_kredit' where id_transaksi='$id_transaksi'");
	if (!$query) {
	die ('Query Error : '.mysqli_errno($db).'-'.mysqli_error($db));
}
else {
	echo"<script>alert ('Data berhasil diubah'); window.location='transaksi.php'</script>";
}


?>