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
// berlaku satu menit kemudian
$waktu = time()+60;
$name ="ariadi ahmad";
$npm ="2017020100";

setcookie("nama",$name,$waktu);
setcookie("npm",$npm,$waktu);

echo"<center>  


    variabel cookie telah di buat<br>

    <a href='tampilan.php'>Tampilan Isi Variabel</a>
</center>";

?>
</body>
</html>