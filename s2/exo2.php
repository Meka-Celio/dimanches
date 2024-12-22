<?php

function addProduct(string $codeProduct, string $nameProduct, int $qte, float $prixUnit)
{
    $tab = array(
        "Code Produit" => $codeProduct,
        "Nom Produit" => $nameProduct,
        "Qte" => $qte,
        "Prix Unitaire" => $prixUnit
    );

    return $tab;
}

$msg = "";
$prixTotal = 0;
$ok = 0;
$products = array();

if (isset($_POST['submit'])) {
    // var_dump($_POST);

    $codeProduit = $_POST['codeProduit'];
    $nomProduit = $_POST['nomProduit'];
    $qte = $_POST['qte'];
    $prixUnit = $_POST['prixUnit'];

    if (isset($codeProduit)) {
        $ok += 1;
    } else {
        $msg .= "<li>Le code produit est vide !</li>";
    }

    if (isset($nomProduit)) {
        $ok += 1;
    } else {
        $msg .= "<li>Le nom du produit est vide !</li>";
    }

    if (is_nan(intval($qte) * (-1))) {
        $msg .= "<li>La quantité ne doit contenir que des chiffres !</li>";
    } else {
        $qte = intval($qte);
        $ok += 1;
    }

    if (is_nan(intval($prixUnit) * (-1))) {
        $msg .= "<li>Le prix unitaire ne doit contenir que des chiffres !</li>";
    } else {
        $prixUnit = intval($prixUnit);
        $ok += 1;
    }

    if ($ok === 4) {
        $produit = addProduct($codeProduit, $nomProduit, $qte, $prixUnit);
        array_push($products, $produit);
    } else {
        $msg .= "<li>Des erreurs ont été trouvé dans le formulaire, ajout IMPOSSIBLE !</li>";
    }
}

foreach ($products as $prod) {
    echo $prod['Code Produit'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remplir un tableau</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ajouter des éléments à un tableau</h1>

    <div>
        <p>
            <?php echo $msg ?>
        </p>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <label for="code_produit">Code Produit
                <input type="text" name="codeProduit" id="code_produit">
            </label>
        </p>
        <p>
            <label for="nom_produit">Nom du produit
                <input type="text" name="nomProduit" id="nom_produit">
            </label>
        </p>
        <p>
            <label for="qte">Quantité
                <input type="number" name="qte" id="qte" min=0>
            </label>
        </p>
        <p>
            <label for="prix_unitaire">Prix Unitaire
                <input type="number" name="prixUnit" id="prix_unitaire" min=0>
            </label>
        </p>
        <p>
            <input type="submit" value="Ajouter" name="submit">
        </p>
    </form>

    <table>
        <thead>
            <tr>
                <th>Code produit</th>
                <th>Nom du produit</th>
                <th>Quantité</th>
                <th>Prix Unitaire</th>
                <th>Prix total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product['Code Produit'] ?></td>
                    <td><?php echo $product['Nom Produit'] ?></td>
                    <td><?php echo $product['Qte'] ?></td>
                    <td><?php echo $product['Prix Unitaire'] ?></td>
                    <td><?php echo $product['Prix Unitaire'] * $product['Qte'] ?> </td>
                </tr>

            <?php $prixTotal += $product['Prix Unitaire'] * $product['Qte'];
            } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Total</td>
                <td colspan="1"><?php echo $prixTotal ?> Dh</td>
            </tr>
        </tfoot>
    </table>

</body>

</html>