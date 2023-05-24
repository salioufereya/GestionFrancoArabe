<?php
namespace Models;

use Models\Database;


class Niveau  extends Database{
    private $id_niveau;
    private $libelle;
    private $id_groupeNiveau;
    
    public function __construct() {
        $this->id_niveau ;
        $this->libelle ;
        $this->id_groupeNiveau ;
    }
    
    // Getters
    public function getIdNiveau() {
        return $this->id_niveau;
    }
    
    public function getLibelle() {
        return $this->libelle;
    }
    
    public function getIdGroupeNiveau() {
        return $this->id_groupeNiveau;
    }
    
    // Setters
    public function setIdNiveau($id_niveau) {
        $this->id_niveau = $id_niveau;
    }
    
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    
    public function setIdGroupeNiveau($id_groupeNiveau) {
        $this->id_groupeNiveau = $id_groupeNiveau;
    }

    public function insert( $libelle)
    {
        $sql = "INSERT INTO GroupeNiveau (libelle) VALUES (:libelle)";
        $sts=$this->getBdd()->prepare($sql);
        $sts->bindParam(':libelle', $libelle);
             // Exécution de la requête SQL
             if ($sts->execute()) {
                 echo "Enregistrement inséré avec succès.";
             } else {
                 echo "Erreur lors de l'insertion : " 
                 ;
             }
    }

    public function all()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM Niveau");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }
}
