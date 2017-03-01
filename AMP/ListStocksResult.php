<?php

namespace Williams\ConnectshipBundle\AMP;

class ListStocksResult
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
     * @var StockDescriptorList $resultData
     */
    protected $resultData = null;

    /**
     * @param int $code
     * @param string $message
     * @param StockDescriptorList $resultData
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
     * @return \Williams\ConnectshipBundle\AMP\ListStocksResult
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
     * @return \Williams\ConnectshipBundle\AMP\ListStocksResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return StockDescriptorList
     */
    public function getResultData()
    {
      return $this->resultData;
    }

    /**
     * @param StockDescriptorList $resultData
     * @return \Williams\ConnectshipBundle\AMP\ListStocksResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

}
