<?php

namespace Williams\ConnectshipBundle\AMP;

class TransmitResult
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
     * @var TransmitItemResultList $resultData
     */
    protected $resultData = null;

    /**
     * @param int $code
     * @param string $message
     * @param TransmitItemResultList $resultData
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
     * @return \Williams\ConnectshipBundle\AMP\TransmitResult
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
     * @return \Williams\ConnectshipBundle\AMP\TransmitResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return TransmitItemResultList
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param TransmitItemResultList $resultData
     * @return \Williams\ConnectshipBundle\AMP\TransmitResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

}
