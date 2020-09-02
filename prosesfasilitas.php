<?php
include ("koneksi.php");

if(isset($_POST['submit'])){

	$id=$_POST['id_fasilitas'];
	$nama=$_POST['nama_fasilitas'];
	$biaya=$_POST['biaya_fasilitas'];
	$query=mysqli_query($db,"INSERT INTO tbfasilitas VALUES('$id','$nama','$biaya')");
	if($query){
		header('Location:fasilitas.php?status=sukses');
	} else {
		header('Location:tambahfasilitas.php?status=gagal');
	}
}
?>