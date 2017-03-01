<?php

namespace Williams\ConnectshipBundle\AMP;

class ShipRequest
{

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var DataDictionary $defaults
     */
    protected $defaults = null;

    /**
     * @var DataDictionaryList $packages
     */
    protected $packages = null;

    /**
     * @var boolean $saveTransaction
     */
    protected $saveTransaction = null;

    /**
     * @var enumItem $closeOutMode
     */
    protected $closeOutMode = null;

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
     * @param string $service
     * @param DataDictionary $defaults
     * @param DataDictionaryList $packages
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param contextControlSetting $contextControl
     * @param string $asyncCorrelationData
     */
    public function __construct($service, $defaults, $packages, $preProcess, $postProcess, $locale, $contextControl, $asyncCorrelationData)
    {
      $this->service = $service;
      $this->defaults = $defaults;
      $this->packages = $packages;
      $this->preProcess = $preProcess;
      $this->postProcess = $postProcess;
      $this->locale = $locale;
      $this->contextControl = $contextControl;
      $this->asyncCorrelationData = $asyncCorrelationData;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return DataDictionary
     */
    public function getDefaults()
    {
      return $this->defaults;
    }

    /**
     * @param DataDictionary $defaults
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
     */
    public function setDefaults($defaults)
    {
      $this->defaults = $defaults;
      return $this;
    }

    /**
     * @return DataDictionaryList
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param DataDictionaryList $packages
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
     */
    public function setPackages($packages)
    {
      $this->packages = $packages;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaveTransaction()
    {
      return $this->saveTransaction;
    }

    /**
     * @param boolean $saveTransaction
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
     */
    public function setSaveTransaction($saveTransaction)
    {
      $this->saveTransaction = $saveTransaction;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getCloseOutMode()
    {
      return $this->closeOutMode;
    }

    /**
     * @param enumItem $closeOutMode
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
     */
    public function setCloseOutMode($closeOutMode)
    {
      $this->closeOutMode = $closeOutMode;
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
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ShipRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
