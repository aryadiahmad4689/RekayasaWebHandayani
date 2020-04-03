<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halo Ariadi ahmad</h1>
    
    <p>ini adalah website ariadi ahmad saya akan menjadi seorang programeer</p>

    <?php
        $nim = "2017020100";
        $nama = "Ariadi Ahmad";
        $umur =23;
        $nilai = 82.89;
        $status = TRUE;
        echo "Nim :" ,$nim,"<br>" ;
        echo "Nama : $nama" ,"<br>";
        echo "Umur : ",$umur ,"<br>";
        echo "Nilai :" ,$nilai ,"<br>";

        if ($status) {
            echo "Status : Aktif";
        }else
            echo  "Status : Tidak Aktif";

        echo "Mencoba operator pembanding";

        $a =5;
        $b =4;

        echo "$a == $b : ".($a == $b);
        echo "<br> $a != $b : ".($a != $b);
        echo "<br>$a > $b : ".($a > $b);
        echo "<br>$a < $b : ".($a < $b);
        echo "<br>($a != $b) && ($a  > $b) : ".(($a != $b) && ($a > $b));
        echo "<br>($a != $b) || ($a  > $b) : ".(($a != $b) || ($a > $b));

        $tahun  = date("Y");
        // $kabisat = ($tahun%4=0)?"Kabisat":"Bukan Kabisat";
        // echo "tahun<b>$tahun</b>$kabisat";



    ?>
</body>
</html>