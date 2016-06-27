<?php 
include 'home.html';


try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire_test;charset=utf8', 'root', 'root');
} 
catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}


$reponse = $bdd->query('SELECT pseudo, commentaire FROM forum1 ORDER BY ID DESC LIMIT 0, 10');

while ($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['commentaire']) . '</p>';
}
$reponse->closeCursor();


?>
            
 