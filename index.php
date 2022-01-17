<?php
include "arrData.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Liste des élèves</h1>
    <ul><?php
        foreach($students as $item => $student){?>
            <li><a href="page2.php?id=<?=$item?>"><?=$student[0]?> <?=$student[1]?></a></li>
            <?php
        }?>
    </ul>

    <script src="appListe.js"></script>
</body>
</html>