<?php

namespace Williams\ConnectshipBundle\AMP;

class GroupResult
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
     * @var Group $resultData
     */
    protected $resultData = null;

    /**
     * @param int $code
     * @param string $message
     * @param Group $resultData
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
     * @return \Williams\ConnectshipBundle\AMP\GroupResult
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
     * @return \Williams\ConnectshipBundle\AMP\GroupResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return Group
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param Group $resultData
     * @return \Williams\ConnectshipBundle\AMP\GroupResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

}
