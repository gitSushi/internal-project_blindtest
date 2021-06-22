<?php

namespace BWB\Framework\mvc\dao;

use BWB\Framework\mvc\DAO;
use PDO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAODefault
 *
 * @author loic
 */
class DAOTestGroup extends DAO
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

    public function getAllBy($filter)
    {
    }

    public function retrieve($id)
    {
        return $this->getPdo()
            ->query(
                "SELECT name
                FROM test_group
                WHERE id = $id"
            )
            ->fetch(PDO::FETCH_ASSOC);
    }

    public function update($array)
    {
    }
}
