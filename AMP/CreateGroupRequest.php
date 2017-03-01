<?php

namespace Williams\ConnectshipBundle\AMP;

class CreateGroupRequest
{

    /**
     * @var string $carrier
     */
    protected $carrier = null;

    /**
     * @var string $grouping
     */
    protected $grouping = null;

    /**
     * @var DataDictionary $groupData
     */
    protected $groupData = null;

    /**
     * @var string $preProcess
     */
    protected $preProcess = null;

    /**
     * @var string $postProcess
     */
    protected $postProcess = null;

    /**
     * @var language $locale
     */
    protected $locale = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param string $carrier
     * @param string $grouping
     * @param DataDictionary $groupData
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     */
    public function __construct($carrier, $grouping, $groupData, $preProcess, $postProcess, $locale, $asyncCorrelationData)
    {
      $this->carrier = $carrier;
      $this->grouping = $grouping;
      $this->groupData = $groupData;
      $this->preProcess = $preProcess;
      $this->postProcess = $postProcess;
      $this->locale = $locale;
      $this->asyncCorrelationData = $asyncCorrelationData;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->carrier;
    }

    /**
     * @param string $carrier
     * @return \Williams\ConnectshipBundle\AMP\CreateGroupRequest
     */
    public function setCarrier($carrier)
    {
      $this->carrier = $carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getGrouping()
    {
      return $this->grouping;
    }

    /**
     * @param string $grouping
     * @return \Williams\ConnectshipBundle\AMP\CreateGroupRequest
     */
    public function setGrouping($grouping)
    {
      $this->grouping = $grouping;
      return $this;
    }

    /**
     * @return DataDictionary
     */
    public function getGroupData()
    {
      return $this->groupData;
    }

    /**
     * @param DataDictionary $groupData
     * @return \Williams\ConnectshipBundle\AMP\CreateGroupRequest
     */
    public function setGroupData($groupData)
    {
      $this->groupData = $groupData;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreProcess()
    {
      return $this->preProcess;
    }

    /**
     * @param string $preProcess
     * @return \Williams\ConnectshipBundle\AMP\CreateGroupRequest
     */
    public function setPreProcess($preProcess)
    {
      $this->preProcess = $preProcess;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostProcess()
    {
      return $this->postProcess;
    }

    /**
     * @param string $postProcess
     * @return \Williams\ConnectshipBundle\AMP\CreateGroupRequest
     */
    public function setPostProcess($postProcess)
    {
      $this->postProcess = $postProcess;
      return $this;
    }

    /**
     * @return language
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param language $locale
     * @return \Williams\ConnectshipBundle\AMP\CreateGroupRequest
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsyncCorrelationData()
    {
      return $this->asyncCorrelationData;
    }

    /**
     * @param string $asyncCorrelationData
     * @return \Williams\ConnectshipBundle\AMP\CreateGroupRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
