<?php

namespace Williams\ConnectshipBundle\AMP;

class ModifyPackagesRequest
{

    /**
     * @var string $carrier
     */
    protected $carrier = null;

    /**
     * @var IntegerList $packages
     */
    protected $packages = null;

    /**
     * @var DataDictionary $packageData
     */
    protected $packageData = null;

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
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     */
    public function __construct($preProcess, $postProcess, $locale, $asyncCorrelationData)
    {
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackagesRequest
     */
    public function setCarrier($carrier)
    {
      $this->carrier = $carrier;
      return $this;
    }

    /**
     * @return IntegerList
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param IntegerList $packages
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackagesRequest
     */
    public function setPackages($packages)
    {
      $this->packages = $packages;
      return $this;
    }

    /**
     * @return DataDictionary
     */
    public function getPackageData()
    {
      return $this->packageData;
    }

    /**
     * @param DataDictionary $packageData
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackagesRequest
     */
    public function setPackageData($packageData)
    {
      $this->packageData = $packageData;
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackagesRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackagesRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackagesRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackagesRequest
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
     * @return \Williams\ConnectshipBundle\AMP\ModifyPackagesRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
