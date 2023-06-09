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

    public function all($annee)
    {
        $sql = ("SELECT n.*
        FROM Niveau n
        JOIN AnneeScolaireNiveau asn ON n.id_Niveau = asn.id_Niveau
        JOIN AnneeScolaire a ON asn.id_AnneeScolaire = a.id_AnneeScolaire
        WHERE a.libelle = :annee;
        ");
        $sth = $this->getBdd()->prepare($sql);
        $sth->bindValue(':annee', $annee);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findNiveauBylibelle($lib, $annee)
    {
        $sql = "SELECT COUNT(*) AS count_niveau
    FROM Niveau n
    INNER JOIN AnneeScolaireNiveau an ON n.id_Niveau = an.id_Niveau
    INNER JOIN AnneeScolaire a ON an.id_AnneeScolaire = a.id_AnneeScolaire
    WHERE n.libelle = :lib
      AND a.libelle = :annee";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':lib', $lib);
        $sts->bindValue(':annee', $annee);
        $sts->execute();
        return $sts->fetchColumn();
    }



    public function getAllNiveau()
    {
        $sth = $this->getBdd()->prepare("SELECT * FROM Niveau");
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findNiveauById($id)
    {
        $sql = "SELECT libelle FROM Niveau  WHERE id_Niveau = :id";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getIdNiveauBylibelle($libelle)
    {
        $sql = "SELECT id_Niveau FROM Niveau WHERE libelle LIKE :libelle";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':libelle', '%' . $libelle . '%');
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }
}
