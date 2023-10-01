<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h1>calcule sur les variable</h1>";

$TVA = 0.2;    
$PRIX = 150;   
$Nombre = 10;  

$tva = 20;

$prixUnitaire = 50;

$nombreArticles = 10;

$prixHTUnite = $prixUnitaire / (1 + ($tva / 100));

$prixHTTotal = $prixHTUnite * $nombreArticles;

$prixTTCTotal = $prixUnitaire * $nombreArticles;

echo "Prix HT par article : $prixHTUnite DT<br>";
echo "Prix HT pour les 10 articles : $prixHTTotal DT<br>";
echo "Prix TTC pour les 10 articles : $prixTTCTotal DT";
    ?>
</body>
</html>