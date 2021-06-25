<?php

namespace BWB\Framework\mvc\dao;
// namespace BWB\Framework\mvc\Controllers;

use BWB\Framework\mvc\DAO;
// use DAOTest;
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
class DAOTestHistory extends DAO
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
                "SELECT emp.reference_employee, prod.name AS pname, prod.has_product_passed_test, tg.name
                FROM test_group AS tg

                JOIN (SELECT em.reference_employee, tg.name, etg.test_group_id
                    FROM test_group AS tg
                    JOIN `employee-test_group` AS etg
                    ON tg.id = etg.test_group_id
                    JOIN employee AS em
                    ON etg.employee_id = em.id
                    WHERE etg.test_group_id
                    IN (SELECT id
                        FROM test_group)) AS emp
                ON emp.test_group_id = tg.id

                JOIN (SELECT gp.test_group_id, prod.name, gp.has_product_passed_test
                    FROM test_group as tg
                    JOIN `test-group_product` AS gp
                    ON tg.id = gp.test_group_id
                    JOIN product AS prod
                    ON prod.id = gp.test_group_id
                    WHERE gp.test_group_id
                    IN (SELECT id
                        FROM test_group)) AS prod
                ON prod.test_group_id = tg.id")
            ->fetchAll(PDO::FETCH_ASSOC);   
    }

    public function getAllBy($filter)
    {
    }

    public function retrieve($id)
    {
        
    }

    public function update($array){
    }   
    }