<?php

namespace Williams\ConnectshipBundle\AMP;

class ShipFileList
{

    /**
     * @var ShipFile[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipFile[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ShipFile[] $item
     * @return \Williams\ConnectshipBundle\AMP\ShipFileList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
