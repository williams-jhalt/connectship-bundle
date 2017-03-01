<?php

namespace Williams\ConnectshipBundle\AMP;

class SearchPackageResult
{

    /**
     * @var DataDictionary $resultData
     */
    protected $resultData = null;

    /**
     * @var boolean $voided
     */
    protected $voided = null;

    /**
     * @var int $closeOutMode
     */
    protected $closeOutMode = null;

    /**
     * @param DataDictionary $resultData
     * @param boolean $voided
     */
    public function __construct($resultData, $voided)
    {
      $this->resultData = $resultData;
      $this->voided = $voided;
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
     * @return \Williams\ConnectshipBundle\AMP\SearchPackageResult
     */
    public function setResultData($resultData)
    {
      $this->resultData = $resultData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVoided()
    {
      return $this->voided;
    }

    /**
     * @param boolean $voided
     * @return \Williams\ConnectshipBundle\AMP\SearchPackageResult
     */
    public function setVoided($voided)
    {
      $this->voided = $voided;
      return $this;
    }

    /**
     * @return int
     */
    public function getCloseOutMode()
    {
      return $this->closeOutMode;
    }

    /**
     * @param int $closeOutMode
     * @return \Williams\ConnectshipBundle\AMP\SearchPackageResult
     */
    public function setCloseOutMode($closeOutMode)
    {
      $this->closeOutMode = $closeOutMode;
      return $this;
    }

}
