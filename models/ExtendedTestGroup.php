<?php

class ExtendedTestGroup
{

    private $description, $last_date_tested;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function getLastDateTested()
    {
        return $this->last_date_tested;
    }

    public function setLastDateTested($lastDateTested)
    {
        return $this->last_date_tested = $lastDateTested;
    }
}
