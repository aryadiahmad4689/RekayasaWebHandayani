<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>NAMA : Ariadi Ahmad</h3>
<h3>npm:2017020100</h3>

<?php 
for($i=0;$i<=300;$i++){
$a = 0;
  for($j=1;$j<=$i;$j++){
    if($i % $j == 0){
      $a++;
    } 
}

if($a == 2){

  echo $i;

  }
  
if($i % 10 == 0 && $i != 300){
  
  $dari= $i+1;
  $ke = $i+10;
  echo "<br> bilangan prima dari $dari hinggga $ke = ";

}

}
?>




</body>
</html>