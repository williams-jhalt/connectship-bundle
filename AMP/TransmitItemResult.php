<?php

namespace Williams\ConnectshipBundle\AMP;

class TransmitItemResult
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
     * @var Identity $transmitItem
     */
    protected $transmitItem = null;

    /**
     * @param int $code
     * @param string $message
     * @param Identity $transmitItem
     */
    public function __construct($code, $message, $transmitItem)
    {
      $this->code = $code;
      $this->message = $message;
      $this->transmitItem = $transmitItem;
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
     * @return \Williams\ConnectshipBundle\AMP\TransmitItemResult
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
     * @return \Williams\ConnectshipBundle\AMP\TransmitItemResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return Identity
     */
    public function getTransmitItem()
    {
      return $this->transmitItem;
    }

    /**
     * @param Identity $transmitItem
     * @return \Williams\ConnectshipBundle\AMP\TransmitItemResult
     */
    public function setTransmitItem($transmitItem)
    {
      $this->transmitItem = $transmitItem;
      return $this;
    }

}
