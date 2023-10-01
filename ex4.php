<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$Nom = "dsouli";
$Prenom = "anas";

echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
        <tr>
            <td>$Nom</td>
            <td>$Prenom</td>
        </tr>
      </table>";

$info = $Nom . ' ' . $Prenom;

echo "<script>alert('$info');</script>";
?>
</body>
</html>