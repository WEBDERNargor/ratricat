<?php

namespace App\Models;
use PDO;

class User
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function all($fetch = PDO::FETCH_OBJ)
    {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll($fetch);
    }



    public function custom($sql, $data = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
       return $stmt;
    }

  
  
}