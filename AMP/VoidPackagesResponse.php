<?php

namespace Williams\ConnectshipBundle\AMP;

class VoidPackagesResponse
{

    /**
     * @var VoidResult $result
     */
    protected $result = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param VoidResult $result
     * @param string $asyncCorrelationData
     */
    public function __construct($result, $asyncCorrelationData)
    {
      $this->result = $result;
      $this->asyncCorrelationData = $asyncCorrelationData;
    }

    /**
     * @return VoidResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param VoidResult $result
     * @return \Williams\ConnectshipBundle\AMP\VoidPackagesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
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
     * @return \Williams\ConnectshipBundle\AMP\VoidPackagesResponse
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
