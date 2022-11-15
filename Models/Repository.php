<?php
require_once("Modeles.php");
class DaoProduit{


    public function createProduit(Produit $produit)
    {
        //appel au PDO pour faire l'insertion
        include("../Config/Connexion.php");
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

        require_once("../Config/Connexion.php");
        $pdoConnexion = new PDOConnexion();
        $pdo = $pdoConnexion->createConnexion();

        $stmt = $pdo->prepare("SELECT * FROM produit");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
        //var_dump($result);
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