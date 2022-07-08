<?php
 session_start();
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

<h1>Ouvrir une session</h1>

<hr>
<form action="creer_session.php" method="get">
 Nom: <input type="text" name="nom"><br>
 Prénom: <input type="text" name="prenom"><br>
 <input type="submit" value="Envoyer">
</form> 


</body>
</html>