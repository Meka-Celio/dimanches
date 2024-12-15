<?php

function allStudents()
{
    // Variables de connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "session1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Requete SQL
    $sql = "SELECT * FROM etudiants ORDER BY nom";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch all
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    } else {
        echo "0 results";
    }

    $conn->close();
}
$etudiants = allStudents();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <a href="#">Home</a>
        </nav>
    </header>

    <section>

        <div>
            <a href="addStudent.php">Ajouter un étudiant</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Note1</th>
                    <th>Note2</th>
                    <th>Note3</th>
                    <th>Moyenne</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiants as $etu) { ?>
                    <tr>
                        <td><?php echo $etu['id'] ?></td>
                        <td><?php echo $etu['nom'] ?></td>
                        <td><?php echo $etu['age'] ?></td>
                        <td><?php echo $etu['note1'] ?></td>
                        <td><?php echo $etu['note2'] ?></td>
                        <td><?php echo $etu['note3'] ?></td>
                        <td><?php echo $etu['moyenne'] ?></td>
                        <td>
                            <a href="#">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>

</html>