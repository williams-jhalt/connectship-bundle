<?php

namespace Williams\ConnectshipBundle\AMP;

class GroupList
{

    /**
     * @var Group[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Group[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param Group[] $item
     * @return \Williams\ConnectshipBundle\AMP\GroupList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
