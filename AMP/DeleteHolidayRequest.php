<?php

namespace Williams\ConnectshipBundle\AMP;

class DeleteHolidayRequest
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
     * @var string $holidaySymbol
     */
    protected $holidaySymbol = null;

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
     * @param string $holidaySymbol
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     */
    public function __construct($carrier, $countrySymbol, $holidaySymbol, $preProcess, $postProcess, $locale, $asyncCorrelationData)
    {
      $this->carrier = $carrier;
      $this->countrySymbol = $countrySymbol;
      $this->holidaySymbol = $holidaySymbol;
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
     * @return \Williams\ConnectshipBundle\AMP\DeleteHolidayRequest
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
     * @return \Williams\ConnectshipBundle\AMP\DeleteHolidayRequest
     */
    public function setCountrySymbol($countrySymbol)
    {
      $this->countrySymbol = $countrySymbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getHolidaySymbol()
    {
      return $this->holidaySymbol;
    }

    /**
     * @param string $holidaySymbol
     * @return \Williams\ConnectshipBundle\AMP\DeleteHolidayRequest
     */
    public function setHolidaySymbol($holidaySymbol)
    {
      $this->holidaySymbol = $holidaySymbol;
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
     * @return \Williams\ConnectshipBundle\AMP\DeleteHolidayRequest
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
     * @return \Williams\ConnectshipBundle\AMP\DeleteHolidayRequest
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
     * @return \Williams\ConnectshipBundle\AMP\DeleteHolidayRequest
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
     * @return \Williams\ConnectshipBundle\AMP\DeleteHolidayRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
