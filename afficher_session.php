<?php
 session_start();
 // compte le nombre de fois que la page a été visitée
 if (!isset($_SESSION['compteur'])) {
 $_SESSION['compteur'] = 1;
 } else {
 $_SESSION['compteur']++;
 }
 ?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Learning PHP | Données </title>
</head>
<!-- BODY -->
<body>
<h1> Compteur page</h1>
<?php
 echo "Vous avez vu cette page " . $_SESSION['compteur'] . " fois<p>";
 echo "<br>Nom: " . $_SESSION['nom'];
 echo "<br>Prénom: " . $_SESSION['prenom'];
 ?>
<a href="session.php">menu session</a>



</body>
</html>