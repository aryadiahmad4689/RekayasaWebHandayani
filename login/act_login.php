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
  
    if(isset($_POST['username'])&& isset($_POST['password']) ){
        $user ="admin";
        $pas  ="admin";
        if($_POST['username']==$user && $_POST['password']=$pas){
            // set cookie
            setcookie("username",$_POST['username'],strtotime("+30 days"));
            setcookie("password",$_POST['password'],strtotime("+30 days"));

            header('location:page.php');
        }else{
            echo"<center>Anda Memasukkan Username Dan Password yang salah</center>";
            echo"<center> <a href='index.php'>Kembali Kehalaman Login</a> </center>";
        }
    }else{
        header('location:index.php');
    
    }

?>
</body>
</html>