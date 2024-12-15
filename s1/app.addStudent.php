<?php

function addStudent(string $nom, int $age, int $note1, int $note2, int $note3)
{
    $moyenne = 0;

    $moyenne = ($note1 + $note2 + $note3) / 3;


    // Variables de connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "session1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Requete SQL
    $sql = "INSERT INTO etudiants (id, nom, age, note1, note2, note3, moyenne) 
    VALUES (0, '$nom', '$age', $note1, $note2, $note3, $moyenne)";

    // Executer la requete
    if ($conn->query($sql) === TRUE) {
        echo "Nouvel étudiant ajouté !";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}

// addStudent($_POST['nom'], $_POST['age'], $_POST['note1'], $_POST['note2'], $_POST['note3']);

if (isset($_POST['submit'])) {
    addStudent($_POST['nom'], $_POST['age'], $_POST['note1'], $_POST['note2'], $_POST['note3']);
} else {
    header("Location:addStudent.php?error=noPost");
}
