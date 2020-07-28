<?php
session_start();
include('conectare.php');
if(isset($_POST['btn'])) {
    $nume=$_POST['nume'];
    $parola=$_POST['parola'];
$q="SELECT * FROM user WHERE nume='$nume' AND parola='$parola'";
$r=mysqli_query($conectare,$q);
if(mysqli_fetch_assoc($r)) {
    $_SESSION['user']=$nume;;
      header("Location:home.html");
    }
    else {
        echo "<script>alert('Datele nu sunt valide');</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Concurs de Programare</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Concurs de Programare</h1>
<div class="menu">
    <ul>
    <li><a href="home.html">Home</a></li>
    <li><a href="regulament.html">Regulament</a></li>
    <li><a href="organizatori.html">Organizatori</a></li>
    <li><a href="noutati.html">Noutati</a></li>
    <li><a href="participanti.html">Participanti</a></li>
    <li><a href="rezultate.html">Rezultate</a></li>
    <li><a href="contact.html">Contact</a></li>
    </ul>
</div>
    <form action="login.php" method="POST" class="form1">
        <h2>Login</h2>
    <label for="name">Nume:</label>
    <input type="text" name="nume" required><br>
    <label for="password">Parola:</label>
    <input type="password" name="parola" required><br>
    <input type="submit" name="btn" value="Login">
    </form>
</body>
</html>