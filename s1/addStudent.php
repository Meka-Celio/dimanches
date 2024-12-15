<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 1</title>
</head>

<body>

    <form action="app.addStudent.php" method="post">
        <label for="">Nom de l'étudiant
            <input type="text" name="nom" id="">
        </label>
        <label for="">Age de l'étudiant
            <input type="number" name="age" id="">
        </label>
        <label for="">Note 1
            <input type="number" name="note1" id="">
        </label>
        <label for="">Note 2
            <input type="number" name="note2" id="">
        </label>
        <label for="">Note 3
            <input type="number" name="note3" id="">
        </label>
        <label for="">
            <input type="submit" value="Créer" name="submit">
        </label>
    </form>

    <h1>
        <?php

        $msg = "Hello teh World";
        $msg2 = 'Hello World';

        // echo 'Le message est : ' . $msg2;
        echo "Le message est : $msg";
        ?>
    </h1>

</body>

</html>

<!-- 

- Id
- Nom
- Age
- Notes [3]
- Moyenne

-->