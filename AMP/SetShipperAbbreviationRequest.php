<?php

namespace Williams\ConnectshipBundle\AMP;

class SetShipperAbbreviationRequest
{

    /**
     * @var string $shipper
     */
    protected $shipper = null;

    /**
     * @var string $abbreviation
     */
    protected $abbreviation = null;

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
     * @param string $shipper
     * @param string $abbreviation
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     */
    public function __construct($shipper, $abbreviation, $preProcess, $postProcess, $locale, $asyncCorrelationData)
    {
      $this->shipper = $shipper;
      $this->abbreviation = $abbreviation;
      $this->preProcess = $preProcess;
      $this->postProcess = $postProcess;
      $this->locale = $locale;
      $this->asyncCorrelationData = $asyncCorrelationData;
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
     * @return \Williams\ConnectshipBundle\AMP\SetShipperAbbreviationRequest
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
      return $this->abbreviation;
    }

    /**
     * @param string $abbreviation
     * @return \Williams\ConnectshipBundle\AMP\SetShipperAbbreviationRequest
     */
    public function setAbbreviation($abbreviation)
    {
      $this->abbreviation = $abbreviation;
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
     * @return \Williams\ConnectshipBundle\AMP\SetShipperAbbreviationRequest
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
     * @return \Williams\ConnectshipBundle\AMP\SetShipperAbbreviationRequest
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
     * @return \Williams\ConnectshipBundle\AMP\SetShipperAbbreviationRequest
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
     * @return \Williams\ConnectshipBundle\AMP\SetShipperAbbreviationRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
