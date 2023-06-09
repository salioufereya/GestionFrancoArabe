<?php

namespace Models;


class GroupeDiscipline extends Database
{


    public function index()
    {
    }

    public function insert($lib)
    {
        $requete = "INSERT INTO GroupeDiscipline (libelleGD)
                    VALUES (:lib)";
        $sts = $this->getBdd()->prepare($requete);
        $sts->bindParam(':lib', $lib);
        return $sts->execute();
    }

    public function all()
    {
        $sql = ("SELECT * FROM GroupeDiscipline");
        $sth = $this->getBdd()->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function last($lib)
    {
        $sql = ("SELECT * FROM GroupeDiscipline WHERE libelleGd LIKE :libelle");
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindValue(':libelle', '%' . $lib . '%');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
