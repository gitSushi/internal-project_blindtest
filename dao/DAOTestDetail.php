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
        return $this->getPdo()->query("
            SELECT test_group.id, test_group.`name`, test_group.last_date_tested, test_group.description, employee.reference_employee, `test-test_group`.is_test_passed, `test-test_group`.percentage,test.name AS testname, test.minimum_value, test.maximum_value 
            FROM testdb.test_group 
            JOIN testdb.`test-test_group` 
            ON test_group.id = test_group_id 
            JOIN testdb.`employee-test_group` 
            ON `employee-test_group`.test_group_id = test_group.id 
            JOIN testdb.employee ON `employee-test_group`.employee_id = employee.id 
            JOIN testdb.test ON testdb.`test-test_group`.test_id = test.id 
            WHERE test_group.id = $value;
        ")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function retrieve($id)
    {
    }

    public function update($array)
    {
    }
}
