<?php

class PDOConnexion
{
    public $serveur;
    public $base;
    public $username;
    public $password;
    public $db=null;

    public function __construct($serveur, $base, $username, $password)
    {
        $this->serveur = $serveur;
        $this->base = $base;
        $this->username = $username;
        $this->password = $password;
    }

    public function createConnexion(){
        try {
            //creation de l'objet PDO
            $db = new PDO("mysql:host=$this->serveur;dbname=$this->base",$this->username,$this->password);
           
           if($db != null) echo "Connexion réussi";
         
            } catch (PDOException $e){ //erreur de connexion à la basse
            print "Erreur : ".$e->getMessage();
            die();
            }
            
    }
    public function deleteConnexion(){
        $db=null;
            
    }
}


$conn = new PDOConnexion("localhost","gkphp2022","root","");
$conn->createConnexion();
?>