<?php
    require "../class/auth.php";
    $auth = new auth();
    if(isset($_POST['submit']))
    {
        $email = $_POST['user'];
        $pass = $_POST['pass'];
        $query = "SELECT * FROM `user` where email like '$email'";
        $count = $auth->count($query);
        if($count>0)
        {
            $data = $auth->view_single($query);
            if($pass === $data['pass'])
            {
                setcookie('user',$email,time()+60*60,'/');


                echo "<script> setTimeout(function() {
              window.location.href='../public';
            },2000) </script>";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../src/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<div class="mt-5">
    <div class="row">

        <div class="w-25 mx-auto">
        <div class="shadow p-4">
            <form action="login.php" method="post">
                <label for="user">User</label>
                <input type="text" name="user" class="form-control" id="user">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">
                <div class="small p-4"> Not register? <a href="reg.php">Sign up</a> </div>
                <input type="submit" name="submit" value="Login" class="form-control btn btn-info">
            </form>

        </div>
    </div>
</div>
</body>
</html>
