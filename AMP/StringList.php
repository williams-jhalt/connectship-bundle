<?php

namespace Williams\ConnectshipBundle\AMP;

class StringList
{

    /**
     * @var string[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param string[] $item
     * @return \Williams\ConnectshipBundle\AMP\StringList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
