<?php

namespace Models;

use Models\Database;

class Classe extends Database {
    private $id_classe;
    private $nom;
    private $effectif;
    private $id_niveau;
    
    public function __construct() {
        $this->id_classe ;
        $this->nom  ;
        $this->effectif ;
        $this->id_niveau;
    }
    
    // Getters
    public function getIdClasse() {
        return $this->id_classe;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getEffectif() {
        return $this->effectif;
    }
    
    public function getIdNiveau() {
        return $this->id_niveau;
    }
    
    // Setters
    public function setIdClasse($id_classe) {
        $this->id_classe = $id_classe;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function setEffectif($effectif) {
        $this->effectif = $effectif;
    }
    
    public function setIdNiveau($id_niveau) {
        $this->id_niveau = $id_niveau;
    }

    public function insert(array $data)
    {
        $requete = " INSERT INTO Classe (nom, effectif, id_niveau)
        VALUES (:nom, :effectif, :id_niveau)";
        $statement = $this->getBdd()->prepare($requete);
        $statement->execute($data);
    }

    public function all()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM Classe");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }





}
