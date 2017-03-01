<?php

namespace Williams\ConnectshipBundle\AMP;

class PrintItem
{

    /**
     * @var int $msn
     */
    protected $msn = null;

    /**
     * @var int $bundleId
     */
    protected $bundleId = null;

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var string $containerCode
     */
    protected $containerCode = null;

    /**
     * @var string $shipFileSymbol
     */
    protected $shipFileSymbol = null;

    /**
     * @param int $msn
     * @param int $bundleId
     * @param int $groupId
     * @param string $containerCode
     * @param string $shipFileSymbol
     */
    public function __construct($msn, $bundleId, $groupId, $containerCode, $shipFileSymbol)
    {
      $this->msn = $msn;
      $this->bundleId = $bundleId;
      $this->groupId = $groupId;
      $this->containerCode = $containerCode;
      $this->shipFileSymbol = $shipFileSymbol;
    }

    /**
     * @return int
     */
    public function getMsn()
    {
      return $this->msn;
    }

    /**
     * @param int $msn
     * @return \Williams\ConnectshipBundle\AMP\PrintItem
     */
    public function setMsn($msn)
    {
      $this->msn = $msn;
      return $this;
    }

    /**
     * @return int
     */
    public function getBundleId()
    {
      return $this->bundleId;
    }

    /**
     * @param int $bundleId
     * @return \Williams\ConnectshipBundle\AMP\PrintItem
     */
    public function setBundleId($bundleId)
    {
      $this->bundleId = $bundleId;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return \Williams\ConnectshipBundle\AMP\PrintItem
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerCode()
    {
      return $this->containerCode;
    }

    /**
     * @param string $containerCode
     * @return \Williams\ConnectshipBundle\AMP\PrintItem
     */
    public function setContainerCode($containerCode)
    {
      $this->containerCode = $containerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipFileSymbol()
    {
      return $this->shipFileSymbol;
    }

    /**
     * @param string $shipFileSymbol
     * @return \Williams\ConnectshipBundle\AMP\PrintItem
     */
    public function setShipFileSymbol($shipFileSymbol)
    {
      $this->shipFileSymbol = $shipFileSymbol;
      return $this;
    }

}
