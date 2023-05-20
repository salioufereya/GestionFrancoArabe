<?php

require_once("Database.php");
class AnneeScolaire extends Database
{

    private $id;
    private $anneeScolaire;
    private $dateDebut;
    private $dateFin;

    public function __construct()
    {
    }

    // Getters et Setters pour chaque attribut
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function insert(array $data)
    {
        $requete = " INSERT INTO AnneeScolaire (anneeScolaire, dateDebut, dateFin)
        VALUES (:anneeScolaire, :dateDebut, :dateFin)";
        $statement = $this->getBdd()->prepare($requete);
        $statement->execute($data);
    }

    public function all()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM AnneeScolaire");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
