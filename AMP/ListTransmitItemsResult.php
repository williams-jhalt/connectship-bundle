<?php

namespace Williams\ConnectshipBundle\AMP;

class ListTransmitItemsResult
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
     * @var TransmitItemList $resultData
     */
    protected $resultData = null;

    /**
     * @param int $code
     * @param string $message
     * @param TransmitItemList $resultData
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
     * @return \Williams\ConnectshipBundle\AMP\ListTransmitItemsResult
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
     * @return \Williams\ConnectshipBundle\AMP\ListTransmitItemsResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return TransmitItemList
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param TransmitItemList $resultData
     * @return \Williams\ConnectshipBundle\AMP\ListTransmitItemsResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

}
