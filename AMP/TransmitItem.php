<?php

namespace Williams\ConnectshipBundle\AMP;

class TransmitItem
{

    /**
     * @var string $symbol
     */
    protected $symbol = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $sequence
     */
    protected $sequence = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var StringList $files
     */
    protected $files = null;

    /**
     * @param string $symbol
     * @param string $name
     * @param int $sequence
     * @param int $status
     * @param StringList $files
     */
    public function __construct($symbol, $name, $sequence, $status, $files)
    {
      $this->symbol = $symbol;
      $this->name = $name;
      $this->sequence = $sequence;
      $this->status = $status;
      $this->files = $files;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return \Williams\ConnectshipBundle\AMP\TransmitItem
     */
    public function setSymbol($symbol)
    {
      $this->symbol = $symbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Williams\ConnectshipBundle\AMP\TransmitItem
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
      return $this->sequence;
    }

    /**
     * @param int $sequence
     * @return \Williams\ConnectshipBundle\AMP\TransmitItem
     */
    public function setSequence($sequence)
    {
      $this->sequence = $sequence;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param int $status
     * @return \Williams\ConnectshipBundle\AMP\TransmitItem
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return StringList
     */
    public function getFiles()
    {
      return $this->files;
    }

    /**
     * @param StringList $files
     * @return \Williams\ConnectshipBundle\AMP\TransmitItem
     */
    public function setFiles($files)
    {
      $this->files = $files;
      return $this;
    }

}
