<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Voici les valeurs des variables</h1>
<?php
$x="PHP5";
echo "\$x vaut : $x et est de type ", gettype($x), "<br>";
$a[]=&$x;
echo "\$a[0] vaut : $a[0] et est de type ", gettype($a), "<br>";
$y=" 5eme version de PHP";
echo "\$y vaut : $y et est de type ", gettype($y), "<br>";
$z=$y*10;
echo "\$z vaut : $z et est de type ", gettype($z), "<br>";
$x.=$y;
echo "\$x vaut : $x et est de type ", gettype($x), "<br>";
$y*=$z;
echo "\$y vaut : $y et est de type ", gettype($y), "<br>";
$a[0]="MySQL";
echo "\$a[0] vaut : {$a[0]} et est de type ", gettype($a), "<br>";
?>
</body>
</html>