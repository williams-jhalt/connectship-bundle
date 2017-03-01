<?php

namespace Williams\ConnectshipBundle\AMP;

class ModifyGroupRequest
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
     * @var string $groupIdentifier
     */
    protected $groupIdentifier = null;

    /**
     * @var DataDictionary $groupData
     */
    protected $groupData = null;

    /**
     * @var enumItem $status
     */
    protected $status = null;

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
     * @param string $grouping
     * @param string $groupIdentifier
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     */
    public function __construct($grouping, $groupIdentifier, $preProcess, $postProcess, $locale, $asyncCorrelationData)
    {
      $this->grouping = $grouping;
      $this->groupIdentifier = $groupIdentifier;
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
     */
    public function setGrouping($grouping)
    {
      $this->grouping = $grouping;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupIdentifier()
    {
      return $this->groupIdentifier;
    }

    /**
     * @param string $groupIdentifier
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
     */
    public function setGroupIdentifier($groupIdentifier)
    {
      $this->groupIdentifier = $groupIdentifier;
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
     */
    public function setGroupData($groupData)
    {
      $this->groupData = $groupData;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param enumItem $status
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyGroupRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
