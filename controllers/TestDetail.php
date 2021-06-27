<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\dao\DAOTestDetail;

/**
 *
 */
class TestDetail extends SecurizedController
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

    /**
     * La methode affiche les données variables de l'URI comme definies dans le fichier routing.json. 
     * 
     * 
     * @param type $value correspond a la partie variable de l'URI dont le pattern est : (:).
     * 
     * @example /api/default/bonjour retournera bonjour. 
     * @example /api/default/32 retournera 32. 
     */
    public function getByValue($value)
    {
        $this->response->render("test", ["tests" => (new DAOTestDetail())->getAllBy($value)]);
    }
}
