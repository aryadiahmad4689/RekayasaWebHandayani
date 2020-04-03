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
       $i=1;
       while($i <=100){
           if($i % 2 >0){
               if($i > 1){
                echo $i;
               
               }else{
               echo $i;
              
               }
           }
           if($i % 3 ==0){
               echo" a";
            //    echo"<br>";
           }
           if($i % 5 ==0){
            echo" b";
         //    echo"<br>";
        }

        if($i % 7 ==0){
            echo" c";
         //    echo"<br>";
        }
        if($i != 99) echo " ,<br>";
           $i++;
       }
    ?>
</body>
</html>