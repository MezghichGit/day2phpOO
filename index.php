<?php
echo"Bienvenue à PDO, DAO et l'orienté objet avec PHP";

echo"Pour ajouter un produit cliquer ici <a href=Views/formProduit.html>ici</a>";
echo"<br/>";


require_once("Models/Repository.php");
$manager = new DaoProduit();
$produits = $manager->listProduit();
//var_dump($produits);

?>