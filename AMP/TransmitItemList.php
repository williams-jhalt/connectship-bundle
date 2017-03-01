<?php

namespace Williams\ConnectshipBundle\AMP;

class TransmitItemList
{

    /**
     * @var TransmitItem[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransmitItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param TransmitItem[] $item
     * @return \Williams\ConnectshipBundle\AMP\TransmitItemList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
