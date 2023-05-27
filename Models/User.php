<?php

namespace Models;

use Models\Database;

class User extends Database
{




    private $username;
    private $password;

    public function __construct()
    {
        $this->username = null;
        $this->password = null;
    }


    public function find($user_id)
    {
        $sql = "SELECT * FROM User WHERE user_id = :user_id";
        $sth = $this->getBdd()->prepare($sql);
        $sth->bindParam(':id_groupeNiveau', $user_id);
        $sth->execute();
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }


    public function findUser($username)
    {
        $sql = "SELECT * FROM User WHERE username = :username";
        $sth = $this->getBdd()->prepare($sql);
        $sth->bindParam(':username', $username);
        $sth->execute();
        return $sth->fetch(\PDO::FETCH_ASSOC);
    }
}
