<?php

namespace Models;

use Models\Database;


class Eleve  extends Database
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



    // Getters et setters

    public function getId()
    {
        return $this->id;
    }




    public function insert(
        $nom,
        $prenom,
        $dateNaissance,
        $lieuNaissance,
        $numero,
        $type,
        $id_classe,
        $photo,
        $sexe
    ) {
        $requete = "INSERT INTO Eleve (nom, prenom, dateDeNaissance,
        lieuNaissance, Numero, type, id_classe, photo, sexe)
                    VALUES (:nom, :prenom, :dateNaissance, :lieuNaissance,
                     :numero, :type, :id_classe, :photo, :sexe)";
        $stmt = $this->getBdd()->prepare($requete);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':dateNaissance', $dateNaissance);
        $stmt->bindParam(':lieuNaissance', $lieuNaissance);
        $stmt->bindParam(':numero', $numero);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':id_classe', $id_classe);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':sexe', $sexe);
        return $stmt->execute();
    }





    public function findEleveByNumero($numero)
    {
        $sql = "SELECT * FROM Eleve WHERE numero = :numero";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':numero', $numero);
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getIdByNumero($numero)
    {
        $sql = "SELECT id_Eleve FROM Eleve WHERE numero LIKE :numero";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':numero', '%' . $numero . '%');
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function findEleveByIdClass($id_classe)
    {
        $sql = "SELECT * FROM Eleve WHERE id_classe = :id_classe";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':id_classe', $id_classe);
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findClasseByIdClass($id_classe)
    {
        $sql = "SELECT nom FROM Classe WHERE id_classe = :id_classe";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':id_classe', $id_classe);
        $sts->execute();
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }
}
