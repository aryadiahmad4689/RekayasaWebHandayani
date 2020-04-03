<!DOCTYPE html>
<html>
<head>
	<title>perpustakaan</title>
</head>
<body>
	<?php
	include_once ("koneksi.php");
	if (isset($_GET['kode_buku'])) {
		$action= "edit.php";
		$sql = mysqli_query ($koneksi,"SELECT * FROM buku WHERE kode_buku='".$_GET['kode_buku']."'");
		$data = mysqli_fetch_assoc($sql);
		mysqli_close($koneksi);
	}else{
		$action = "Add.php";
	}
	$field = array ('kode_buku','judul_buku','penulis','penerbit','tahun_terbit');
	?>
	<center>
		<form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
			<table>
				<tr><td colspan="2"><center><h3>Form Buku</h3></center></td></tr>
				<?php
					if (isset($_GET['kode_buku'])){
						echo "<input type='hidden' name='id' value='".$_GET['kode_buku']."'>";
					}
					for ($i=0; $i <count($field) ; $i++) { 
						echo "<tr>
							<td>".$field[$i]."</td>
							<td><input type='text' name='".$field[$i]."' value='".@$data[$field[$i]]."'></td>
							</tr>";
					}
				?>
				<tr>
					<td>Sampul</td>
				<td>
				<?php

					if(is_file("sampul/".@$data['sampul'])){
						echo "<img src='sampul/".$data['sampul']."' width='150'><br>";
					}
?>
				<input type="file" name="sampul" id="sampul">
				</td>
				
				</tr>
					<tr><td colspan="2"> <center><button type="Submit" name="Simpan">Simpan</button> <a href="index.php">Kembali</a></center></tr></td>
			</table>
			
		</form>
	</center>

</body>
</html>