<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\Controller;
use BWB\Framework\mvc\dao\DAOTestHistory;

class TestController extends SecurizedController
{
    function __construct()
    {
        parent::__construct();
    }

    public function getTests()
    {
        $this->render("testHistoryView", ["datas" => (new DAOTestHistory())->getAll()]);
    }

    public function showMenu()
    {
        $this->render("menu");
    }
}
