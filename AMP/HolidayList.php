<?php

namespace Williams\ConnectshipBundle\AMP;

class HolidayList
{

    /**
     * @var Holiday[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Holiday[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param Holiday[] $item
     * @return \Williams\ConnectshipBundle\AMP\HolidayList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
