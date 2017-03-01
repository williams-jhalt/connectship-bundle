<?php

namespace Williams\ConnectshipBundle\AMP;

class PrintRequest
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
     * @var string $document
     */
    protected $document = null;

    /**
     * @var PrintItemList $itemList
     */
    protected $itemList = null;

    /**
     * @var string $output
     */
    protected $output = null;

    /**
     * @var string $destination
     */
    protected $destination = null;

    /**
     * @var StockDescriptor $stock
     */
    protected $stock = null;

    /**
     * @var Dictionary $documentOptions
     */
    protected $documentOptions = null;

    /**
     * @var Dictionary $outputOptions
     */
    protected $outputOptions = null;

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
     * @var boolean $splitMultipage
     */
    protected $splitMultipage = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param string $document
     * @param StockDescriptor $stock
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param boolean $splitMultipage
     * @param string $asyncCorrelationData
     */
    public function __construct($document, $stock, $preProcess, $postProcess, $locale, $splitMultipage, $asyncCorrelationData)
    {
      $this->document = $document;
      $this->stock = $stock;
      $this->preProcess = $preProcess;
      $this->postProcess = $postProcess;
      $this->locale = $locale;
      $this->splitMultipage = $splitMultipage;
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
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
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
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocument()
    {
      return $this->document;
    }

    /**
     * @param string $document
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setDocument($document)
    {
      $this->document = $document;
      return $this;
    }

    /**
     * @return PrintItemList
     */
    public function getItemList()
    {
      return $this->itemList;
    }

    /**
     * @param PrintItemList $itemList
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setItemList($itemList)
    {
      $this->itemList = $itemList;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
      return $this->output;
    }

    /**
     * @param string $output
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setOutput($output)
    {
      $this->output = $output;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
      return $this->destination;
    }

    /**
     * @param string $destination
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setDestination($destination)
    {
      $this->destination = $destination;
      return $this;
    }

    /**
     * @return StockDescriptor
     */
    public function getStock()
    {
      return $this->stock;
    }

    /**
     * @param StockDescriptor $stock
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setStock($stock)
    {
      $this->stock = $stock;
      return $this;
    }

    /**
     * @return Dictionary
     */
    public function getDocumentOptions()
    {
      return $this->documentOptions;
    }

    /**
     * @param Dictionary $documentOptions
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setDocumentOptions($documentOptions)
    {
      $this->documentOptions = $documentOptions;
      return $this;
    }

    /**
     * @return Dictionary
     */
    public function getOutputOptions()
    {
      return $this->outputOptions;
    }

    /**
     * @param Dictionary $outputOptions
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setOutputOptions($outputOptions)
    {
      $this->outputOptions = $outputOptions;
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
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
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
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
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
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSplitMultipage()
    {
      return $this->splitMultipage;
    }

    /**
     * @param boolean $splitMultipage
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setSplitMultipage($splitMultipage)
    {
      $this->splitMultipage = $splitMultipage;
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
     * @return \Williams\ConnectshipBundle\AMP\PrintRequest
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
