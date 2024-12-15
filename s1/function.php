<?php

function estMajeur(int $age)
{
    if ($age < 18) {
        echo "Vous etes mineur ! Parce que vous avez $age ans";
    } else {
        echo "vous etes majeur ! Parce que vous avez $age ans";
    }
}

?>

<h1>Les fonctions</h1>

<p>
    <?php estMajeur(6) ?>
</p>