<?php

namespace BWB\Framework\mvc\models;

/**
 * Description of DefaultModel
 *
 * @author loic
 */
class ExtendedProduct
{
    public function getSerialNumber()
    {
        return $this->serial_number;
    }


    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }
}
