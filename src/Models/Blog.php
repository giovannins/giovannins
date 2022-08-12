<?php

namespace App\Models;

use PDO;
use PDOException;

class Blog
{
    
    protected $conn;

    public function __construct()
    {
        try
        {
            $this->conn = new PDO($_ENV['mysql_url'], $_ENV['db_user'], $_ENV['db_pass']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $err)
        {
            echo "{$err->getMessage()}\n";
        }
    }

    public function getAll()
    {
        $stmt = $this->conn->prepare("SELECT title, descricao, criado FROM posts ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getId($id)
    {
        $stmt = $this->conn->prepare("SELECT title, descricao, post, criado FROM posts WHERE id = {$id}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

