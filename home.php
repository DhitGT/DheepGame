<?php
    
    session_start();
    require 'koneksi.php';
    if(!isset($_SESSION["log"])){
        header('location:index.php');
    }
    $userName = $_SESSION['log'];
    $sql = ("SELECT * FROM userdata WHERE username ='$userName'");
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body class="mt-5">
    <div class="container">
        <div class="card transparent-card">
            <h1 align="center">GAME TITLE</h1>
            <br>
            <div class="card card-seccond d-flex flex-row justify-content-end align-items-center mb-5">
                <div class="btninput w-50">
                    <button class="w-100 btn btn-outline-success m-auto mt-3">START GAME</button>
                    <button class="w-100 btn btn-outline-success m-auto mt-3">SKIN</button>
                    <button class="w-100 btn btn-outline-success m-auto mt-3">SHOP</button>
                </div>
                <div class="playerskins w-25  rounded ps-5">
                    <img src="media/char01.png" width="150px">
                </div>
            </div>
            <div class="card card-seccond d-flex flex-column justify-content-center align-items-center mt-5">
                <h3>Leaderboard</h3>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>