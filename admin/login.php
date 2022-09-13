<?php
    session_start();

    if(isset($_POST['submit'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];

        if($_SESSION['name'] === "Hilal Ahmad" && $_SESSION['password'] === "Ajk_573@ceo"){
            header("Location: /PHP Portfolio/admin/admin.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Favicon  -->
    <?php require "favicon.php"; ?>
    <style>
        <?php include("login.css"); ?>
    </style>
</head>
<body>
    <h1>Admin Panel</h1>
    <div class="login-form">
        <img src="login.png" alt="">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <input class="input-field" type="text" name="name" placeholder="Enter Name">
            
            <input class="input-field" type="password" name="password" placeholder="Enter Password">
            
            <input class="login-button" type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>