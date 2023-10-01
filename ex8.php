<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Vérifier si un nombre est pair ou impair</h1>
    <form method="post">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];

        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "<p>Le nombre $nombre est pair.</p>";
            } else {
                echo "<p>Le nombre $nombre est impair.</p>";
            }
        } else {
            echo "<p>Veuillez saisir un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>
