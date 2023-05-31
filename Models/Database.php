<?php

namespace Models;

abstract class Database
{
    private static $pdo;

    private static function setBdd()
    {
        self::$pdo= new \PDO("mysql:host=localhost;dbname=gestionFranco;charset=utf8","root","Di@lloODC5");
        self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_WARNING);
    }
    protected function getBdd()
    {
        if(self::$pdo==null)
        {
            self::setBdd();
        }
        return self::$pdo;
    }


    public function getAll(string $table)
    {
        $sql="SELECT * FROM $table";
        $sts = $this->getBdd()->prepare($sql);
        return $sts->fetchAll(\PDO::FETCH_ASSOC);
    }

   


}













