<?php 
    $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 8 Partie 5</title>
</head>
<body>
    <h1>Exercice 8 Partie 5</h1>
    <ul>
        <?php for ($i = 0; $i <= 11; $i++)
        {
            $monthsList = $months[$i];
            echo '<li>' . $monthsList . '</li>';
        };?> 
    </ul>
</body>
</html>