<?php

namespace Models;

use Models\Database;










class GroupeNiveau extends Database
{
    private $id_groupeNiveau;
    private $libelle;

    public function __construct()
    {
        $this->id_groupeNiveau;
        $this->libelle;
    }

    // Getters
    public function getIdGroupeNiveau()
    {
        return $this->id_groupeNiveau;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    // Setters
    public function setIdGroupeNiveau($id_groupeNiveau)
    {
        $this->id_groupeNiveau = $id_groupeNiveau;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function insert($libelle)
    {
        $sql = "INSERT INTO GroupeNiveau (libelle) VALUES (:libelle)";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindParam(':libelle', $libelle);
        $sts->execute();
    }

    public function all()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM GroupeNiveau");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findGroupeNiveauByLibelle($lib)
    {
        $sql = "SELECT * FROM GroupeNiveau WHERE libelle LIKE :lib";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':lib', '%' . $lib . '%');
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getAllNiveau()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM GroupeNiveau");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }
}
