<?php

namespace Williams\ConnectshipBundle\AMP;

class Commodity
{

    /**
     * @var string $approvedCommunityMemberNumber
     */
    protected $approvedCommunityMemberNumber = null;

    /**
     * @var enumItem $certOfOriginMethod
     */
    protected $certOfOriginMethod = null;

    /**
     * @var enumItem $commodityCondition
     */
    protected $commodityCondition = null;

    /**
     * @var boolean $ddtcEligibleParty
     */
    protected $ddtcEligibleParty = null;

    /**
     * @var int $ddtcQuantity
     */
    protected $ddtcQuantity = null;

    /**
     * @var string $ddtcRegistrationNumber
     */
    protected $ddtcRegistrationNumber = null;

    /**
     * @var boolean $ddtcSme
     */
    protected $ddtcSme = null;

    /**
     * @var string $ddtcUnitMeasure
     */
    protected $ddtcUnitMeasure = null;

    /**
     * @var string $ddtcUsmlCategoryCode
     */
    protected $ddtcUsmlCategoryCode = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $eccn
     */
    protected $eccn = null;

    /**
     * @var string $exportHarmonizedCode
     */
    protected $exportHarmonizedCode = null;

    /**
     * @var string $exportInformationCode
     */
    protected $exportInformationCode = null;

    /**
     * @var float $exportQuantity1
     */
    protected $exportQuantity1 = null;

    /**
     * @var float $exportQuantity2
     */
    protected $exportQuantity2 = null;

    /**
     * @var string $exportQuantityUnitMeasure1
     */
    protected $exportQuantityUnitMeasure1 = null;

    /**
     * @var string $exportQuantityUnitMeasure2
     */
    protected $exportQuantityUnitMeasure2 = null;

    /**
     * @var string $harmonizedCode
     */
    protected $harmonizedCode = null;

    /**
     * @var date $licenseExpirationDate
     */
    protected $licenseExpirationDate = null;

    /**
     * @var string $licenseNumber
     */
    protected $licenseNumber = null;

    /**
     * @var string $licenseType
     */
    protected $licenseType = null;

    /**
     * @var Money $licenseUnitValue
     */
    protected $licenseUnitValue = null;

    /**
     * @var string $manufacturerId
     */
    protected $manufacturerId = null;

    /**
     * @var enumItem $naftaPreferenceCriterion
     */
    protected $naftaPreferenceCriterion = null;

    /**
     * @var enumItem $naftaProducer
     */
    protected $naftaProducer = null;

    /**
     * @var date $naftaRvcAvgEndDate
     */
    protected $naftaRvcAvgEndDate = null;

    /**
     * @var date $naftaRvcAvgStartDate
     */
    protected $naftaRvcAvgStartDate = null;

    /**
     * @var enumItem $naftaRvcMethod
     */
    protected $naftaRvcMethod = null;

    /**
     * @var NameAddress $origin
     */
    protected $origin = null;

    /**
     * @var string $originCountry
     */
    protected $originCountry = null;

    /**
     * @var string $originDescription
     */
    protected $originDescription = null;

    /**
     * @var string $originTaxId
     */
    protected $originTaxId = null;

    /**
     * @var string $productCode
     */
    protected $productCode = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var string $quantityUnitMeasure
     */
    protected $quantityUnitMeasure = null;

    /**
     * @var enumList $restrictedArticleType
     */
    protected $restrictedArticleType = null;

    /**
     * @var enumItem $sedMethod
     */
    protected $sedMethod = null;

    /**
     * @var Money $unitValue
     */
    protected $unitValue = null;

    /**
     * @var Weight $unitWeight
     */
    protected $unitWeight = null;

    /**
     * @var anyType $userData1
     */
    protected $userData1 = null;

    /**
     * @var anyType $userData2
     */
    protected $userData2 = null;

    /**
     * @var anyType $userData3
     */
    protected $userData3 = null;

    /**
     * @var anyType $userData4
     */
    protected $userData4 = null;

    /**
     * @var anyType $userData5
     */
    protected $userData5 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getApprovedCommunityMemberNumber()
    {
      return $this->approvedCommunityMemberNumber;
    }

    /**
     * @param string $approvedCommunityMemberNumber
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setApprovedCommunityMemberNumber($approvedCommunityMemberNumber)
    {
      $this->approvedCommunityMemberNumber = $approvedCommunityMemberNumber;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getCertOfOriginMethod()
    {
      return $this->certOfOriginMethod;
    }

    /**
     * @param enumItem $certOfOriginMethod
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setCertOfOriginMethod($certOfOriginMethod)
    {
      $this->certOfOriginMethod = $certOfOriginMethod;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getCommodityCondition()
    {
      return $this->commodityCondition;
    }

    /**
     * @param enumItem $commodityCondition
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setCommodityCondition($commodityCondition)
    {
      $this->commodityCondition = $commodityCondition;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDdtcEligibleParty()
    {
      return $this->ddtcEligibleParty;
    }

    /**
     * @param boolean $ddtcEligibleParty
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setDdtcEligibleParty($ddtcEligibleParty)
    {
      $this->ddtcEligibleParty = $ddtcEligibleParty;
      return $this;
    }

    /**
     * @return int
     */
    public function getDdtcQuantity()
    {
      return $this->ddtcQuantity;
    }

    /**
     * @param int $ddtcQuantity
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setDdtcQuantity($ddtcQuantity)
    {
      $this->ddtcQuantity = $ddtcQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDdtcRegistrationNumber()
    {
      return $this->ddtcRegistrationNumber;
    }

    /**
     * @param string $ddtcRegistrationNumber
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setDdtcRegistrationNumber($ddtcRegistrationNumber)
    {
      $this->ddtcRegistrationNumber = $ddtcRegistrationNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDdtcSme()
    {
      return $this->ddtcSme;
    }

    /**
     * @param boolean $ddtcSme
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setDdtcSme($ddtcSme)
    {
      $this->ddtcSme = $ddtcSme;
      return $this;
    }

    /**
     * @return string
     */
    public function getDdtcUnitMeasure()
    {
      return $this->ddtcUnitMeasure;
    }

    /**
     * @param string $ddtcUnitMeasure
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setDdtcUnitMeasure($ddtcUnitMeasure)
    {
      $this->ddtcUnitMeasure = $ddtcUnitMeasure;
      return $this;
    }

    /**
     * @return string
     */
    public function getDdtcUsmlCategoryCode()
    {
      return $this->ddtcUsmlCategoryCode;
    }

    /**
     * @param string $ddtcUsmlCategoryCode
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setDdtcUsmlCategoryCode($ddtcUsmlCategoryCode)
    {
      $this->ddtcUsmlCategoryCode = $ddtcUsmlCategoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getEccn()
    {
      return $this->eccn;
    }

    /**
     * @param string $eccn
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setEccn($eccn)
    {
      $this->eccn = $eccn;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportHarmonizedCode()
    {
      return $this->exportHarmonizedCode;
    }

    /**
     * @param string $exportHarmonizedCode
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setExportHarmonizedCode($exportHarmonizedCode)
    {
      $this->exportHarmonizedCode = $exportHarmonizedCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportInformationCode()
    {
      return $this->exportInformationCode;
    }

    /**
     * @param string $exportInformationCode
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setExportInformationCode($exportInformationCode)
    {
      $this->exportInformationCode = $exportInformationCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getExportQuantity1()
    {
      return $this->exportQuantity1;
    }

    /**
     * @param float $exportQuantity1
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setExportQuantity1($exportQuantity1)
    {
      $this->exportQuantity1 = $exportQuantity1;
      return $this;
    }

    /**
     * @return float
     */
    public function getExportQuantity2()
    {
      return $this->exportQuantity2;
    }

    /**
     * @param float $exportQuantity2
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setExportQuantity2($exportQuantity2)
    {
      $this->exportQuantity2 = $exportQuantity2;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportQuantityUnitMeasure1()
    {
      return $this->exportQuantityUnitMeasure1;
    }

    /**
     * @param string $exportQuantityUnitMeasure1
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setExportQuantityUnitMeasure1($exportQuantityUnitMeasure1)
    {
      $this->exportQuantityUnitMeasure1 = $exportQuantityUnitMeasure1;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportQuantityUnitMeasure2()
    {
      return $this->exportQuantityUnitMeasure2;
    }

    /**
     * @param string $exportQuantityUnitMeasure2
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setExportQuantityUnitMeasure2($exportQuantityUnitMeasure2)
    {
      $this->exportQuantityUnitMeasure2 = $exportQuantityUnitMeasure2;
      return $this;
    }

    /**
     * @return string
     */
    public function getHarmonizedCode()
    {
      return $this->harmonizedCode;
    }

    /**
     * @param string $harmonizedCode
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setHarmonizedCode($harmonizedCode)
    {
      $this->harmonizedCode = $harmonizedCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getLicenseExpirationDate()
    {
      return $this->licenseExpirationDate;
    }

    /**
     * @param date $licenseExpirationDate
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setLicenseExpirationDate($licenseExpirationDate)
    {
      $this->licenseExpirationDate = $licenseExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicenseNumber()
    {
      return $this->licenseNumber;
    }

    /**
     * @param string $licenseNumber
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setLicenseNumber($licenseNumber)
    {
      $this->licenseNumber = $licenseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicenseType()
    {
      return $this->licenseType;
    }

    /**
     * @param string $licenseType
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setLicenseType($licenseType)
    {
      $this->licenseType = $licenseType;
      return $this;
    }

    /**
     * @return Money
     */
    public function getLicenseUnitValue()
    {
      return $this->licenseUnitValue;
    }

    /**
     * @param Money $licenseUnitValue
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setLicenseUnitValue($licenseUnitValue)
    {
      $this->licenseUnitValue = $licenseUnitValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerId()
    {
      return $this->manufacturerId;
    }

    /**
     * @param string $manufacturerId
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setManufacturerId($manufacturerId)
    {
      $this->manufacturerId = $manufacturerId;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getNaftaPreferenceCriterion()
    {
      return $this->naftaPreferenceCriterion;
    }

    /**
     * @param enumItem $naftaPreferenceCriterion
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setNaftaPreferenceCriterion($naftaPreferenceCriterion)
    {
      $this->naftaPreferenceCriterion = $naftaPreferenceCriterion;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getNaftaProducer()
    {
      return $this->naftaProducer;
    }

    /**
     * @param enumItem $naftaProducer
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setNaftaProducer($naftaProducer)
    {
      $this->naftaProducer = $naftaProducer;
      return $this;
    }

    /**
     * @return date
     */
    public function getNaftaRvcAvgEndDate()
    {
      return $this->naftaRvcAvgEndDate;
    }

    /**
     * @param date $naftaRvcAvgEndDate
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setNaftaRvcAvgEndDate($naftaRvcAvgEndDate)
    {
      $this->naftaRvcAvgEndDate = $naftaRvcAvgEndDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getNaftaRvcAvgStartDate()
    {
      return $this->naftaRvcAvgStartDate;
    }

    /**
     * @param date $naftaRvcAvgStartDate
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setNaftaRvcAvgStartDate($naftaRvcAvgStartDate)
    {
      $this->naftaRvcAvgStartDate = $naftaRvcAvgStartDate;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getNaftaRvcMethod()
    {
      return $this->naftaRvcMethod;
    }

    /**
     * @param enumItem $naftaRvcMethod
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setNaftaRvcMethod($naftaRvcMethod)
    {
      $this->naftaRvcMethod = $naftaRvcMethod;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getOrigin()
    {
      return $this->origin;
    }

    /**
     * @param NameAddress $origin
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setOrigin($origin)
    {
      $this->origin = $origin;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginCountry()
    {
      return $this->originCountry;
    }

    /**
     * @param string $originCountry
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setOriginCountry($originCountry)
    {
      $this->originCountry = $originCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginDescription()
    {
      return $this->originDescription;
    }

    /**
     * @param string $originDescription
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setOriginDescription($originDescription)
    {
      $this->originDescription = $originDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginTaxId()
    {
      return $this->originTaxId;
    }

    /**
     * @param string $originTaxId
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setOriginTaxId($originTaxId)
    {
      $this->originTaxId = $originTaxId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantityUnitMeasure()
    {
      return $this->quantityUnitMeasure;
    }

    /**
     * @param string $quantityUnitMeasure
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setQuantityUnitMeasure($quantityUnitMeasure)
    {
      $this->quantityUnitMeasure = $quantityUnitMeasure;
      return $this;
    }

    /**
     * @return enumList
     */
    public function getRestrictedArticleType()
    {
      return $this->restrictedArticleType;
    }

    /**
     * @param enumList $restrictedArticleType
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setRestrictedArticleType($restrictedArticleType)
    {
      $this->restrictedArticleType = $restrictedArticleType;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getSedMethod()
    {
      return $this->sedMethod;
    }

    /**
     * @param enumItem $sedMethod
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setSedMethod($sedMethod)
    {
      $this->sedMethod = $sedMethod;
      return $this;
    }

    /**
     * @return Money
     */
    public function getUnitValue()
    {
      return $this->unitValue;
    }

    /**
     * @param Money $unitValue
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setUnitValue($unitValue)
    {
      $this->unitValue = $unitValue;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getUnitWeight()
    {
      return $this->unitWeight;
    }

    /**
     * @param Weight $unitWeight
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setUnitWeight($unitWeight)
    {
      $this->unitWeight = $unitWeight;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData1()
    {
      return $this->userData1;
    }

    /**
     * @param anyType $userData1
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setUserData1($userData1)
    {
      $this->userData1 = $userData1;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData2()
    {
      return $this->userData2;
    }

    /**
     * @param anyType $userData2
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setUserData2($userData2)
    {
      $this->userData2 = $userData2;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData3()
    {
      return $this->userData3;
    }

    /**
     * @param anyType $userData3
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setUserData3($userData3)
    {
      $this->userData3 = $userData3;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData4()
    {
      return $this->userData4;
    }

    /**
     * @param anyType $userData4
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setUserData4($userData4)
    {
      $this->userData4 = $userData4;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserData5()
    {
      return $this->userData5;
    }

    /**
     * @param anyType $userData5
     * @return \Williams\ConnectshipBundle\AMP\Commodity
     */
    public function setUserData5($userData5)
    {
      $this->userData5 = $userData5;
      return $this;
    }

}
