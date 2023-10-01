<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 5;
$b = 2;

$result = $a <=> $b;

switch ($result) {
    case -1:
        echo "$a est inférieur à $b";
        break;
    case 0:
        echo "$a est égal à $b";
        break;
    case 1:
        echo "$a est supérieur à $b";
        break;
    default:
        echo "Les variables ne sont pas comparables";
}
?>

</body>
</html>