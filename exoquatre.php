<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Voici mes paramètres actuels</h1>
    <?php
    echo 'Version de PHP actuelle: ' . phpversion(), "<br>";
    echo 'Système exploitation: ' . php_uname('s'), "<br>";
    echo 'Langue du navigateur: ' .substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)."";
    ?>
</body>
</html>