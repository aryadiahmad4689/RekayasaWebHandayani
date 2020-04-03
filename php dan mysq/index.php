<!DOCTYPE html>
<html>
<head>
	<title>perpustakaan</title></head>
<body>
<center>
	<a href="form.php">Tambah Buku</a>
	<hr width="200">
	<table border="1" cellpadding="0"	cellpadding="0" width="1000">
		<tr>
			<th>Sampul</th><th>Kode Buku</th><th>Judul buku</th><th>Penulis</th><th>penerbit</th><th>tahun terbit</th><th>Aksi</th>
			
		</tr>
		<?php
			include_once ("koneksi.php");
			$sql= mysqli_query($koneksi,"SELECT * FROM buku ");
		while ($row = mysqli_fetch_array($sql)) {
			echo "<tr>";
			if(is_file("sampul/".$row['sampul'])){
				echo "<td><center><img src='sampul/".$row['sampul']."' width='100'></center></td>";
			}else{
				echo "<td><center>-<center></td>";
			}
			for ($j=0; $j <5 ; $j++) { 
				echo "<td>". $row[$j]."</td>";
			}
			echo "<td>
				<center>
					<a href= 'form.php?kode_buku=".$row[0]."'> Ubah </a>
					<a href= 'delete.php?kode_buku=".$row[0]."'> Hapus </a>
				</center>
				</td>
			</tr>";
		}
		mysqli_close ($koneksi);
		?>
	</table>
</center>
</body>
</html>