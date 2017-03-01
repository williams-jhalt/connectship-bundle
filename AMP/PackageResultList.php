<?php

namespace Williams\ConnectshipBundle\AMP;

class PackageResultList
{

    /**
     * @var PackageResult[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageResult[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PackageResult[] $item
     * @return \Williams\ConnectshipBundle\AMP\PackageResultList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
