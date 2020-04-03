<?php
	require_once ("koneksi.php");

	$sql = mysqli_query($koneksi,"select sampul from buku where kode_buku='".$_POST['id']."'");
	$data = mysqli_fetch_assoc($sql);

	if(is_file("sampul/".$data['sampul'])){
		unlink("sampul/".$data[$sampul]);
	}

	mysqli_query ($koneksi,"DELETE FROM buku WHERE kode_buku='".$_GET['kode_buku']."'");
	mysqli_close ($koneksi);
	echo "<script>window.location.href = 'index.php';</script>";
?>