<?php

namespace Williams\ConnectshipBundle\AMP;

class Dictionary extends CollectionBase
{

    /**
     * @var DictionaryItem[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DictionaryItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param DictionaryItem[] $item
     * @return \Williams\ConnectshipBundle\AMP\Dictionary
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
