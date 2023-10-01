<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'addition</title>
</head>
<body>
    <h1>Formulaire d'addition</h1>
    <form method="post">
        <label for="valeur1">Première valeur :</label>
        <input type="text" id="valeur1" name="valeur1" required><br><br>
        
        <label for="valeur2">Deuxième valeur :</label>
        <input type="text" id="valeur2" name="valeur2" required><br><br>
        
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valeur1 = $_POST["valeur1"];
        $valeur2 = $_POST["valeur2"];

        if (is_numeric($valeur1) && is_numeric($valeur2)) {
            $resultat = $valeur1 + $valeur2;
            echo "<p>Le résultat est : $resultat</p>";
        } else {
            echo "<p>Veuillez saisir des nombres valides.</p>";
        }
    }
    ?>
</body>
</html>
