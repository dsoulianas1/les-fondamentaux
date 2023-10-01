<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nombre = 2; 

while ($nombre % 2 !== 0) {
    $nombre = rand(1, 100); 
}

echo "Le premier entier pair obtenu par tirage aléatoire est : $nombre";
?>

</body>
</html>