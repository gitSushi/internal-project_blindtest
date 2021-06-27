<?php

namespace BWB\Framework\mvc\models;

/**
 * Description of DefaultModel
 *
 * @author loic
 */
class MinProduct
{
    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
