<?php
	require_once ("koneksi.php");


	if(!is_dir("sampul")){
		mkdir("sampul");
	}
	$sql = mysqli_query($koneksi,"select sampul from buku where kode_buku='".$_POST['id']."'");

	$data = mysqli_fetch_assoc($sql);
	// mengecek apakah ada data file yang dikirim

	if($_FILES['sampul']['tmp_name'] != ""){
		if(is_file("sampul/".$data['sampul'])){
			unlink("sampul/".$data[$sampul]);
		}
		$sampul = $_FILES['sampul']['name'];
		move_uploaded_file($_FILES['sampul']['tmp_name'],"sampul/".$sampul);
	}else{
		$sampul = $data['sampul'];
	}
	

	mysqli_query ($koneksi,
		"UPDATE buku SET kode_buku='".$_POST['kode_buku']."', judul_buku='".$_POST['judul_buku']."', penerbit='".$_POST['penerbit']."',tahun_terbit='".$_POST['tahun_terbit']."',sampul='".$sampul."'
		WHERE kode_buku='".$_POST['id']."'");
	mysqli_close ($koneksi);
	echo "<script> window.location.href ='index.php';</script>";
?>