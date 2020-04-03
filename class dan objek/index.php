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
if (!isset($_POST['kirim'])){
    echo "<form action='' method='post'>";

    for($i=0;$i<3;$i++){
        echo "<h3>DATA MAHASISWA".($i+1)."</h3>";
        echo "Nim : <input type='text' name='nim[]'><br>";
        echo "Nama : <input type='text' name='nama[]'> <br>";
        echo "Jurusan : <input type='text' name='jurusan[]'> <br>";

    }
    echo "<button name='kirim'>Kirim</button>";

}else{
    include_once("mahasiswa.php");
    $mahasiswa = array();
    for ($i=1; $i<3; $i++){
        //pembuatan objek;
        $mahasiswa[$i] = new Mahasiswa();
        // masukkan data yang dikirim kedalam objek
        $mahasiswa[$i]->setNim($_POST['nim'][$i]);
        $mahasiswa[$i]->setNama($_POST['nama'])[$i];
        $mahasiswa[$i]->setJurusan($_POST['jurusan'])[$i];

    }


    // menampilkan daftar objek;
    for ($i=1; $i<3; $i++){
       echo "<h3> DATA MAHASIWA".($i+1)."</h3>";
       echo "NIM :".$mahasiswa[$i]->getNim()."<br>";
       echo "Nama :".$mahasiswa[$i]->getNama()."<br>";
       echo "Jurusan :".$mahasiswa[$i]->getJurusan()."<br>";


    }
}


?>
</body>
</html>