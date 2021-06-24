<?php

namespace BWB\Framework\mvc\dao;

use BWB\Framework\mvc\DAO;

use PDO;

class DAOProducts extends DAO
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
        return $this
            ->getPdo()
            ->query(
                "SELECT *
                FROM product"
            )
            ->fetchAll(PDO::FETCH_CLASS, "\\BWB\\Framework\\mvc\\models\\TestModel");
    }

    public function getAllBy($filter)
    {
    }

    public function retrieve($id)
    {
    }

    public function update($array)
    {
    }
}
