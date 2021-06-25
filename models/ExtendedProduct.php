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
class ExtendedProduct {
    public function getSerialNumber() {
        return $this->serial_number;
    }
    

    public function setSerialNumber($serialNumber) {
        $this->serialNumber = $serialNumber;
    }

  

    
}
