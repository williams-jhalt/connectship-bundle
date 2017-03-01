<?php

namespace Williams\ConnectshipBundle\AMP;

class VoidResult
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
     * @var VoidPackageResultList $resultData
     */
    protected $resultData = null;

    /**
     * @var IntegerList $additionalVoidedPackages
     */
    protected $additionalVoidedPackages = null;

    /**
     * @var IntegerList $modifiedPackages
     */
    protected $modifiedPackages = null;

    /**
     * @param int $code
     * @param string $message
     * @param VoidPackageResultList $resultData
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
     * @return \Williams\ConnectshipBundle\AMP\VoidResult
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
     * @return \Williams\ConnectshipBundle\AMP\VoidResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return VoidPackageResultList
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param VoidPackageResultList $resultData
     * @return \Williams\ConnectshipBundle\AMP\VoidResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

    /**
     * @return IntegerList
     */
    public function getAdditionalVoidedPackages()
    {
      return $this->additionalVoidedPackages;
    }

    /**
     * @param IntegerList $additionalVoidedPackages
     * @return \Williams\ConnectshipBundle\AMP\VoidResult
     */
    public function setAdditionalVoidedPackages($additionalVoidedPackages)
    {
      $this->additionalVoidedPackages = $additionalVoidedPackages;
      return $this;
    }

    /**
     * @return IntegerList
     */
    public function getModifiedPackages()
    {
      return $this->modifiedPackages;
    }

    /**
     * @param IntegerList $modifiedPackages
     * @return \Williams\ConnectshipBundle\AMP\VoidResult
     */
    public function setModifiedPackages($modifiedPackages)
    {
      $this->modifiedPackages = $modifiedPackages;
      return $this;
    }

}
