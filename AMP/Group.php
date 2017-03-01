<?php

namespace Williams\ConnectshipBundle\AMP;

class Group
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
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var date $dateOpened
     */
    protected $dateOpened = null;

    /**
     * @var DataDictionary $data
     */
    protected $data = null;

    
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
     * @return \Williams\ConnectshipBundle\AMP\Group
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
     * @return \Williams\ConnectshipBundle\AMP\Group
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \Williams\ConnectshipBundle\AMP\Group
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param int $status
     * @return \Williams\ConnectshipBundle\AMP\Group
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateOpened()
    {
      return $this->dateOpened;
    }

    /**
     * @param date $dateOpened
     * @return \Williams\ConnectshipBundle\AMP\Group
     */
    public function setDateOpened($dateOpened)
    {
      $this->dateOpened = $dateOpened;
      return $this;
    }

    /**
     * @return DataDictionary
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param DataDictionary $data
     * @return \Williams\ConnectshipBundle\AMP\Group
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
