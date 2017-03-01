<?php

namespace Williams\ConnectshipBundle\AMP;

class ShipperInformation
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $abbreviation
     */
    protected $abbreviation = null;

    /**
     * @var NameAddress $address
     */
    protected $address = null;

    /**
     * @param int $id
     * @param string $abbreviation
     * @param NameAddress $address
     */
    public function __construct($id, $abbreviation, $address)
    {
      $this->id = $id;
      $this->abbreviation = $abbreviation;
      $this->address = $address;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Williams\ConnectshipBundle\AMP\ShipperInformation
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
      return $this->abbreviation;
    }

    /**
     * @param string $abbreviation
     * @return \Williams\ConnectshipBundle\AMP\ShipperInformation
     */
    public function setAbbreviation($abbreviation)
    {
      $this->abbreviation = $abbreviation;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param NameAddress $address
     * @return \Williams\ConnectshipBundle\AMP\ShipperInformation
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
