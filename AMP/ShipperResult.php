<?php

namespace Williams\ConnectshipBundle\AMP;

class ShipperResult
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
     * @var ShipperInformation $resultData
     */
    protected $resultData = null;

    /**
     * @param int $code
     * @param string $message
     * @param ShipperInformation $resultData
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
     * @return \Williams\ConnectshipBundle\AMP\ShipperResult
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
     * @return \Williams\ConnectshipBundle\AMP\ShipperResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return ShipperInformation
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param ShipperInformation $resultData
     * @return \Williams\ConnectshipBundle\AMP\ShipperResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

}
