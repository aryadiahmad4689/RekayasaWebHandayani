<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Switch</title>
</head>
<body>
<form action="" method="GET">
<input type="text" name="nilai">
<button type="submit">Kirm Nilai</button>
</form>
    <?php
    $nilai = 7.6;
    $nilai =$_GET["nilai"];
    switch(true){
        case($nilai>=9):$predikat ="sangat baik";break;
        case($nilai<=9 && $nilai>=7.5):$predikat ="baik";break;
        case($nilai< 7.5 && $nilai>=6):$predikat ="cukup baik";
        default:$predikat="perlu ditinkantkan lagi";

    }

    echo"predikat anda: ".$predikat;

?>
</body>
</html>