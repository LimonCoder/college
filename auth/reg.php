<?php
require "../class/app.php";
$app = new app();
$msg="";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $permission_level = 0;
        $insert_query = "INSERT INTO `user`(`name`, `email`, `phone`, `permission`, `pass`) VALUES ('$name','$email','$phone','$permission_level','$pass')";
        $result = $app->insert($insert_query);
        if(!$result)
        {
            $msg .="<div class='h7 p-2 bg-success text-light'>Registration Success, Please Login</div>  <br> ";
            $msg .= "<script> setTimeout(function() {
              window.location.href='login.php';
            },2000) </script>";
        }else{
            $msg .="<div class='h7 p-2 bg-danger text-light'>Sorry, Failed Contact Admin</div> <br>  ";
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
    <script src="../src/jquery_2_1_3.min.js"></script>
    <title>Registration</title>
</head>
<body>
<div class="mt-5">
    <div class="row">

        <div class="w-25 mx-auto">
            <div class="shadow p-4">
                <div class="h5">Registration</div>
                <hr>
                <?php echo $msg;?>
                <form action="reg.php" method="post">
                    <label for="user">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                    <label for="user" class="mt-3">Email</label>
                    <input type="email" name="email" class="form-control" id="email" onkeyup="emails()">
                    <div class="small" id="email_status"></div>

                    <label for="user" class="mt-3">Phone</label>
                    <input type="number" name="phone" class="form-control" id="phone"> <br>
                    <div class="small" id="phone_status"></div>

                    <label for="pass" class="mt-3">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control">
                    <div class="small p-4"> Already registered? <a href="login.php">Sign In</a> </div>
                    <input type="submit" name="submit" id="submit" value="Login" class="form-control btn btn-info">
                </form>

            </div>
        </div>
    </div>
</body>
<script>

    var phone_status = document.getElementById("phone_status");

    function emails() {
        var check = 0;
        var email_status = document.getElementById("email_status");
        var email = document.getElementById("email").value;


        $.ajax({
            url:"background.php",
            method:"POST",
            data:{check:check,type:1,data:email},
            success:function(data)
            {

                if(data == 0)
                {
                    document.getElementById("submit").disabled= false;
                    email_status.innerHTML = "";
                }else
                {
                    document.getElementById("submit").disabled= true;
                    email_status.innerHTML = "This email is already registared";


                }
            }
        });


    }

</script>
</html>
