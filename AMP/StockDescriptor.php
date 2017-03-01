<?php

namespace Williams\ConnectshipBundle\AMP;

class StockDescriptor
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
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var boolean $topFirst
     */
    protected $topFirst = null;

    /**
     * @var PrintAreaList $printAreas
     */
    protected $printAreas = null;

    
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
     * @return \Williams\ConnectshipBundle\AMP\StockDescriptor
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
     * @return \Williams\ConnectshipBundle\AMP\StockDescriptor
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \Williams\ConnectshipBundle\AMP\StockDescriptor
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \Williams\ConnectshipBundle\AMP\StockDescriptor
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTopFirst()
    {
      return $this->topFirst;
    }

    /**
     * @param boolean $topFirst
     * @return \Williams\ConnectshipBundle\AMP\StockDescriptor
     */
    public function setTopFirst($topFirst)
    {
      $this->topFirst = $topFirst;
      return $this;
    }

    /**
     * @return PrintAreaList
     */
    public function getPrintAreas()
    {
      return $this->printAreas;
    }

    /**
     * @param PrintAreaList $printAreas
     * @return \Williams\ConnectshipBundle\AMP\StockDescriptor
     */
    public function setPrintAreas($printAreas)
    {
      $this->printAreas = $printAreas;
      return $this;
    }

}
