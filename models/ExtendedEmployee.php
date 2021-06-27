<?php

namespace BWB\Framework\mvc\models;

class ExtendedEmployee
{
    private $firstname, $lastname;

    function getFisrtname()
    {
        return $this->firstname;
    }

    function getLastame()
    {
        return $this->lastname;
    }

    function setFirstname($firstname)
    {
        return $this->firstname = $firstname;
    }
    function setLastname($lastname)
    {
        return $this->lastname = $lastname;
    }
}
