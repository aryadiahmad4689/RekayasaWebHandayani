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

session_start();

$_SESSION["nama"]="ariadi ahmad";
$_SESSION["npm"]="2017020100";

echo"<center>  


    variabel Session telah di buat<br>

    <a href='tampilan.php'>Tampilan Isi Variabel</a>
</center>";
    
?>
</body>
</html>