<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
include "arrData.php";

$id = $_GET['id'];
?>
<a href="index.php">retour</a>

<div>
    <p>Nom : <?=$students[$id][0] . " " . $students[$id][1]?></p>
    <p>age : <?=$students[$id][2]?> ans</p>
    <p>Ville : <?=$students[$id][3]?></p>
    <p>passions :</p>
    <p><?php
       foreach ($students[$id]['passions'] as $data){
           echo $data . '<br>';
       }
        ?></p>
</div>
