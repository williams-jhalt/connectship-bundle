<?php

namespace Williams\ConnectshipBundle\AMP;

class CloseOutRequest
{

    /**
     * @var string $carrier
     */
    protected $carrier = null;

    /**
     * @var string $shipper
     */
    protected $shipper = null;

    /**
     * @var string $closeOutItem
     */
    protected $closeOutItem = null;

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
     * @var contextControlSetting $contextControl
     */
    protected $contextControl = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param string $carrier
     * @param string $shipper
     * @param string $closeOutItem
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param contextControlSetting $contextControl
     * @param string $asyncCorrelationData
     */
    public function __construct($carrier, $shipper, $closeOutItem, $preProcess, $postProcess, $locale, $contextControl, $asyncCorrelationData)
    {
      $this->carrier = $carrier;
      $this->shipper = $shipper;
      $this->closeOutItem = $closeOutItem;
      $this->preProcess = $preProcess;
      $this->postProcess = $postProcess;
      $this->locale = $locale;
      $this->contextControl = $contextControl;
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
     * @return \Williams\ConnectshipBundle\AMP\CloseOutRequest
     */
    public function setCarrier($carrier)
    {
      $this->carrier = $carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param string $shipper
     * @return \Williams\ConnectshipBundle\AMP\CloseOutRequest
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return string
     */
    public function getCloseOutItem()
    {
      return $this->closeOutItem;
    }

    /**
     * @param string $closeOutItem
     * @return \Williams\ConnectshipBundle\AMP\CloseOutRequest
     */
    public function setCloseOutItem($closeOutItem)
    {
      $this->closeOutItem = $closeOutItem;
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
     * @return \Williams\ConnectshipBundle\AMP\CloseOutRequest
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
     * @return \Williams\ConnectshipBundle\AMP\CloseOutRequest
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
     * @return \Williams\ConnectshipBundle\AMP\CloseOutRequest
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return contextControlSetting
     */
    public function getContextControl()
    {
      return $this->contextControl;
    }

    /**
     * @param contextControlSetting $contextControl
     * @return \Williams\ConnectshipBundle\AMP\CloseOutRequest
     */
    public function setContextControl($contextControl)
    {
      $this->contextControl = $contextControl;
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
     * @return \Williams\ConnectshipBundle\AMP\CloseOutRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
