<?php

namespace Williams\ConnectshipBundle\AMP;

class DocumentResult
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
     * @var PrintItem $sourceItem
     */
    protected $sourceItem = null;

    /**
     * @var DocumentOutput $output
     */
    protected $output = null;

    /**
     * @param int $code
     * @param string $message
     */
    public function __construct($code, $message)
    {
      $this->code = $code;
      $this->message = $message;
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
     * @return \Williams\ConnectshipBundle\AMP\DocumentResult
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
     * @return \Williams\ConnectshipBundle\AMP\DocumentResult
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return PrintItem
     */
    public function getSourceItem()
    {
      return $this->sourceItem;
    }

    /**
     * @param PrintItem $sourceItem
     * @return \Williams\ConnectshipBundle\AMP\DocumentResult
     */
    public function setSourceItem($sourceItem)
    {
      $this->sourceItem = $sourceItem;
      return $this;
    }

    /**
     * @return DocumentOutput
     */
    public function getOutput()
    {
      return $this->output;
    }

    /**
     * @param DocumentOutput $output
     * @return \Williams\ConnectshipBundle\AMP\DocumentResult
     */
    public function setOutput($output)
    {
      $this->output = $output;
      return $this;
    }

}
