<?php
namespace Models;

use Models\Database;










class GroupeNiveau extends Database
 {
    private $id_groupeNiveau;
    private $libelle;
    
    public function __construct() {
        $this->id_groupeNiveau ;
        $this->libelle ;
        
    }
    
    // Getters
    public function getIdGroupeNiveau() {
        return $this->id_groupeNiveau;
    }
    
    public function getLibelle() {
        return $this->libelle;
    }
    
    // Setters
    public function setIdGroupeNiveau($id_groupeNiveau) {
        $this->id_groupeNiveau = $id_groupeNiveau;
    }
    
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function insert($libelle)
    {
        $sql = "INSERT INTO GroupeNiveau (libelle) VALUES (:libelle)";
        $sts=$this->getBdd()->prepare($sql);
        $sts->bindParam(':libelle', $libelle);
             // Exécution de la requête SQL
             if ($sts->execute()) {
                echo "Enregistrement inséré avec succès.";
                header('location:http://localhost:8000/GroupeNiveau/view');      
             } else {
                 echo "Erreur lors de l'insertion : " 
                 ;
             }
    }

    public function all()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM GroupeNiveau");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }
}
