<?php

namespace Williams\ConnectshipBundle\AMP;

class RateRequest
{

    /**
     * @var ServiceList $services
     */
    protected $services = null;

    /**
     * @var DataDictionary $defaults
     */
    protected $defaults = null;

    /**
     * @var DataDictionaryList $packages
     */
    protected $packages = null;

    /**
     * @var enumItem $sortType
     */
    protected $sortType = null;

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
     * @param ServiceList $services
     * @param DataDictionary $defaults
     * @param DataDictionaryList $packages
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     */
    public function __construct($services, $defaults, $packages, $preProcess, $postProcess, $locale, $asyncCorrelationData)
    {
      $this->services = $services;
      $this->defaults = $defaults;
      $this->packages = $packages;
      $this->preProcess = $preProcess;
      $this->postProcess = $postProcess;
      $this->locale = $locale;
      $this->asyncCorrelationData = $asyncCorrelationData;
    }

    /**
     * @return ServiceList
     */
    public function getServices()
    {
      return $this->services;
    }

    /**
     * @param ServiceList $services
     * @return \Williams\ConnectshipBundle\AMP\RateRequest
     */
    public function setServices($services)
    {
      $this->services = $services;
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
     * @return \Williams\ConnectshipBundle\AMP\RateRequest
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
     * @return \Williams\ConnectshipBundle\AMP\RateRequest
     */
    public function setPackages($packages)
    {
      $this->packages = $packages;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getSortType()
    {
      return $this->sortType;
    }

    /**
     * @param enumItem $sortType
     * @return \Williams\ConnectshipBundle\AMP\RateRequest
     */
    public function setSortType($sortType)
    {
      $this->sortType = $sortType;
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
     * @return \Williams\ConnectshipBundle\AMP\RateRequest
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
     * @return \Williams\ConnectshipBundle\AMP\RateRequest
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
     * @return \Williams\ConnectshipBundle\AMP\RateRequest
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
     * @return \Williams\ConnectshipBundle\AMP\RateRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
