<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Voici les valeurs booléennes des nombres de l'exercice 7<h1>
<?php
function boolvalues($valeurs)
{
if($valeurs) echo "VRAI <br>";
else echo "FAUX <br>";
}
$a="0";
echo "La valeur booléenne de \$a est: ",boolvalues($a), "<br>";
$b="TRUE";
echo "La valeur booléenne de \$b est: ",boolvalues($b), "<br>";
$c=FALSE;
echo "La valeur booléenne de \$c est: ",boolvalues($c), "<br>";
$d=($a OR $b);
echo "La valeur booléenne de \$d est: ",boolvalues($d), "<br>";
$e=($a AND $c);
echo "La valeur booléenne de \$e est: ",boolvalues($e), "<br>";
$f=($a XOR $b);
echo "La valeur booléenne de \$f est: ",boolvalues($f), "<br>";
?>
</body>
</html>