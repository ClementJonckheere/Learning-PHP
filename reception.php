
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Learning PHP | Reception</title>
</head>
<body>
    <h1> Récuperer les données </h1>
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
