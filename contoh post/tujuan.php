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
echo "NPM : ".$_POST['npm']."<br>";
echo "Nama : ".$_POST['nama']."<br>";
$mk = $_POST['mk'];
$no =1;
foreach($mk as $k){
echo "Matakuliah  ".$no++." : ".$k."<br>";
}
?>
</body>
</html>