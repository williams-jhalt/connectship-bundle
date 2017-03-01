<?php

namespace Williams\ConnectshipBundle\AMP;

class CloseOutResult
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var DataDictionary $resultData
     */
    protected $resultData = null;

    /**
     * @var ShipFile $shipFile
     */
    protected $shipFile = null;

    /**
     * @var TransmitItemList $transmitItemList
     */
    protected $transmitItemList = null;

    /**
     * @param int $code
     * @param string $message
     * @param DataDictionary $resultData
     */
    public function __construct($code, $message, $resultData)
    {
      $this->code = $code;
      $this->message = $message;
      $this->resultData = $resultData;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \Williams\ConnectshipBundle\AMP\CloseOutResult
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Williams\ConnectshipBundle\AMP\CloseOutResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return DataDictionary
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param DataDictionary $resultData
     * @return \Williams\ConnectshipBundle\AMP\CloseOutResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

    /**
     * @return ShipFile
     */
    public function getShipFile()
    {
      return $this->shipFile;
    }

    /**
     * @param ShipFile $shipFile
     * @return \Williams\ConnectshipBundle\AMP\CloseOutResult
     */
    public function setShipFile($shipFile)
    {
      $this->shipFile = $shipFile;
      return $this;
    }

    /**
     * @return TransmitItemList
     */
    public function getTransmitItemList()
    {
      return $this->transmitItemList;
    }

    /**
     * @param TransmitItemList $transmitItemList
     * @return \Williams\ConnectshipBundle\AMP\CloseOutResult
     */
    public function setTransmitItemList($transmitItemList)
    {
      $this->transmitItemList = $transmitItemList;
      return $this;
    }

}
