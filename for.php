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
        for($i=1; $i<=100;$i++){
            if($i % 2 == 0){
                if($i == 100){
                    echo$i;
                }else{
                    echo $i.",";
            }
        }
        if($i % 10 == 0){
            echo"<br>";
        }

    }
    ?>
</body>
</html>