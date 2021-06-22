<?php
namespace BWB\Framework\mvc\models;
use BWB\Framework\mvc\UserInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultModel
 *
 * @author loic
 */
class MinProduct {
    public function getID() {
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
}
