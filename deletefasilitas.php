<?php
include "koneksi.php";
$id_fasilitas = mysqli_real_escape_string($db, $_GET['id_fasilitas']);
$delete=mysqli_query($db, "DELETE FROM tbfasilitas WHERE id_fasilitas='$id_fasilitas'");
if (!$delete){
	die('Query Error : '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
}
else {
	echo"<script>alert ('Data berhasil dihapus'); window.location='fasilitas.php'</script>";
}
?>