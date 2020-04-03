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
        if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
            if($_COOKIE['username']=="admin" && $_COOKIE['password']=="admin"){
                echo"<center>  Selamat Datang Admin<br><a href='act_logout.php'>Logout</a></center>";
            }
        }else{
            header('location:index.php');
        }
    ?>
</body>
</html>