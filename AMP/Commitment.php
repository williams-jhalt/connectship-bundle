<?php

namespace Williams\ConnectshipBundle\AMP;

class Commitment
{

    /**
     * @var string $symbol
     */
    protected $symbol = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $days
     */
    protected $days = null;

    /**
     * @var time $time
     */
    protected $time = null;

    /**
     * @var int $comparisonValue
     */
    protected $comparisonValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return \Williams\ConnectshipBundle\AMP\Commitment
     */
    public function setSymbol($symbol)
    {
      $this->symbol = $symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Williams\ConnectshipBundle\AMP\Commitment
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
      return $this->days;
    }

    /**
     * @param int $days
     * @return \Williams\ConnectshipBundle\AMP\Commitment
     */
    public function setDays($days)
    {
      $this->days = $days;
      return $this;
    }

    /**
     * @return time
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param time $time
     * @return \Williams\ConnectshipBundle\AMP\Commitment
     */
    public function setTime($time)
    {
      $this->time = $time;
      return $this;
    }

    /**
     * @return int
     */
    public function getComparisonValue()
    {
      return $this->comparisonValue;
    }

    /**
     * @param int $comparisonValue
     * @return \Williams\ConnectshipBundle\AMP\Commitment
     */
    public function setComparisonValue($comparisonValue)
    {
      $this->comparisonValue = $comparisonValue;
      return $this;
    }

}
