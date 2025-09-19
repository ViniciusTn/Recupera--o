<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="home-container">
    <h2>Hello <?php echo $_SESSION["username"]; ?>, Welcome</h2>
    <p>Your email is <b><?php echo $_SESSION["email"]; ?></b></p>
    <p>And you are <b><?php echo $_SESSION["age"]; ?> years old.</b></p>
    <a href="logout.php" class="btn">Log Out</a>
</div>
</body>
</html>