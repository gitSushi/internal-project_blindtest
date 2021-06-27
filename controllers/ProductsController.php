<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\Controller;
use BWB\Framework\mvc\dao\DAOProducts;
// use Exception;

class ProductsController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function getProducts()
    {
        $this->render("product", ["products" => (new DAOProducts())->getAll()]);
    }

    public function getGr()
    {
        $obj = json_decode(file_get_contents("php://input"));      
        echo json_encode((new DAOProducts())->getAllBy($obj->idasked));      
    }
}