<?php

namespace Models;


class AnneeScolaireClasse extends Database
{

    public  function index()
    {
    }


    public function __construct()
    {
    }


    public function insert($id_Classe, $id_AnneeScolaire)
    {
        $sql = "INSERT INTO AnneeScolaireClasse (id_Classe, id_AnneeScolaire)
                VALUES (:id_Classe, :id_AnneeScolaire)";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindParam(':id_Classe', $id_Classe);
        $stmt->bindParam(':id_AnneeScolaire', $id_AnneeScolaire);
        return $stmt->execute();
    }
}
