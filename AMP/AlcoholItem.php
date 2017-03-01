<?php

namespace Williams\ConnectshipBundle\AMP;

class AlcoholItem
{

    /**
     * @var enumItem $alcoholPackaging
     */
    protected $alcoholPackaging = null;

    /**
     * @var int $alcoholQuantity
     */
    protected $alcoholQuantity = null;

    /**
     * @var enumItem $alcoholRecipientType
     */
    protected $alcoholRecipientType = null;

    /**
     * @var enumItem $alcoholType
     */
    protected $alcoholType = null;

    /**
     * @var Volume $alcoholVolume
     */
    protected $alcoholVolume = null;

    /**
     * @var anyType $userData1
     */
    protected $userData1 = null;

    /**
     * @var anyType $userData2
     */
    protected $userData2 = null;

    /**
     * @var anyType $userData3
     */
    protected $userData3 = null;

    /**
     * @var anyType $userData4
     */
    protected $userData4 = null;

    /**
     * @var anyType $userData5
     */
    protected $userData5 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return enumItem
     */
    public function getAlcoholPackaging()
    {
      return $this->alcoholPackaging;
    }

    /**
     * @param enumItem $alcoholPackaging
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setAlcoholPackaging($alcoholPackaging)
    {
      $this->alcoholPackaging = $alcoholPackaging;
      return $this;
    }

    /**
     * @return int
     */
    public function getAlcoholQuantity()
    {
      return $this->alcoholQuantity;
    }

    /**
     * @param int $alcoholQuantity
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setAlcoholQuantity($alcoholQuantity)
    {
      $this->alcoholQuantity = $alcoholQuantity;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getAlcoholRecipientType()
    {
      return $this->alcoholRecipientType;
    }

    /**
     * @param enumItem $alcoholRecipientType
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setAlcoholRecipientType($alcoholRecipientType)
    {
      $this->alcoholRecipientType = $alcoholRecipientType;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getAlcoholType()
    {
      return $this->alcoholType;
    }

    /**
     * @param enumItem $alcoholType
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setAlcoholType($alcoholType)
    {
      $this->alcoholType = $alcoholType;
      return $this;
    }

    /**
     * @return Volume
     */
    public function getAlcoholVolume()
    {
      return $this->alcoholVolume;
    }

    /**
     * @param Volume $alcoholVolume
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setAlcoholVolume($alcoholVolume)
    {
      $this->alcoholVolume = $alcoholVolume;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData1()
    {
      return $this->userData1;
    }

    /**
     * @param anyType $userData1
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setUserData1($userData1)
    {
      $this->userData1 = $userData1;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData2()
    {
      return $this->userData2;
    }

    /**
     * @param anyType $userData2
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setUserData2($userData2)
    {
      $this->userData2 = $userData2;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData3()
    {
      return $this->userData3;
    }

    /**
     * @param anyType $userData3
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setUserData3($userData3)
    {
      $this->userData3 = $userData3;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData4()
    {
      return $this->userData4;
    }

    /**
     * @param anyType $userData4
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setUserData4($userData4)
    {
      $this->userData4 = $userData4;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData5()
    {
      return $this->userData5;
    }

    /**
     * @param anyType $userData5
     * @return \Williams\ConnectshipBundle\AMP\AlcoholItem
     */
    public function setUserData5($userData5)
    {
      $this->userData5 = $userData5;
      return $this;
    }

}
