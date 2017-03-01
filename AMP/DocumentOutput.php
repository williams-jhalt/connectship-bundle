<?php

namespace Williams\ConnectshipBundle\AMP;

class DocumentOutput
{

    /**
     * @var anyType $xmlOutput
     */
    protected $xmlOutput = null;

    /**
     * @var base64Binary $binaryOutput
     */
    protected $binaryOutput = null;

    /**
     * @var string $outputFile
     */
    protected $outputFile = null;

    /**
     * @var ImageItemList $imageList
     */
    protected $imageList = null;

    /**
     * @var OutputItemList $outputList
     */
    protected $outputList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyType
     */
    public function getXmlOutput()
    {
      return $this->xmlOutput;
    }

    /**
     * @param anyType $xmlOutput
     * @return \Williams\ConnectshipBundle\AMP\DocumentOutput
     */
    public function setXmlOutput($xmlOutput)
    {
      $this->xmlOutput = $xmlOutput;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBinaryOutput()
    {
      return $this->binaryOutput;
    }

    /**
     * @param base64Binary $binaryOutput
     * @return \Williams\ConnectshipBundle\AMP\DocumentOutput
     */
    public function setBinaryOutput($binaryOutput)
    {
      $this->binaryOutput = $binaryOutput;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutputFile()
    {
      return $this->outputFile;
    }

    /**
     * @param string $outputFile
     * @return \Williams\ConnectshipBundle\AMP\DocumentOutput
     */
    public function setOutputFile($outputFile)
    {
      $this->outputFile = $outputFile;
      return $this;
    }

    /**
     * @return ImageItemList
     */
    public function getImageList()
    {
      return $this->imageList;
    }

    /**
     * @param ImageItemList $imageList
     * @return \Williams\ConnectshipBundle\AMP\DocumentOutput
     */
    public function setImageList($imageList)
    {
      $this->imageList = $imageList;
      return $this;
    }

    /**
     * @return OutputItemList
     */
    public function getOutputList()
    {
      return $this->outputList;
    }

    /**
     * @param OutputItemList $outputList
     * @return \Williams\ConnectshipBundle\AMP\DocumentOutput
     */
    public function setOutputList($outputList)
    {
      $this->outputList = $outputList;
      return $this;
    }

}
