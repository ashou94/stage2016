<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire_test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO forum1 (pseudo, commentaire) VALUES(?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['com1']));


header('Location: index.php');







