<?php
$produits = [
    array(
        "Code produit" => "PRO001",
        "Nom du produit" => "Lenovo Yoga",
        "Quantité" => 1,
        "Prix unitaire" => 12000
    ),
    array(
        "Code produit" => "PRO002",
        "Nom du produit" => "Lenovo ThinkPad",
        "Quantité" => 4,
        "Prix unitaire" => 3500
    ),
    array(
        "Code produit" => "PRO003",
        "Nom du produit" => "Mini PC Acer",
        "Quantité" => 8,
        "Prix unitaire" => 9000
    ),
    array(
        "Code produit" => "PRO004",
        "Nom du produit" => "Android X95",
        "Quantité" => 20,
        "Prix unitaire" => 500
    ),
    array(
        "Code produit" => "PRO005",
        "Nom du produit" => "PC Dell",
        "Quantité" => 2,
        "Prix unitaire" => 5500
    ),
    array(
        "Code produit" => "PRO006",
        "Nom du produit" => "PS4",
        "Quantité" => 4,
        "Prix unitaire" => 4500
    ),
    array(
        "Code produit" => "PRO007",
        "Nom du produit" => "Nintendo Switch",
        "Quantité" => 8,
        "Prix unitaire" => 5000
    )
];

$total = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Vous devez écrire un programme pour afficher la liste des courses pour la semaine. <br>
        Et vous afficher le résultat dans un tableau HTML</h1>

    <table>
        <tr>
            <th>Code produit</th>
            <th>Nom du produit</th>
            <th>Quantité</th>
            <th>Prix Unitaire</th>
            <th>Prix total</th>
        </tr>
        <tbody>
            <?php foreach ($produits as $prod) { ?>
                <tr>
                    <td><?= $prod['Code produit'] ?></td>
                    <td><?= $prod['Nom du produit'] ?></td>
                    <td><?= $prod['Quantité'] ?></td>
                    <td><?= $prod['Prix unitaire'] ?></td>
                    <td><?= $prod['Prix unitaire'] * $prod['Quantité'] ?> DH</td>
                </tr>
            <?php
                $total += $prod['Prix unitaire'] * $prod['Quantité'];
            } ?>
        </tbody>
    </table>
    Total : <?php echo $total; ?> dh
</body>

</html>