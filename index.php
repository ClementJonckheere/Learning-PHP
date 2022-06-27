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
    <h1> Récuperer les données </h1>

    <h2>Redirection</h2>
    <form action="reception.php" method="post">
        <label class="yourdate">Votre date de naissance :</label>
        <input class="date" type="date" name="date" id="date"/>
        <input class="btn btn-block" type="submit" value="valider">
    </form>

    <h2> Self page </h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label class="yourdate">Votre date de naissance :</label>
        <input class="date" type="date" name="date" id="date"/>
        <input class="btn btn-block" type="submit" value="valider">
    </form>

<p>
    <?php
    if(isset($_POST["date"])){
      $date = $_POST["date"];
      if(empty($date)) {
        echo "Aucune date enregistrée";
        }else{
        echo "Votre date de naissance est le $date";
        }
    }
    ?>
</p>

</body>
</html>
