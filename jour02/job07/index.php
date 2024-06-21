<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="" method="post">
        <label for="largeur">largeur :</label>
        <input type="text" id="largeur" name="largeur"><br><br>
        <label for="hauteur">hauteur :</label>
        <input type="text" id="hauteur" name="hauteur"><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largeur = intval($_POST["largeur"]);
    $hauteur = intval($_POST["hauteur"]);

    // Fonction pour afficher le toit de la maison
    function afficherToit($largeur) {
        $toitLargeur = $largeur + 2;
        $milieu = ceil($toitLargeur / 2);
        for ($i = 1; $i <= $milieu; $i++) {
            echo str_repeat("&nbsp;", $milieu - $i);
            echo str_repeat("*", $i * 2 - 1);
            echo "<br>";
        }
    }

    // Fonction pour afficher le corps de la maison
    function afficherCorps($largeur, $hauteur) {
        for ($i = 0; $i < $hauteur; $i++) {
            echo "|";
            echo str_repeat("&nbsp;", $largeur);
            echo "|<br>";
        }
        echo str_repeat("-", $largeur + 2);
    }

    echo "<pre>";
    afficherToit($largeur);
    afficherCorps($largeur, $hauteur);
    echo "</pre>";
}
?>