<?php

namespace Williams\ConnectshipBundle\AMP;

class Volume
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var unit $unit
     */
    protected $unit = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Williams\ConnectshipBundle\AMP\Volume
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return unit
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param unit $unit
     * @return \Williams\ConnectshipBundle\AMP\Volume
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Williams\ConnectshipBundle\AMP\Volume
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
