<?php

namespace BWB\Framework\mvc\dao;

use BWB\Framework\mvc\DAO;
use PDO;

class DAOTestDetail extends DAO
{
    //put your code here
    public function create($array)
    {
    }

    public function delete($id)
    {
    }

    public function getAll()
    {
        
    }

    public function getAllBy($value)
    {
        return $this->getPdo()->query("SELECT * FROM test WHERE id = $value")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function retrieve($id)
    {
    }

    public function update($array)
    {
    }
}
