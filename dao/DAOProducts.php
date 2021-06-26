<?php
namespace BWB\Framework\mvc\dao;
use BWB\Framework\mvc\DAO;
use PDO;

class DAOProducts extends DAO{
    
    public function create($array) {
        
    }

    public function delete($id) {
        
    }
    /**
    * Pour la page products 
    */
    public function getAll() {
        return $this->getPdo()->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /**
    * Extend de products pour avoir la liste des groupes de tests passé par le produit sélectionné
    * @param($filter) représente l'id du produit 
    */
    public function getAllBy($filter) {
        return $this->getPdo()->query("SELECT product.name, serial_number, test_group.name AS tgname, has_product_passed_test, test_group_id AS id FROM product JOIN `test-group_product` ON product.id = `test-group_product`.product_id JOIN test_group ON test_group_id = test_group.id WHERE product.id = $filter")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function retrieve($id) {
        
    }

    public function update($array) {
        
    }

}
