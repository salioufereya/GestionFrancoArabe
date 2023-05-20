<?php

class Eleve 
{
    private $id;
    private $nom;
    private $prenom;
    private $numero;
    private $dateNaissance;
    private $type;
    private $lieuNaissance;
    private $sexe;
    private $classe;
    private $statut;

    public function __construct($id, $nom, $prenom, $numero,
    $dateNaissance, $type, $lieuNaissance, $sexe, $classe, $statut)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numero = $numero;
        $this->dateNaissance = $dateNaissance;
        $this->type = $type;
        $this->lieuNaissance = $lieuNaissance;
        $this->sexe = $sexe;
        $this->classe = $classe;
        $this->statut = $statut;
    }

    // Getters et setters

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getLieuNaissance() {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance($lieuNaissance) {
        $this->lieuNaissance = $lieuNaissance;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function setClasse($classe) {
        $this->classe = $classe;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }
}
?>