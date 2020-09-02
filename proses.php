<?php
include ("koneksi.php");

if(isset($_POST['submit'])){
	$id_transaksi=$_POST['id_transaksi'];
	$id_customer=$_POST['id_customer'];
	$id_fasilitas=$_POST['id_fasilitas'];
	$jumlahbeli_rumah=$_POST['jumlahbeli_rumah'];
	$jmlhbeli_fasilitas=$_POST['jmlhbeli_fasilitas'];
	$uang_muka=$_POST['uang_muka'];
	$jangka_kredit=$_POST['jangka_kredit'];


	$query=mysqli_query($db,"INSERT INTO tbtransaksi VALUES('$id_transaksi','$id_customer', '$id_fasilitas','$jumlahbeli_rumah','$jmlhbeli_fasilitas','$uang_muka','$jangka_kredit')");
	if($query){
		header('Location:transaksi.php?status=sukses');
	} else {
		header('Location:transaksi.php?status=gagal');
	}
}
?>