<?php
require_once("../Models/Modeles.php");
class PDOConnexion
{
    private $serveur;
    private $base;
    private $username;
    private $password;
    private $pdo=null;

 
   public function __construct()
    {
        require_once("ConfigDB.php");
        $this->serveur = $serveur;
        $this->base = $base;
        $this->username = $username;
        $this->password = $password;
    }

    public function createConnexion(){
        try {
            //creation de l'objet PDO
            $pdo = new PDO("mysql:host=$this->serveur;dbname=$this->base","$this->username","$this->password");
           
           if($pdo != null) echo "Connexion réussi";
            return $pdo;
            } catch (PDOException $e){ //erreur de connexion à la basse
            print "Erreur : ".$e->getMessage();
            die();
            }
            
    }
    public function __destruct()
    {
        $pdo=null;  
    }
}
/*
$pdoConnexion = new PDOConnexion();
$pdo = $pdoConnexion->createConnexion();
*/
// création d'un produit de test et insertion via PDO

//step 1 : création de l'objet
//$produit = new Produit("Smart Phone Samsung A33",2000,50);
//step 2 : insertion dans le PDO
/*$sql = "INSERT INTO Produit (libelle, prix, quantite)
  VALUES ('".$produit->getLibelle()."', '".$produit->getPrix()."', '".$produit->getQuantite()."')";

$pdo->exec($sql);
echo "New product created successfully";*/
?>