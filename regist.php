<?php
    require 'koneksi.php';
    require 'config.php';
    if(isset($_POST["submit"])){
        $userName = $_POST["inputUsername"];
        $userPw = $_POST["inputPassword"];
        $userEmail = $_POST["inputEmail"];
        $wpjson = JsonWeapon(1,1,1,1,1,1);
        $playerjson = JsonPlayer(1,1,1,1);
        $sql = "INSERT INTO `users` VALUES ('$userName', '$userPw','$userEmail')";
        $sql2 = "INSERT INTO `userdata` VALUES ('', '$userName','1000', '1', '$wpjson', '$playerjson')";
        mysqli_query($conn,$sql);
        mysqli_query($conn,$sql2);
        header('location:index.php');
    }   

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">  
    <title>Register/Login</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="card-form card m-auto d-flex flex-column p-5 mt-5 "
            style="box-shadow: 3px 3px 5px 5px rgba(0,0,0,0.3);">
            <div class="upper-card d-flex flex-column">
                <h4>Register </h4>
                <form method="post">
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <input type="text" class="form-control shadow-sms" id="inputUsername" name="inputUsername"
                            aria-describedby="emailHelp" />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control shadow-sms" id="inputPassword" name="inputPassword" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control shadow-sms" id="inputEmail" name="inputEmail" />
                    </div>
                    <div>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 shadow-sms" name="submit">Create</button>
                    </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>