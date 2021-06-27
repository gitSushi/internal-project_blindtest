<?php

namespace BWB\Framework\mvc\models;

/**
 * Description of TestModel
 *
 * @author loic
 */
class TestModel
{
    private $id, $name, $description, $minimum_value, $maximum_value;
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getMinimumValue()
    {
        return $this->minimum_value;
    }
    public function getMaximumValue()
    {
        return $this->maximum_value;
    }
    public function getPercentage()
    {
        return $this->percentage;
    }
    // public function getIsTestPassed()
    // {
    //     return $this->is_test_passed;
    // }
}
