<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nombre = 4; 

if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "Le nombre $nombre est à la fois un multiple de 3 et de 5.";
} else {
    echo "Le nombre $nombre n'est pas à la fois un multiple de 3 et de 5.";
}
?>

</body>
</html>