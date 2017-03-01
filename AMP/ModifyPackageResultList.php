<?php

namespace Williams\ConnectshipBundle\AMP;

class ModifyPackageResultList
{

    /**
     * @var ModifyPackageResult[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyPackageResult[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ModifyPackageResult[] $item
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackageResultList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
