<?php

class MinEmployee {
    private $id, $reference_employee;

    function getId(){
        return $this->id;
    }

    function getReference(){
        return $this->reference_employee;
    }
    
    function setReference($reference_employee){
        return $this->reference_employee = $reference_employee;
    }
}
