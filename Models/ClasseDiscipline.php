<?php


namespace Models;

use Models\Database;

class ClasseDiscipline extends Database
{

    private $model;

    public function __construct()
    {
        $this->model;
    }

    public function insert($id_classe, $id_discipline)
    {
        $sql = "INSERT INTO ClasseDiscipline (id_classe, id_discipline) 
            VALUES (:id_classe, :id_discipline)";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindParam(':id_classe', $id_classe);
        $stmt->bindParam(':id_discipline', $id_discipline);
        return $stmt->execute();
    }

    public function delete($id_classe, $id_discipline)
    {
        $sql = "DELETE FROM ClasseDiscipline
                WHERE id_classe = :id_classe AND id_discipline = :id_discipline";
        $stmt = $this->getBdd()->prepare($sql);
        $stmt->bindParam(':id_classe', $id_classe);
        $stmt->bindParam(':id_discipline', $id_discipline);
        return $stmt->execute();
    }

    public function ClasseByIdClass($id_classe)
    {
        $sql = "SELECT * FROM ClasseDiscipline  JOIN Classe ON Classe.id_classe = :id_classe";
        $sts = $this->getBdd()->prepare($sql);
        $sts->bindValue(':id_classe', $id_classe);
        $sts->execute();
        return $sts->fetch(\PDO::FETCH_ASSOC);
    }


 




}
