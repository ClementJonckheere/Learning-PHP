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

<?php
 session_start();
 // enregistrer les variables de session
 $_SESSION['nom'] = $_REQUEST['nom'] ;
 $_SESSION['prenom'] = $_REQUEST['prenom'] ;
?>
<html>
<body>
<h1>Variables de session créées</h1>
<?php
 echo "<br>Nom: " . $_SESSION['nom'];
 echo "<br>Prénom: " . $_SESSION['prenom'];
?>
<br><a href="session.php">menu session</a> 


</body>
</html>