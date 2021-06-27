<?php

namespace BWB\Framework\mvc\dao;

use BWB\Framework\mvc\DAO;
use PDO;

/**
 * Description of DAODefault
 *
 * @author loic
 */
class DAOTestHistory extends DAO
{
    public function create($array)
    {
    }

    public function retrieve($id)
    {
    }

    public function update($array)
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
                "SELECT emp.reference_employee, prod.name AS pname, prod.has_product_passed_test, tg.name, prod.test_group_id
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

                JOIN (SELECT gp.test_group_id, prod.name, gp.has_product_passed_test, prod.id
                    FROM test_group as tg
                    JOIN `test-group_product` AS gp
                    ON tg.id = gp.test_group_id
                    JOIN product AS prod
                    ON prod.id = gp.product_id
                    WHERE gp.test_group_id
                    IN (SELECT id
                        FROM test_group)
                    AND gp.has_product_passed_test IS NOT NULL) AS prod
                ON prod.test_group_id = tg.id"
            )
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllBy($filter)
    {
    }
}
