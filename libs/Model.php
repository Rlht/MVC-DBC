<?php

class Model {
    function __construct() {
        $dsn = 'mysql:dbname=mvc;host=localhost';
        $user = 'root';
        $password = '';

        try {
            $this->dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            exit('Database error');
            echo $e->getMessage();
        }
    }
    public function SelectAdmin($select = "*", $from = null, $login = null, $pass = null) 
    {
        $statement = $this->dbh->prepare('SELECT '.$select.' FROM '.$from.' WHERE login = :login AND password = :password');
        $statement->bindValue(':login', $login, PDO::PARAM_STR);
        $statement->bindValue(':password', $pass, PDO::PARAM_STR);
        $statement->execute();
        $admin = $statement->fetch();
        return ($admin);
    }
}
