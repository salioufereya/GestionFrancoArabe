<?php

namespace Models;

use Models\Database;

class Niveau extends Database
{
    private $id_Niveau;
    private $libelle;

    public function __construct()
    {
        $this->id_Niveau;
        $this->libelle;
    }



    public function insert($libelle)
    {
        $sql = "INSERT INTO Niveau (libelle) VALUES (:libelle)";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindParam(':libelle', $libelle);
        $sts->execute();
    }

    public function all()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM Niveau");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findNiveauByLibelle($lib)
    {
        $sql = "SELECT * FROM Niveau WHERE libelle LIKE :lib";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':lib', '%' . $lib . '%');
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getAllNiveau()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM Niveau");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findNiveauById($id)
    {
        $sql = "SELECT libelle FROM Niveau WHERE id_Niveau = :id";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
}
