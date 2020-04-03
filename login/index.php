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
    if(isset($_COOKIE["username"])){
        if(($_COOKIE["username"]=="admin")){
            header('location:page.php');
        } 
    }
?>

    <form action="act_login.php" method="post">
        <li>Nama <input type="text" name="username" placeholder="Nama Anda"></li>
        <li>Nama <input type="password" name="password" placeholder="Nama Anda"></li>
    <button type="submit">Login</button>
    </form>
</body>
</html>