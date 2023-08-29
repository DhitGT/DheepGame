<?php
    
    session_start();
    require 'koneksi.php';
    if(!isset($_SESSION["log"])){
        header('location:index.php');
    }
    echo $_SESSION['log'];
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
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p><?php echo $row['userid'] ?></p>
    <p><?php echo $row['username'] ?></p>
    <p><?php echo $row['money'] ?></p>
    <p><?php echo $row['level'] ?></p>
</body>
</html>