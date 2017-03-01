<?php

namespace Williams\ConnectshipBundle\AMP;

class SearchPackageResultList
{

    /**
     * @var SearchPackageResult[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchPackageResult[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchPackageResult[] $item
     * @return \Williams\ConnectshipBundle\AMP\SearchPackageResultList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
