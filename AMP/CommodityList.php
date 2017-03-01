<?php

namespace Williams\ConnectshipBundle\AMP;

class CommodityList
{

    /**
     * @var Commodity[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Commodity[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param Commodity[] $item
     * @return \Williams\ConnectshipBundle\AMP\CommodityList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
