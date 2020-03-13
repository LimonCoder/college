<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../src/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
<div class="mt-5">
    <div class="row">

        <div class="w-25 mx-auto">
            <div class="shadow p-4">
                <form action="reg.php" method="post">
                    <label for="user">User</label>
                    <input type="text" name="user" class="form-control" id="user">
                    <label for="user">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                    <label for="user">Phone</label>
                    <input type="number" name="phone" class="form-control" id="phone">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control">
                    <div class="small p-4"> Already registered? <a href="login.php">Sign In</a> </div>
                    <input type="submit" name="submit" value="Login" class="form-control btn btn-info">
                </form>

            </div>
        </div>
    </div>
</body>
</html>
