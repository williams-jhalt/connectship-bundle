<?php

namespace Williams\ConnectshipBundle\AMP;

class AddHolidayRequest
{

    /**
     * @var string $carrier
     */
    protected $carrier = null;

    /**
     * @var string $countrySymbol
     */
    protected $countrySymbol = null;

    /**
     * @var string $friendlyName
     */
    protected $friendlyName = null;

    /**
     * @var date $date
     */
    protected $date = null;

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
     * @param string $countrySymbol
     * @param string $friendlyName
     * @param date $date
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     */
    public function __construct($carrier, $countrySymbol, $friendlyName, $date, $preProcess, $postProcess, $locale, $asyncCorrelationData)
    {
      $this->carrier = $carrier;
      $this->countrySymbol = $countrySymbol;
      $this->friendlyName = $friendlyName;
      $this->date = $date;
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
     * @return \Williams\ConnectshipBundle\AMP\AddHolidayRequest
     */
    public function setCarrier($carrier)
    {
      $this->carrier = $carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountrySymbol()
    {
      return $this->countrySymbol;
    }

    /**
     * @param string $countrySymbol
     * @return \Williams\ConnectshipBundle\AMP\AddHolidayRequest
     */
    public function setCountrySymbol($countrySymbol)
    {
      $this->countrySymbol = $countrySymbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyName()
    {
      return $this->friendlyName;
    }

    /**
     * @param string $friendlyName
     * @return \Williams\ConnectshipBundle\AMP\AddHolidayRequest
     */
    public function setFriendlyName($friendlyName)
    {
      $this->friendlyName = $friendlyName;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param date $date
     * @return \Williams\ConnectshipBundle\AMP\AddHolidayRequest
     */
    public function setDate($date)
    {
      $this->date = $date;
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
     * @return \Williams\ConnectshipBundle\AMP\AddHolidayRequest
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
     * @return \Williams\ConnectshipBundle\AMP\AddHolidayRequest
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
     * @return \Williams\ConnectshipBundle\AMP\AddHolidayRequest
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
     * @return \Williams\ConnectshipBundle\AMP\AddHolidayRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
