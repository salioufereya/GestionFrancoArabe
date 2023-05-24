<?php

namespace Models;

use Models\Database;

class AnneeScolaire extends Database
{

    private $id_AnneeScolaire;
    private $libelle;

    // Getters et Setters pour chaque attribut
    public function getid_AnneeScolaire()
    {
        return $this->id_AnneeScolaire;
    }
    public function setid_AnneeScolaire($id_AnneeScolaire)
    {
        $this->id_AnneeScolaire = $id_AnneeScolaire;
    }
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setAnneeScolaire($libelle)
    {
        $this->libelle = $libelle;
    }
    public function insert($libelle)
    {
        $sql = "INSERT INTO AnneeScolaire (libelle) VALUES (:libelle)";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindParam(':libelle', $libelle);
        return $sts->execute();
    }


    public function all()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM AnneeScolaire");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findMarqueByLibelle($lib)
    {
        $sql = "SELECT * FROM AnneeScolaire WHERE libelle LIKE :lib";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':lib', '%' . $lib . '%');
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM AnneeScolaire WHERE id_AnneeScolaire = $id";
        $sts = $this->getBdd()->prepare($sql);
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function update($lib, $id)
{
    $sql = "UPDATE AnneeScolaire SET libelle = :libelle WHERE id_AnneeScolaire = :id";
    $sts = $this->getBdd()->prepare($sql);
    $sts->bindValue(':libelle', $lib);
    $sts->bindValue(':id', $id);
    $sts->execute();
}


public function delete($id)
{
    $sql = "DELETE  FROM AnneeScolaire  WHERE id_AnneeScolaire = :id";
    $sts = $this->getBdd()->prepare($sql);
    $sts->bindValue(':id', $id);
    $sts->execute();
}



    public function yearIsVAlid($lib)
    {
        $year = explode('-', $lib);
        if ((int)$year[1] - (int)$year[0] == 1) return true;
        else return false;
    }
}
