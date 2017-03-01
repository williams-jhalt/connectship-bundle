<?php

namespace Williams\ConnectshipBundle\AMP;

class ShipFile
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
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var Dictionary $attributes
     */
    protected $attributes = null;

    /**
     * @param string $symbol
     * @param string $name
     * @param int $sequence
     * @param Dictionary $attributes
     */
    public function __construct($symbol, $name, $sequence, $attributes)
    {
      $this->symbol = $symbol;
      $this->name = $name;
      $this->sequence = $sequence;
      $this->attributes = $attributes;
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
     * @return \Williams\ConnectshipBundle\AMP\ShipFile
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
     * @return \Williams\ConnectshipBundle\AMP\ShipFile
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param int $sequence
     * @return \Williams\ConnectshipBundle\AMP\ShipFile
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return Dictionary
     */
    public function getAttributes()
    {
      return $this->attributes;
    }

    /**
     * @param Dictionary $attributes
     * @return \Williams\ConnectshipBundle\AMP\ShipFile
     */
    public function setAttributes($attributes)
    {
      $this->attributes = $attributes;
      return $this;
    }

}
