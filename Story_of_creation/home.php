<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name']) ){

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HOME</title>
</head>
<body>
<h2 class="name">Ciao <?php echo $_SESSION['name']; ?></h2>
<a class="logout" href="logout.php">LOGOUT</a>
<a class="logout" href="index.html">GIOCA</a>
</body>
</html>
<?php
}else{
    header("Location: index.php");
    exit();
}
?>