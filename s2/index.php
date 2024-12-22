<?php

// Utiliser une boucle while pour afficher les nombres de 1 à 5 en ordre croissant.
// Chaque nombre devra être sur une nouvelle ligne.

$i = 0;
$chiffre = 1;

echo "<h1>Exercice 3 - partie 1</h1>";
while ($i <= 4) {
    echo $chiffre . "<br>";
    $chiffre += 1;
    $i += 1;
}

$mois = array(
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
);

$personnes = [
    array(
        "Prenom" => "Vanessa",
        "Nom" => "DuBois",
        "Age" => 21,
        "Profession" => "Fleuriste"
    ),
    array(
        "Prenom" => "Gil",
        "Nom" => "Random",
        "Age" => 46,
        "Profession" => "Pompier"
    ),
    array(
        "Prenom" => "Ousmane",
        "Nom" => "Dongo",
        "Age" => 30,
        "Profession" => "Graphiste"
    ),
    array(
        "Prenom" => "Oliver",
        "Nom" => "Martel",
        "Age" => 21,
        "Profession" => "Developpeur"
    ),
];

// echo "<pre>";
// var_dump($personnes);
// echo "</pre>";

foreach ($personnes as $p) {
    echo "La profession de " . $p['Prenom'] . " est : " . $p["Profession"] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exercie 3 - Partie 2</h1>
    <ul>
        <?php foreach ($mois as $m) { ?>
            <li>
                <?php echo $m; ?>
            </li>
        <?php } ?>
    </ul>

    <table>
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Age</th>
                <th>Profession</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personnes as $person) { ?>
                <tr>
                    <td>
                        <?php echo $person['Prenom'] ?>
                    </td>
                    <td>
                        <?php echo $person['Nom'] ?>
                    </td>
                    <td>
                        <?php echo $person['Age'] ?> ans
                    </td>
                    <td>
                        <?php echo $person['Profession'] ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>