<?php

namespace Models;


class Discipline extends Database
{


    public function index()
    {
    }

    public function insert($lib, $code, $id_gd)
    {
        $requete = "INSERT INTO Discipline (libelle_discipline, code_discipline, id_groupeDiscipline)
                    VALUES (:lib, :code,:id_gd)";
        $sts = $this->getBdd()->prepare($requete);
        $sts->bindParam(':lib', $lib);
        $sts->bindParam(':code', $code);
        $sts->bindParam(':id_gd', $id_gd);
        return $sts->execute();
    }


    public function getDisciplineByClasse($id)
    {
        $sql = "
            SELECT d.*, dc.*
            FROM Discipline d
            JOIN ClasseDiscipline dc ON d.id_discipline = dc.id_discipline
            JOIN Classe c ON dc.id_classe = c.id_classe
            WHERE c.id_classe = :id;
        ";
        $sth = $this->getBdd()->prepare($sql);
        $sth->bindValue(':id', $id);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }



    // public function getId_dis($libelle)
    // {
    //     $sql = "SELECT id_discipline FROM Discipline WHERE libelle_discipline LIKE :libelle";
    //     $stmt = $this->getBdd()->prepare($sql);
    //     $stmt->bindValue(':libelle', '%' . $libelle . '%');
    //     $stmt->execute();
    //     return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    // }
    public function getId_dis($libelle)
    {
        $sql = "SELECT id_discipline FROM Discipline WHERE libelle_discipline LIKE :libelle";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindValue(':libelle', '%' . $libelle . '%');
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result['id_discipline'];
    }



    public function getcode()
    {
        $sql = "SELECT code_discipline FROM Discipline";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function code($code)
    {
        $sql = ("SELECT * FROM Discipline WHERE code_discipline LIKE :libelle");
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindValue(':libelle', '%' . $code . '%');
        $stmt->execute();
        return $stmt->rowCount();
    }
}
