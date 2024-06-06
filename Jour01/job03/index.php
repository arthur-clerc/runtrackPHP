<?php

$integer = 42;
$float = 3.14;
$string = 'A';
$boolean = true;

$arrayVariables = array(
    array("type" => "integer", "nom" => "Entier", "valeur" => $integer),
    array("type" => "float", "nom" => "Decimal", "valeur" => $float),
    array("type" => "string", "nom" => "Caractere", "valeur" => $string),
    array("type" => "Boolean", "nom" => "Booléen", "valeur" => $boolean)
);?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Variables</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 0.1rem solid black;
            padding: 0.8rem;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <?php foreach ($arrayVariables as $arrayVariable): ?>
                <tr>
                    <td><?php echo $arrayVariable['type']; ?></td>
                    <td><?php echo $arrayVariable['nom']; ?></td>
                    <td><?php echo $arrayVariable['valeur']; ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>