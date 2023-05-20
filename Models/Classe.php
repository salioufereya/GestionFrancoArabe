<?php
class Classe
{
    private $id;
    private $nom;
    private $effectif;
    private $idNiveau;
    private $anneeScolaire;

    public function __construct($id, $nom, $effectif, $idNiveau, $anneeScolaire)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->effectif = $effectif;
        $this->idNiveau = $idNiveau;
        $this->anneeScolaire = $anneeScolaire;
    }

    // Getters et setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    public function getIdNiveau()
    {
        return $this->idNiveau;
    }

    public function setIdNiveau($idNiveau)
    {
        $this->idNiveau = $idNiveau;
    }

    public function getAnneeScolaire()
    {
        return $this->anneeScolaire;
    }

    public function setAnneeScolaire($anneeScolaire)
    {
        $this->anneeScolaire = $anneeScolaire;
    }
}
