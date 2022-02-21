<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Voici les valeurs des variables du script de lexercice 2</h1>
    <?php
    $x = "PostgreSQL";
    $y = "MySQL"; 
    $z = &$x; 
    $x = "PHP  5"; 
    $y = &$x;
    echo $GLOBALS['x'],"<br>";
    echo $GLOBALS['y'],"<br>";
    echo $GLOBALS['z'],"<br>";
    ?>
</body>
</html>