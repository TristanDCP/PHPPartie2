<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 PHP</title>
</head>
<body>

<h1>Exercice 2</h1>

<p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  
Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.  </p>
    
    <?php
$isEasy = true;

if ($isEasy == true){
    echo "C'est facile !!";
} else {
    echo "C'est difficile !!!.";
}

// echo ($isEasy) ? 'c'est facile!!' : 'c'est difficile !!!';
    ?>
</body>
</html>