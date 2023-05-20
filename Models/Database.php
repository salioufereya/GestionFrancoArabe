<?php


abstract class Database
{
    private static $pdo;

    private static function setBdd()
    {
        self::$pdo= new PDO("mysql:host=localhost;dbname=gestionFranco;charset=utf8","root","Di@lloODC5");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    protected function getBdd()
    {
        if(self::$pdo==null)
        {
            self::setBdd();
        }
        return self::$pdo;
    }
}













