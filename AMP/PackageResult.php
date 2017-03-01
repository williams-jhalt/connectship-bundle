<?php

namespace Williams\ConnectshipBundle\AMP;

class PackageResult
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
     * @var string $externalKey
     */
    protected $externalKey = null;

    /**
     * @param int $code
     * @param string $message
     * @param DataDictionary $resultData
     * @param string $externalKey
     */
    public function __construct($code, $message, $resultData, $externalKey)
    {
      $this->code = $code;
      $this->message = $message;
      $this->resultData = $resultData;
      $this->externalKey = $externalKey;
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
     * @return \Williams\ConnectshipBundle\AMP\PackageResult
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
     * @return \Williams\ConnectshipBundle\AMP\PackageResult
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
     * @return \Williams\ConnectshipBundle\AMP\PackageResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalKey()
    {
      return $this->externalKey;
    }

    /**
     * @param string $externalKey
     * @return \Williams\ConnectshipBundle\AMP\PackageResult
     */
    public function setExternalKey($externalKey)
    {
      $this->externalKey = $externalKey;
      return $this;
    }

}
