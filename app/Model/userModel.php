<?php

namespace App\Model;

use PDO;
use PDOException;
use config\Connection;

class userModel extends Crud
{

    public function getAllUsers()
    {
        return $this->read("user");
    }

    public function fetchTopAuthors()
    {
        try {
            $query = "SELECT u.full_Name,u.created_at,COUNT(u.id) AS number_wikis FROM user u 
            INNER JOIN wiki t
            ON u.id=t.user_id
            WHERE u.role='author'
            GROUP BY u.id
            LIMIT 5;
            ";
            $stmt = $this->con->query($query);
            $records = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $records;
        } catch (PDOException $e) {
            echo "error fetching records" . $e->getMessage();
        }
    }
}
