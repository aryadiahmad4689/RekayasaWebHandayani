<!DOCTYPE html>
<html>
<head>
	<title>perpustakaan</title>
</head>
<body>
<?php
 require_once ("koneksi.php");

$sampul = $_FILES['sampul']['name'];

if(!is_dir("sampul")){
	mkdir("sampul");
}

move_uploaded_file($_FILES['sampul']['tmp_name'],"sampul/".$sampul);



 mysqli_query($koneksi," INSERT INTO buku (kode_buku, judul_buku, penulis, penerbit, tahun_terbit, sampul)
 				VALUES ('".$_POST ['kode_buku']."','".$_POST['judul_buku']."',
 						'".$_POST ['penulis']."','".$_POST['penerbit']."',
 						'".$_POST ['tahun_terbit']."','".$sampul."')");
 				mysqli_close ($koneksi);
 				echo "<script> window.location.href = 'index.php';</script";
?>

</body>
</html>