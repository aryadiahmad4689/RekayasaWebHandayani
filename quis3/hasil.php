<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 

    $potonganKH = (100- $_GET['kehadiran'])/100 * $_GET['gajiPokok'];
    $potonganKN = (100- $_GET['kinerja'])/100 * $_GET['gajiPokok'];
    $totalGaji =$_GET['gajiPokok'] -$potonganKH-$potonganKN;



?>
    <p>Nip : <span><?php echo $_GET['nip']  ?></span></p>
    <p>Nama :<span><?php echo $_GET['nama']  ?></span></p>
    <p>Gaji Pokok :<span><?php echo $_GET['gajiPokok'] ?></span></p>
    <p>Potongan Kehadiran :<span><?php echo $potonganKH ?></span></p>
    <p>Potongan Ketidak Efektifan Kinerja :<span><?php echo $potonganKN  ?></span></p>
    <p>Total Gaji :<span><?php echo $totalGaji  ?></span></p>

</body>
</html>