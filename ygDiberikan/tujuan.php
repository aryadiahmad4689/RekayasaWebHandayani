<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
   <table border="1">
   <tr>
   <th>Mata Kuliah</th>
   <th>Jumlah Sks</th>
   <th>Nilai</th>
   </tr>
<?php   
$nilai_kesemuanya =0;
$total_sks=0;
//  $sum = array();
$data = array();

   for($i=0; $i<5 ; $i++): ?>
<?php
 if($_POST['nilai'][$i] == "A" || $_POST['nilai'][$i] == "a" ){
    $data=4; 
 }else if($_POST['nilai'][$i] == "B" || $_POST['nilai'][$i] == "b" ){
    $data=3; 
}else if($_POST['nilai'][$i] == "C" || $_POST['nilai'][$i] == "c" ){
    $data=2; 
}else if($_POST['nilai'][$i] == "D" || $_POST['nilai'][$i] == "d" ){
    $data=1; 
}else{
    $data=0; 
   
}
$nilai_kesemuanya += $_POST['sks'][$i] * $data;
$total_sks += $_POST['sks'][$i];
// echo $nilai_kesemuanya;
?>
   <tr>
   <td style="text-transform:capitalize"><?php echo $_POST['mtkuliah'][$i]?></td>
   <td style="text-transform:capitalize"><?php echo $_POST['sks'][$i]?></td>
   <td style="text-transform:capitalize"><?php echo $_POST['nilai'][$i]?></td>
   </tr>
   
   <?php endfor?>
   <tr>
   <!-- <td rowspan="2"></td> -->

   <!-- <td colspan="2"></td> -->
   <td rowspan="2">IPK = <?php echo $nilai_kesemuanya/$total_sks ?></td>


   </tr>

   </table>


</body>
</html>