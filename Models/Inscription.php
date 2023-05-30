<?php

namespace Models;



class Inscription extends Database

{


    public function __construct()
    {
    }


    public function insert($id_anneeScolaire, $id_eleve, $id_classe)
    {
        $sql = "INSERT INTO Inscription (id_anneeScolaire, id_eleve, id_classe)
                VALUES (:id_anneeScolaire, :id_eleve, :id_classe)";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindParam(':id_anneeScolaire', $id_anneeScolaire);
        $sts->bindParam(':id_eleve', $id_eleve);
        $sts->bindParam(':id_classe', $id_classe);
        return $sts->execute();
    }
}
