<?php
namespace BWB\Framework\mvc;

/**
 * Objet servant a retourner la reponse du contrôleur 
 *
 * @author loic
 */
class Response
{
    private $security;
    function __construct($security)
    {
        $this->security = $security;
    }


    final public function sendJSON($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    /**
     * La methode render affiche la vue selectionnée grace au premier argument
     * La methode utilise les indirection pour generer dynamiquement les noms des variables
     * utilisées dans la vue.
     * 
     * @param string $pathToView chemin du fichier de vue demandé
     * @param array $datas La valeur par defaut permet de retourner des vues statiques
     */
    final public function render($pathToView, $datas = null)
    {
        $user = null;
        if (!is_null($this->security)) {
            $user = $this->security->acceptConnexion();
            $user = (!$user) ? null : $user;
        }
        if (is_array($datas)) {
            foreach ($datas as $key => $value) {
                $$key = $value;
            }
        }
        include './views/' . $pathToView . ".php";
    }
}