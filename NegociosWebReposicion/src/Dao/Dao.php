<?php
namespace App\Dao;
class Dao {
    protected $pdo;

    public function __construct($dsn, $user, $password) {
        $this->pdo = new \PDO($dsn, $user, $password);
    }
}
?>