<?php

namespace Williams\ConnectshipBundle\AMP;

class IdentityListResult
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
     * @var IdentityList $resultData
     */
    protected $resultData = null;

    /**
     * @param int $code
     * @param string $message
     * @param IdentityList $resultData
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
     * @return \Williams\ConnectshipBundle\AMP\IdentityListResult
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
     * @return \Williams\ConnectshipBundle\AMP\IdentityListResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return IdentityList
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param IdentityList $resultData
     * @return \Williams\ConnectshipBundle\AMP\IdentityListResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

}
