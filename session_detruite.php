<?php
 session_start();
 $sid = session_id();
 session_destroy();
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

<h1>Détruire les variables de session</h1>
<p>Session détruites !</p>
<br><a href="session.php">menu session</a>


</body>
</html>