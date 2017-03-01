<?php

namespace Williams\ConnectshipBundle\AMP;

class SearchRequest
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
     * @var string $shipFile
     */
    protected $shipFile = null;

    /**
     * @var DataDictionary $filters
     */
    protected $filters = null;

    /**
     * @var DataDictionary $returnFields
     */
    protected $returnFields = null;

    /**
     * @var enumItem $searchCloseOutMode
     */
    protected $searchCloseOutMode = null;

    /**
     * @var enumItem $searchVoided
     */
    protected $searchVoided = null;

    /**
     * @var boolean $globalSearch
     */
    protected $globalSearch = null;

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
     * @param DataDictionary $filters
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param contextControlSetting $contextControl
     * @param string $asyncCorrelationData
     */
    public function __construct($carrier, $filters, $preProcess, $postProcess, $locale, $contextControl, $asyncCorrelationData)
    {
      $this->carrier = $carrier;
      $this->filters = $filters;
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
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
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
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipFile()
    {
      return $this->shipFile;
    }

    /**
     * @param string $shipFile
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
     */
    public function setShipFile($shipFile)
    {
      $this->shipFile = $shipFile;
      return $this;
    }

    /**
     * @return DataDictionary
     */
    public function getFilters()
    {
      return $this->filters;
    }

    /**
     * @param DataDictionary $filters
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
     */
    public function setFilters($filters)
    {
      $this->filters = $filters;
      return $this;
    }

    /**
     * @return DataDictionary
     */
    public function getReturnFields()
    {
      return $this->returnFields;
    }

    /**
     * @param DataDictionary $returnFields
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
     */
    public function setReturnFields($returnFields)
    {
      $this->returnFields = $returnFields;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getSearchCloseOutMode()
    {
      return $this->searchCloseOutMode;
    }

    /**
     * @param enumItem $searchCloseOutMode
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
     */
    public function setSearchCloseOutMode($searchCloseOutMode)
    {
      $this->searchCloseOutMode = $searchCloseOutMode;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getSearchVoided()
    {
      return $this->searchVoided;
    }

    /**
     * @param enumItem $searchVoided
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
     */
    public function setSearchVoided($searchVoided)
    {
      $this->searchVoided = $searchVoided;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGlobalSearch()
    {
      return $this->globalSearch;
    }

    /**
     * @param boolean $globalSearch
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
     */
    public function setGlobalSearch($globalSearch)
    {
      $this->globalSearch = $globalSearch;
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
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
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
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
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
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
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
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
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
     * @return \Williams\ConnectshipBundle\AMP\SearchRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
