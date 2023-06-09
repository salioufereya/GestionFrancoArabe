<?php

namespace Models;

use Models\Database;

class Classe extends Database
{
    private $id_classe;
    private $nom;
    private $effectif;
    private $id_niveau;
    public function __construct()
    {
        $this->id_classe;
        $this->nom;
        $this->effectif;
        $this->id_niveau;
    }

    // Getters
    public function getIdClasse()
    {
        return $this->id_classe;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getEffectif()
    {
        return $this->effectif;
    }

    public function getIdNiveau()
    {
        return $this->id_niveau;
    }

    // Setters
    public function setIdClasse($id_classe)
    {
        $this->id_classe = $id_classe;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    public function setIdNiveau($id_niveau)
    {
        $this->id_niveau = $id_niveau;
    }

    public function insert($nom, $id_Niveaux)
    {
        $requete = "INSERT INTO Classe (nom, id_Niveaux)
                    VALUES (:nom, :id_Niveaux)";
        $sts = $this->getBdd()->prepare($requete);
        $sts->bindParam(':nom', $nom);
        $sts->bindParam(':id_Niveaux', $id_Niveaux);
        return $sts->execute();
    }


    public function all()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM Classe");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }
    function getClassById($id)
    {
        $sql = "SELECT *
        FROM Classe
        JOIN Niveau ON Niveau.id_Niveau = Classe.id_Niveaux
        WHERE Niveau.id_Niveau = :id";
        $sth = $this->getBdd()->prepare($sql);
        $sth->bindValue(':id', $id);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function findClassByLibelle($nom, $annee)
    {

        $sql = "SELECT COUNT(*) AS count_class
    FROM Classe c
    INNER JOIN AnneeScolaireClasse an ON c.id_classe = an.id_Classe
    INNER JOIN AnneeScolaire a ON an.id_AnneeScolaire = a.id_AnneeScolaire
    WHERE c.nom = :lib
      AND a.libelle = :annee";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':lib', $nom);
        $sts->bindValue(':annee', $annee);
        $sts->execute();
        return $sts->fetchColumn();
    }


    public function findClasseByIdClass($id_classe)
    {
        $sql = "SELECT * FROM Classe WHERE id_classe = :id_classe";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':id_classe', $id_classe);
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function  getClasseByIdGroupeNiveau($id)
    {
        $sql = "SELECT * FROM Classe WHERE id_niveaux = :id";
        $sth = $this->getBdd()->prepare($sql);
        $sth->bindValue(':id', $id);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getIdClasseBylibelle($libelle)
    {
        $sql = "SELECT id_classe FROM Classe WHERE nom = :libelle";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindValue(':libelle', (int) $libelle);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update($id_discipline, $ressource, $examen,$id)
    {
        $sql = "UPDATE ClasseDiscipline
                SET ressource = :ressource,
                    examen = :examen
                WHERE id_discipline = :id_discipline AND id_classe = :id";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindParam(':id_discipline', $id_discipline, \PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->bindValue(':ressource', $ressource);
        $stmt->bindValue(':examen', $examen);
        $stmt->execute();
        return true;
    }
}
