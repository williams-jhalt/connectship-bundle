<?php

namespace Williams\ConnectshipBundle\AMP;

class HazmatItem
{

    /**
     * @var boolean $hazmat500kgExemption
     */
    protected $hazmat500kgExemption = null;

    /**
     * @var boolean $hazmatAccessible
     */
    protected $hazmatAccessible = null;

    /**
     * @var boolean $hazmatCargo
     */
    protected $hazmatCargo = null;

    /**
     * @var enumItem $hazmatCaCategory
     */
    protected $hazmatCaCategory = null;

    /**
     * @var string $hazmatClass
     */
    protected $hazmatClass = null;

    /**
     * @var string $hazmatDescription
     */
    protected $hazmatDescription = null;

    /**
     * @var string $hazmatEmergencyContact
     */
    protected $hazmatEmergencyContact = null;

    /**
     * @var string $hazmatEmergencyPhone
     */
    protected $hazmatEmergencyPhone = null;

    /**
     * @var boolean $hazmatExceptedQuantity
     */
    protected $hazmatExceptedQuantity = null;

    /**
     * @var string $hazmatExNumber
     */
    protected $hazmatExNumber = null;

    /**
     * @var string $hazmatId
     */
    protected $hazmatId = null;

    /**
     * @var NameAddress $hazmatInfectiousResponsibleParty
     */
    protected $hazmatInfectiousResponsibleParty = null;

    /**
     * @var enumList $hazmatLabel
     */
    protected $hazmatLabel = null;

    /**
     * @var boolean $hazmatLimitedQuantity
     */
    protected $hazmatLimitedQuantity = null;

    /**
     * @var string $hazmatPacking
     */
    protected $hazmatPacking = null;

    /**
     * @var enumItem $hazmatPackingGroup
     */
    protected $hazmatPackingGroup = null;

    /**
     * @var string $hazmatPackingInstruction
     */
    protected $hazmatPackingInstruction = null;

    /**
     * @var string $hazmatPercentage
     */
    protected $hazmatPercentage = null;

    /**
     * @var HazmatQuantity $hazmatQuantity
     */
    protected $hazmatQuantity = null;

    /**
     * @var HazmatQuantity $hazmatRadioactiveActivity
     */
    protected $hazmatRadioactiveActivity = null;

    /**
     * @var string $hazmatRadioactiveChemicalForm
     */
    protected $hazmatRadioactiveChemicalForm = null;

    /**
     * @var float $hazmatRadioactiveCsi
     */
    protected $hazmatRadioactiveCsi = null;

    /**
     * @var enumItem $hazmatRadioactiveException
     */
    protected $hazmatRadioactiveException = null;

    /**
     * @var string $hazmatRadioactiveName
     */
    protected $hazmatRadioactiveName = null;

    /**
     * @var string $hazmatRadioactivePackaging
     */
    protected $hazmatRadioactivePackaging = null;

    /**
     * @var enumItem $hazmatRadioactivePhysicalForm
     */
    protected $hazmatRadioactivePhysicalForm = null;

    /**
     * @var HazmatQuantity $hazmatRadioactiveSurfaceReading
     */
    protected $hazmatRadioactiveSurfaceReading = null;

    /**
     * @var float $hazmatRadioactiveTransportIndex
     */
    protected $hazmatRadioactiveTransportIndex = null;

    /**
     * @var string $hazmatReference
     */
    protected $hazmatReference = null;

    /**
     * @var enumItem $hazmatRegulation
     */
    protected $hazmatRegulation = null;

    /**
     * @var enumItem $hazmatRegulationSet
     */
    protected $hazmatRegulationSet = null;

    /**
     * @var boolean $hazmatReportableQuantity
     */
    protected $hazmatReportableQuantity = null;

    /**
     * @var string $hazmatSpecialProvisions
     */
    protected $hazmatSpecialProvisions = null;

    /**
     * @var string $hazmatSubsidiaryRiskClass
     */
    protected $hazmatSubsidiaryRiskClass = null;

    /**
     * @var string $hazmatTechnicalName
     */
    protected $hazmatTechnicalName = null;

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
     * @return boolean
     */
    public function getHazmat500kgExemption()
    {
      return $this->hazmat500kgExemption;
    }

    /**
     * @param boolean $hazmat500kgExemption
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmat500kgExemption($hazmat500kgExemption)
    {
      $this->hazmat500kgExemption = $hazmat500kgExemption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHazmatAccessible()
    {
      return $this->hazmatAccessible;
    }

    /**
     * @param boolean $hazmatAccessible
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatAccessible($hazmatAccessible)
    {
      $this->hazmatAccessible = $hazmatAccessible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHazmatCargo()
    {
      return $this->hazmatCargo;
    }

    /**
     * @param boolean $hazmatCargo
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatCargo($hazmatCargo)
    {
      $this->hazmatCargo = $hazmatCargo;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getHazmatCaCategory()
    {
      return $this->hazmatCaCategory;
    }

    /**
     * @param enumItem $hazmatCaCategory
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatCaCategory($hazmatCaCategory)
    {
      $this->hazmatCaCategory = $hazmatCaCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatClass()
    {
      return $this->hazmatClass;
    }

    /**
     * @param string $hazmatClass
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatClass($hazmatClass)
    {
      $this->hazmatClass = $hazmatClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatDescription()
    {
      return $this->hazmatDescription;
    }

    /**
     * @param string $hazmatDescription
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatDescription($hazmatDescription)
    {
      $this->hazmatDescription = $hazmatDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatEmergencyContact()
    {
      return $this->hazmatEmergencyContact;
    }

    /**
     * @param string $hazmatEmergencyContact
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatEmergencyContact($hazmatEmergencyContact)
    {
      $this->hazmatEmergencyContact = $hazmatEmergencyContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatEmergencyPhone()
    {
      return $this->hazmatEmergencyPhone;
    }

    /**
     * @param string $hazmatEmergencyPhone
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatEmergencyPhone($hazmatEmergencyPhone)
    {
      $this->hazmatEmergencyPhone = $hazmatEmergencyPhone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHazmatExceptedQuantity()
    {
      return $this->hazmatExceptedQuantity;
    }

    /**
     * @param boolean $hazmatExceptedQuantity
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatExceptedQuantity($hazmatExceptedQuantity)
    {
      $this->hazmatExceptedQuantity = $hazmatExceptedQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatExNumber()
    {
      return $this->hazmatExNumber;
    }

    /**
     * @param string $hazmatExNumber
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatExNumber($hazmatExNumber)
    {
      $this->hazmatExNumber = $hazmatExNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatId()
    {
      return $this->hazmatId;
    }

    /**
     * @param string $hazmatId
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatId($hazmatId)
    {
      $this->hazmatId = $hazmatId;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getHazmatInfectiousResponsibleParty()
    {
      return $this->hazmatInfectiousResponsibleParty;
    }

    /**
     * @param NameAddress $hazmatInfectiousResponsibleParty
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatInfectiousResponsibleParty($hazmatInfectiousResponsibleParty)
    {
      $this->hazmatInfectiousResponsibleParty = $hazmatInfectiousResponsibleParty;
      return $this;
    }

    /**
     * @return enumList
     */
    public function getHazmatLabel()
    {
      return $this->hazmatLabel;
    }

    /**
     * @param enumList $hazmatLabel
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatLabel($hazmatLabel)
    {
      $this->hazmatLabel = $hazmatLabel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHazmatLimitedQuantity()
    {
      return $this->hazmatLimitedQuantity;
    }

    /**
     * @param boolean $hazmatLimitedQuantity
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatLimitedQuantity($hazmatLimitedQuantity)
    {
      $this->hazmatLimitedQuantity = $hazmatLimitedQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatPacking()
    {
      return $this->hazmatPacking;
    }

    /**
     * @param string $hazmatPacking
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatPacking($hazmatPacking)
    {
      $this->hazmatPacking = $hazmatPacking;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getHazmatPackingGroup()
    {
      return $this->hazmatPackingGroup;
    }

    /**
     * @param enumItem $hazmatPackingGroup
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatPackingGroup($hazmatPackingGroup)
    {
      $this->hazmatPackingGroup = $hazmatPackingGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatPackingInstruction()
    {
      return $this->hazmatPackingInstruction;
    }

    /**
     * @param string $hazmatPackingInstruction
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatPackingInstruction($hazmatPackingInstruction)
    {
      $this->hazmatPackingInstruction = $hazmatPackingInstruction;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatPercentage()
    {
      return $this->hazmatPercentage;
    }

    /**
     * @param string $hazmatPercentage
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatPercentage($hazmatPercentage)
    {
      $this->hazmatPercentage = $hazmatPercentage;
      return $this;
    }

    /**
     * @return HazmatQuantity
     */
    public function getHazmatQuantity()
    {
      return $this->hazmatQuantity;
    }

    /**
     * @param HazmatQuantity $hazmatQuantity
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatQuantity($hazmatQuantity)
    {
      $this->hazmatQuantity = $hazmatQuantity;
      return $this;
    }

    /**
     * @return HazmatQuantity
     */
    public function getHazmatRadioactiveActivity()
    {
      return $this->hazmatRadioactiveActivity;
    }

    /**
     * @param HazmatQuantity $hazmatRadioactiveActivity
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactiveActivity($hazmatRadioactiveActivity)
    {
      $this->hazmatRadioactiveActivity = $hazmatRadioactiveActivity;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatRadioactiveChemicalForm()
    {
      return $this->hazmatRadioactiveChemicalForm;
    }

    /**
     * @param string $hazmatRadioactiveChemicalForm
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactiveChemicalForm($hazmatRadioactiveChemicalForm)
    {
      $this->hazmatRadioactiveChemicalForm = $hazmatRadioactiveChemicalForm;
      return $this;
    }

    /**
     * @return float
     */
    public function getHazmatRadioactiveCsi()
    {
      return $this->hazmatRadioactiveCsi;
    }

    /**
     * @param float $hazmatRadioactiveCsi
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactiveCsi($hazmatRadioactiveCsi)
    {
      $this->hazmatRadioactiveCsi = $hazmatRadioactiveCsi;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getHazmatRadioactiveException()
    {
      return $this->hazmatRadioactiveException;
    }

    /**
     * @param enumItem $hazmatRadioactiveException
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactiveException($hazmatRadioactiveException)
    {
      $this->hazmatRadioactiveException = $hazmatRadioactiveException;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatRadioactiveName()
    {
      return $this->hazmatRadioactiveName;
    }

    /**
     * @param string $hazmatRadioactiveName
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactiveName($hazmatRadioactiveName)
    {
      $this->hazmatRadioactiveName = $hazmatRadioactiveName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatRadioactivePackaging()
    {
      return $this->hazmatRadioactivePackaging;
    }

    /**
     * @param string $hazmatRadioactivePackaging
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactivePackaging($hazmatRadioactivePackaging)
    {
      $this->hazmatRadioactivePackaging = $hazmatRadioactivePackaging;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getHazmatRadioactivePhysicalForm()
    {
      return $this->hazmatRadioactivePhysicalForm;
    }

    /**
     * @param enumItem $hazmatRadioactivePhysicalForm
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactivePhysicalForm($hazmatRadioactivePhysicalForm)
    {
      $this->hazmatRadioactivePhysicalForm = $hazmatRadioactivePhysicalForm;
      return $this;
    }

    /**
     * @return HazmatQuantity
     */
    public function getHazmatRadioactiveSurfaceReading()
    {
      return $this->hazmatRadioactiveSurfaceReading;
    }

    /**
     * @param HazmatQuantity $hazmatRadioactiveSurfaceReading
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactiveSurfaceReading($hazmatRadioactiveSurfaceReading)
    {
      $this->hazmatRadioactiveSurfaceReading = $hazmatRadioactiveSurfaceReading;
      return $this;
    }

    /**
     * @return float
     */
    public function getHazmatRadioactiveTransportIndex()
    {
      return $this->hazmatRadioactiveTransportIndex;
    }

    /**
     * @param float $hazmatRadioactiveTransportIndex
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRadioactiveTransportIndex($hazmatRadioactiveTransportIndex)
    {
      $this->hazmatRadioactiveTransportIndex = $hazmatRadioactiveTransportIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatReference()
    {
      return $this->hazmatReference;
    }

    /**
     * @param string $hazmatReference
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatReference($hazmatReference)
    {
      $this->hazmatReference = $hazmatReference;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getHazmatRegulation()
    {
      return $this->hazmatRegulation;
    }

    /**
     * @param enumItem $hazmatRegulation
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRegulation($hazmatRegulation)
    {
      $this->hazmatRegulation = $hazmatRegulation;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getHazmatRegulationSet()
    {
      return $this->hazmatRegulationSet;
    }

    /**
     * @param enumItem $hazmatRegulationSet
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatRegulationSet($hazmatRegulationSet)
    {
      $this->hazmatRegulationSet = $hazmatRegulationSet;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHazmatReportableQuantity()
    {
      return $this->hazmatReportableQuantity;
    }

    /**
     * @param boolean $hazmatReportableQuantity
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatReportableQuantity($hazmatReportableQuantity)
    {
      $this->hazmatReportableQuantity = $hazmatReportableQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatSpecialProvisions()
    {
      return $this->hazmatSpecialProvisions;
    }

    /**
     * @param string $hazmatSpecialProvisions
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatSpecialProvisions($hazmatSpecialProvisions)
    {
      $this->hazmatSpecialProvisions = $hazmatSpecialProvisions;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatSubsidiaryRiskClass()
    {
      return $this->hazmatSubsidiaryRiskClass;
    }

    /**
     * @param string $hazmatSubsidiaryRiskClass
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatSubsidiaryRiskClass($hazmatSubsidiaryRiskClass)
    {
      $this->hazmatSubsidiaryRiskClass = $hazmatSubsidiaryRiskClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatTechnicalName()
    {
      return $this->hazmatTechnicalName;
    }

    /**
     * @param string $hazmatTechnicalName
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setHazmatTechnicalName($hazmatTechnicalName)
    {
      $this->hazmatTechnicalName = $hazmatTechnicalName;
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
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
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
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
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
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
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
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
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
     * @return \Williams\ConnectshipBundle\AMP\HazmatItem
     */
    public function setUserData5($userData5)
    {
      $this->userData5 = $userData5;
      return $this;
    }

}
