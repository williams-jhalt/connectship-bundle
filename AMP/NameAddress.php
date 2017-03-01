<?php

namespace Williams\ConnectshipBundle\AMP;

class NameAddress
{

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $contact
     */
    protected $contact = null;

    /**
     * @var string $address1
     */
    protected $address1 = null;

    /**
     * @var string $address2
     */
    protected $address2 = null;

    /**
     * @var string $address3
     */
    protected $address3 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $stateProvince
     */
    protected $stateProvince = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $countrySymbol
     */
    protected $countrySymbol = null;

    /**
     * @var countryCode $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $altCountryName
     */
    protected $altCountryName = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $sms
     */
    protected $sms = null;

    /**
     * @var boolean $residential
     */
    protected $residential = null;

    /**
     * @var boolean $poBox
     */
    protected $poBox = null;

    /**
     * @var boolean $cassCertified
     */
    protected $cassCertified = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param string $company
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param string $contact
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->address1;
    }

    /**
     * @param string $address1
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setAddress1($address1)
    {
      $this->address1 = $address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->address2;
    }

    /**
     * @param string $address2
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setAddress2($address2)
    {
      $this->address2 = $address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
      return $this->address3;
    }

    /**
     * @param string $address3
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setAddress3($address3)
    {
      $this->address3 = $address3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateProvince()
    {
      return $this->stateProvince;
    }

    /**
     * @param string $stateProvince
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setStateProvince($stateProvince)
    {
      $this->stateProvince = $stateProvince;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountrySymbol()
    {
      return $this->countrySymbol;
    }

    /**
     * @param string $countrySymbol
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setCountrySymbol($countrySymbol)
    {
      $this->countrySymbol = $countrySymbol;
      return $this;
    }

    /**
     * @return countryCode
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param countryCode $countryCode
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAltCountryName()
    {
      return $this->altCountryName;
    }

    /**
     * @param string $altCountryName
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setAltCountryName($altCountryName)
    {
      $this->altCountryName = $altCountryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getSms()
    {
      return $this->sms;
    }

    /**
     * @param string $sms
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setSms($sms)
    {
      $this->sms = $sms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResidential()
    {
      return $this->residential;
    }

    /**
     * @param boolean $residential
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setResidential($residential)
    {
      $this->residential = $residential;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPoBox()
    {
      return $this->poBox;
    }

    /**
     * @param boolean $poBox
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setPoBox($poBox)
    {
      $this->poBox = $poBox;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCassCertified()
    {
      return $this->cassCertified;
    }

    /**
     * @param boolean $cassCertified
     * @return \Williams\ConnectshipBundle\AMP\NameAddress
     */
    public function setCassCertified($cassCertified)
    {
      $this->cassCertified = $cassCertified;
      return $this;
    }

}
