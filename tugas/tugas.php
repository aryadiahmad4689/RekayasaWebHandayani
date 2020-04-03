<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- <table border="2px">
    <tr>
    <th>Nama Mahasiswa</th>
    <th>Nilai Angka</th>

    </tr>

    <tr>
    <td>Adi</td>
    <td>75</td>
</tr>

<tr>
    <td>Hidayat</td>
    <td>65</td>
</tr>

<tr>
    <td>Rangga</td>
    <td>87</td>
</tr>

</table> -->

<table border="2px;">
<tr>
<th>Nama</th>
<th>Nilai Angka</th>
<th>Nilai</th>
</tr>
    <!-- tugas selesai -->
    <?php
    $mahasiswa =array(
     array('nama' => 'Adi','nilaiAngka'=> "75"),
    array('nama' => 'Hidayat','nilaiAngka'=> "65"),
    array('nama' => 'Rangga','nilaiAngka'=> "87"));
        foreach ($mahasiswa as $mh): ?>

    <?php
    if( $mh['nilaiAngka'] >=86 && $mh['nilaiAngka'] <=100){
        $nilai = "A";
        $color = "green";
    }else if($mh['nilaiAngka'] >=71 && $mh['nilaiAngka']<=85){
        $nilai = "B";
        $color = "blue";
    }else if($mh['nilaiAngka'] >=61 && $mh['nilaiAngka']<=70){
        $nilai = "C";
        $color = "orange";
    }else if($mh['nilaiAngka'] >=50 && $mh['nilaiAngka']<=60){
        $nilai = "D";
        $color = "red";
    }else if($mh['nilaiAngka'] <50){
        $nilai = "E";
        $color = "Black";
    }
?>
 

<tr>
<td><?php echo $mh['nama']?></td>
<td><?php echo $mh['nilaiAngka']?></td>
<td style="background-color:<?php echo $color ?>;"><?php echo $nilai?></td>

</tr>

<?php endforeach; ?>

</table>



<!-- selesai -->
</body>
</html>