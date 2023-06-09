<?php

namespace Models;


class AnneeScolaireNiveau extends Database
{

    public  function index()
    {
    }


    public function __construct()
    {
    }


    public function insert($id_Niveau, $id_AnneeScolaire)
    {
        $sql = "INSERT INTO AnneeScolaireNiveau (id_Niveau, id_AnneeScolaire)
            VALUES (:id_Niveau, :id_AnneeScolaire)";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindParam(':id_Niveau', $id_Niveau);
        $stmt->bindParam(':id_AnneeScolaire', $id_AnneeScolaire);
        return $stmt->execute();
    }
}
