<?php
require_once("Modeles.php");
class DaoProduit{


    public function createProduit(Produit $produit)
    {
        //appel au PDO pour faire l'insertion
         require_once("../Config/Connexion.php");
        $pdoConnexion = new PDOConnexion();
        $pdo = $pdoConnexion->createConnexion();

        $sql = "INSERT INTO Produit (libelle, prix, quantite)
                VALUES ('".$produit->getLibelle()."', '".$produit->getPrix()."', '".$produit->getQuantite()."')";
        $produitInserted = $pdo->exec($sql);
        //var_dump($produitInserted);
        echo "New product created successfully";
    }

    public function listProduit()
    {
        //appel au PDO pour faire l'affichage
    }

    public function deleteProduit(Produit $produit)
    {
        //appel au PDO pour faire la suppression
    }

    public function updateProduit(Produit $produit)
    {
        //appel au PDO pour faire la mise à jour
    }
}
?>