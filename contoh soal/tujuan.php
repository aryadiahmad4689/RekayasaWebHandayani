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
    $var1 = $_POST['var1'];
    $var2 = $_POST['var2'];
    $var3 = $_POST['var3'];
    
    $var4;
    if($var1 < $var2){
        $var4 = $var1;
        $var1 = $var2;
        $var2 = $var4;
    }else if($var2 < $var3){
        $var4 = $var1;
        $var2 = $var3;
        $var3 = $var4;
    }else if($var1 < $var2){
        $var4 = $var1;
        $var1 = $var2;
        $var2 = $var4;
    }


    echo $var1,$var2,$var3;

    // if ($var1 > $var2 && $var1 >$var3 && $var2 > $var3){
    //     echo $var1,$var2,$var3;
    // }else if($var2 > $var1 && $var2 >$var3 && $var3 > $var>$var1){
    //         echo $var2,$var3,$var1;
    // }else if($var3 > $var1 && $var3 >$var2 && $var2 > $var1){
        
    // }


?>
</body>
</html>