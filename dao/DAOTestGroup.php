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
    /**
     * Les fonctions provenants des interfaces
     */
    public function delete($id)
    {
    }

    public function getAll()
    {
    }

    public function getAllBy($filter)
    {
    }

    public function update($array)
    {
    }

    /**
     * Ajoute un groupe de tests
     */
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

    /**
     * Récupère un groupe de tests par son identité
     */
    public function retrieve($id)
    {
        return $this->getPdo()
            ->query(
                "SELECT id, name
                FROM test_group
                WHERE id = $id"
            )
            ->fetchObject('\\BWB\\Framework\\mvc\\models\\MinTestGroup');
    }

    /**
     * Récupère le dernier rang de test_group
     */
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

    /**
     * Met à jour la table relationnelle employee-test_group
     */
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

    /**
     * Met à jour la table relationnelle test-group_product
     */
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

    /**
     * Récupère le dernier rang de test
     */
    public function getLastTestId()
    {
        return $this
            ->getPdo()
            ->query(
                "SELECT MAX(id)
                FROM test"
            )
            ->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Ajoute un test unique (cette table n'est pas auto-increment)
     */
    public function createSingleTest($id, $name, $description, $minimum_value, $maximum_value)
    {
        $statement = $this
            ->getPdo()
            ->prepare(
                "INSERT INTO testdb.test (id, name, description, minimum_value, maximum_value)
                VALUES (:id, :name, :description, :minimum_value, :maximum_value)"
            );

        $datas = [
            "id" => $id,
            "name" => $name,
            "description" => $description,
            "minimum_value" => $minimum_value,
            "maximum_value" => $maximum_value
        ];

        return $statement->execute($datas);
    }

    /**
     * Récupère le dernier test créé et l'assigne à l'instance de TestModel
     */
    public function getLastTestCreated()
    {
        return $this
            ->getPdo()
            ->query(
                "SELECT *
                FROM testdb.test
                ORDER BY id
                DESC LIMIT 0, 1"
            )
            ->fetchObject("\\BWB\\Framework\\mvc\\models\\TestModel");
    }

    /**
     * Met à jour la table relationnelle test-test-group
     */
    public function createTestTestGroup($test_group_id, $test_id, $percentage, $is_test_passed)
    {
        $statement = $this
            ->getPdo()
            ->prepare(
                "INSERT INTO `test-test_group` (test_group_id, test_id, percentage, is_test_passed)
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
