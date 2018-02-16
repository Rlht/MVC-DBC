<?php

class Model {
    function __construct() {
        $dsn = 'mysql:dbname=mvc;host=localhost';
        $user = 'root';
        $password = '';

        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    public function Select($select = "*", $from = null, $where = null, $orderBy = null, $limit = null) {
        $query = "SELECT" . $select;
        if ($from != null) $query.= "FROM ".$from;        
        return $this -> pdo -> exec($query);
    }
}