<?php
include "koneksi.php";
$id_customer = mysqli_real_escape_string($db, $_GET['id_customer']);
$delete=mysqli_query($db, "DELETE FROM tbcustomer WHERE id_customer='$id_customer'");
if (!$delete){
	die('Query Error : '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
}
else {
	echo"<script>alert ('Data berhasil dihapus'); window.location='customer.php'</script>";
}
?>