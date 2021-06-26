<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\Controller;
use BWB\Framework\mvc\dao\DAOProducts;
use BWB\Framework\mvc\models\DefaultModel;
use BWB\Framework\mvc\models\TestModel;
use Exception;

/**
 * Ceci est un exemple de contrôleur 
 * il charge le security middleware dans le constructeur
 * 
 *
 * @author loic
 */
class ProductsController extends Controller
{

    /**
     * Le constructeur de la classe Controller charge les datas passées par le client,
     * Pour charger le security middleware, le contrôleur parent invoque la methode
     * @see \BWB\Framework\mvc\Controller::securityLoader() 
     * pour charger la couche securité afin de l'injecter dans l'objet response gerant l'affichage.
     */
    function __construct()
    {
        parent::__construct();
    }

    public function getProducts()
    {
        $this->render("product", ["products" => (new DAOProducts())->getAll()]);
    }

    public function getGr(){
        $obj = json_decode(file_get_contents("php://input"));
      
        echo json_encode((new DAOProducts())->getAllBy($obj->idasked));
      
    }
}