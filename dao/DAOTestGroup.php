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
    public function create($array)
    {
        $name = $array[0];
        $description = $array[1];
        $last_date_tested = $array[2];

        $testGroup = $this
            ->getPdo()
            ->prepare(
                "INSERT INTO test_group (name, description, last_date_tested)
                VALUES (:name, :description, :last_date_tested)"
            );

        $datas = [
            "name" => $name,
            "description" => $description,
            "last_date_tested" => $last_date_tested
        ];

        return $testGroup->execute($datas);
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
                "SELECT id, name
                FROM test_group
                WHERE id = $id"
            )
            ->fetch(PDO::FETCH_ASSOC);
    }

    public function update($array)
    {
    }

    public function getLastGroupCreated()
    {
        return $this
            ->getPdo()
            ->query(
                "SELECT MAX(id)
                FROM test_group"
            )
            ->fetch(PDO::FETCH_ASSOC);
    }

    public function createEmployeeTestGroup($employee_id, $test_group_id)
    {
        $statement = $this
            ->getPdo()
            ->prepare(
                "INSERT INTO `employee-test_group` (employee_id, test_group_id)
                VALUES (:employee_id, :test_group_id)"
            );

        $datas = [
            "employee_id" => $employee_id,
            "test_group_id" => $test_group_id
        ];

        return $statement->execute($datas);
    }

    public function createTestGroupProduct($test_group_id, $product_id)
    {
        $statement = $this
            ->getPdo()
            ->prepare(
                "INSERT INTO `test-group_product` (test_group_id, product_id)
                VALUES (:test_group_id, :product_id)"
            );

        $datas = [
            "product_id" => $product_id,
            "test_group_id" => $test_group_id
        ];

        return $statement->execute($datas);
    }

    public function createSingleTest($name, $description, $minimum_value, $maximum_value)
    {
        $statement = $this
            ->getPdo()
            ->prepare(
                "INSERT INTO test (name, description, minimum_value, maximum_value)
                VALUES (:name, :description, :minimum_value, :maximum_value)"
            );

        $datas = [
            "name" => $name,
            "description" => $description,
            "minimum_value" => $minimum_value,
            "maximum_value" => $maximum_value
        ];

        return $statement->execute($datas);
    }

    public function getLastTestCreated()
    {
        return $this
            ->getPdo()
            ->query(
                "SELECT *
                FROM test
                WHERE id = MAX(id)"
            )
            ->fetchObject("TestModel");
    }

    public function createTestTestGroup($test_group_id, $test_id, $percentage, $is_test_passed)
    {
        $statement = $this
            ->getPdo()
            ->prepare(
                "INSERT INTO `test` (test_group_id, test_id, percentage, is_test_passed)
                VALUES (:test_group_id, :test_id, :percentage, :is_test_passed)"
            );

        $datas = [
            "test_group_id" => $test_group_id,
            "test_id" => $test_id,
            "percentage" => $percentage,
            "is_test_passed" => $is_test_passed
        ];

        return $statement->execute($datas);
    }
}
