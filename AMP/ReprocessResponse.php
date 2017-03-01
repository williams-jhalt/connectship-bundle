<?php

namespace Williams\ConnectshipBundle\AMP;

class ReprocessResponse
{

    /**
     * @var ProcessResult $result
     */
    protected $result = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param ProcessResult $result
     * @param string $asyncCorrelationData
     */
    public function __construct($result, $asyncCorrelationData)
    {
      $this->result = $result;
      $this->asyncCorrelationData = $asyncCorrelationData;
    }

    /**
     * @return ProcessResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ProcessResult $result
     * @return \Williams\ConnectshipBundle\AMP\ReprocessResponse
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
     * @return \Williams\ConnectshipBundle\AMP\ReprocessResponse
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
