<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="tujuan.php" method="post">
        <p>Masukkan Npm</p>
        <input type="text" name="npm" id="">
        <p>Masukkan Nama</p>
        <input type="text" name="nama" id="">
        <p>Mata Kuliah 1: <input type="text" name="mk[]"> </p>
        <p>Mata Kuliah 2: <input type="text" name="mk[]"> </p>
        <p>Mata Kuliah 3: <input type="text" name="mk[]"> </p>

        <button type="submit" name="kirim"> Kirim Data</button>




    </form>
</body>
</html>