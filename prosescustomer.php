<?php
include ("koneksi.php");

if(isset($_POST['submit'])){

	$id=$_POST['id_customer'];
	$nama=$_POST['nama_customer'];
	$query=mysqli_query($db,"INSERT INTO tbcustomer VALUES('$id','$nama')");
	if($query){
		header('Location:customer.php?status=sukses');
	} else {
		header('Location:tambahcustomer.php?status=gagal');
	}
}
?>