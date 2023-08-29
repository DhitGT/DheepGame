<?php
    session_start();
    $alert = '';
    $alertp = '';
    $userName = '';
    $userPw = '';
    require 'koneksi.php';
    if(isset($_POST["submit"])){
        if($_POST['inputUsername']){
            $userName = $_POST["inputUsername"];
        }else{
            $alert = 'Username Tidak Boleh Kosong';
        }
        if($_POST["inputPassword"]){
            $userPw = $_POST["inputPassword"];
        }else{
            $alertp = 'Password Tidak Boleh Kosong';

        }
        if($userName != ''&& $userPw != ''){
            $sql = "SELECT * FROM users WHERE username = '$userName'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($userPw == $row['password']){
                    $_SESSION["log"] = $userName;
                    header('location:home.php');
                    exit();
                }else{
                    $alertp = 'password salah';
                }
            }else{
                $alert = 'username tidak ditemukan';
            }
        }
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
                <h4>Login</h4>
                <form method="post">
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <input type="text" class="form-control shadow-sms" id="inputUsername" name="inputUsername"
                        aria-describedby="emailHelp"/>
                        <small><?php echo $alert ?></small>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control shadow-sms" id="inputPassword" name="inputPassword"/>
                        <small><?php echo $alertp ?></small>
                    </div>
                    <div>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 shadow-sms" name="submit">Login</button>
                    <br>
                    <br>
                    <div class="m-auto text-center">Or</p>
                    <hr>
                    </form>
            </div>
            <div class="lower-card">
                <h5>Register Account</h5>
                <div class="lower-2 d-flex flex-column justify-content-center w-100 ">
                    <a href="regist.php" class="btn btn-outline-success shadow-sms">Register</a>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>