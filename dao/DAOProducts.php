<?php
namespace BWB\Framework\mvc\dao;
use BWB\Framework\mvc\DAO;
use PDO;

class DAOProducts extends DAO{
    //put your code here
    public function create($array) {
        
    }

    public function delete($id) {
        
    }

    public function getAll() {
        return $this->getPdo()->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllBy($filter) {
        return $this->getPdo()->query("SELECT product.name, serial_number, test_group.name AS tgname, has_product_passed_test FROM product JOIN `test-group_product` ON product.id = `test-group_product`.product_id JOIN test_group ON test_group_id = test_group.id WHERE product.id = $filter")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function retrieve($id) {
        
    }

    public function update($array) {
        
    }

}
