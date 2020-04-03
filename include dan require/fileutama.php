<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     Hitung IPK

     <form action="" method="POST">
     <?php
        include("func.php");
        for($i=0; $i<5; $i++){
            echo "MataKuliah ".($i+1)."Nilai ".getInputNilai()." SKS ".getInputSks()."<br>";

        }
     ?>
        <button type="submit" name="hitung">Hitung IPK</button>
     </form>

     <?php
    if(isset($_POST['hitung'])){
        $sks = $_POST ['sks'];
        $nilai = $_POST['nilai'];
        $ipk = getIPK($nilai,$sks);
        echo "<h3> IPK = ".number_format($ipk,2,",",".");
    }


?>
</body>
</html>