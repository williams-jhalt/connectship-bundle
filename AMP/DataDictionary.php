<?php

namespace Williams\ConnectshipBundle\AMP;

class DataDictionary
{

    /**
     * @var boolean $additionalHandling
     */
    protected $additionalHandling = null;

    /**
     * @var Money $additionalHandlingFee
     */
    protected $additionalHandlingFee = null;

    /**
     * @var enumItem $additionalHandlingType
     */
    protected $additionalHandlingType = null;

    /**
     * @var boolean $additionalHardcopyDocumentation
     */
    protected $additionalHardcopyDocumentation = null;

    /**
     * @var boolean $addressChangeNotification
     */
    protected $addressChangeNotification = null;

    /**
     * @var string $aesTransactionNumber
     */
    protected $aesTransactionNumber = null;

    /**
     * @var Money $airFreightFee
     */
    protected $airFreightFee = null;

    /**
     * @var AlcoholItemList $alcoholContents
     */
    protected $alcoholContents = null;

    /**
     * @var boolean $appointmentDelivery
     */
    protected $appointmentDelivery = null;

    /**
     * @var Money $appointmentDeliveryFee
     */
    protected $appointmentDeliveryFee = null;

    /**
     * @var Money $apportionedBase
     */
    protected $apportionedBase = null;

    /**
     * @var Money $apportionedDiscount
     */
    protected $apportionedDiscount = null;

    /**
     * @var Money $apportionedSpecial
     */
    protected $apportionedSpecial = null;

    /**
     * @var Money $apportionedTotal
     */
    protected $apportionedTotal = null;

    /**
     * @var date $arriveDate
     */
    protected $arriveDate = null;

    /**
     * @var string $barCode
     */
    protected $barCode = null;

    /**
     * @var base64Binary $barCodeBinary
     */
    protected $barCodeBinary = null;

    /**
     * @var string $barCode2
     */
    protected $barCode2 = null;

    /**
     * @var base64Binary $barCode2Binary
     */
    protected $barCode2Binary = null;

    /**
     * @var string $barCode3
     */
    protected $barCode3 = null;

    /**
     * @var base64Binary $barCode3Binary
     */
    protected $barCode3Binary = null;

    /**
     * @var Money $base
     */
    protected $base = null;

    /**
     * @var Money $billingFee
     */
    protected $billingFee = null;

    /**
     * @var string $bolComment
     */
    protected $bolComment = null;

    /**
     * @var string $bolLegalStatement
     */
    protected $bolLegalStatement = null;

    /**
     * @var Money $borderProcessingFee
     */
    protected $borderProcessingFee = null;

    /**
     * @var enumItem $brokerageMethod
     */
    protected $brokerageMethod = null;

    /**
     * @var boolean $brokerageThirdPartyBilling
     */
    protected $brokerageThirdPartyBilling = null;

    /**
     * @var string $brokerageThirdPartyBillingAccount
     */
    protected $brokerageThirdPartyBillingAccount = null;

    /**
     * @var NameAddress $brokerageThirdPartyBillingAddress
     */
    protected $brokerageThirdPartyBillingAddress = null;

    /**
     * @var int $bundleId
     */
    protected $bundleId = null;

    /**
     * @var IntegerList $bundleIdList
     */
    protected $bundleIdList = null;

    /**
     * @var boolean $calltag
     */
    protected $calltag = null;

    /**
     * @var Money $calltagFee
     */
    protected $calltagFee = null;

    /**
     * @var string $calltagNumber
     */
    protected $calltagNumber = null;

    /**
     * @var boolean $carbonNeutral
     */
    protected $carbonNeutral = null;

    /**
     * @var Money $carbonNeutralFee
     */
    protected $carbonNeutralFee = null;

    /**
     * @var Money $carrierCostSurcharge
     */
    protected $carrierCostSurcharge = null;

    /**
     * @var string $carrierInstructions
     */
    protected $carrierInstructions = null;

    /**
     * @var boolean $carrierMonitoring
     */
    protected $carrierMonitoring = null;

    /**
     * @var Money $carrierMonitoringFee
     */
    protected $carrierMonitoringFee = null;

    /**
     * @var enumList $carrierMonitoringPurpose
     */
    protected $carrierMonitoringPurpose = null;

    /**
     * @var string $carrierName
     */
    protected $carrierName = null;

    /**
     * @var enumItem $carrierTenderMethod
     */
    protected $carrierTenderMethod = null;

    /**
     * @var boolean $certifiedMail
     */
    protected $certifiedMail = null;

    /**
     * @var Money $certifiedMailFee
     */
    protected $certifiedMailFee = null;

    /**
     * @var enumItem $certOfOriginMethod
     */
    protected $certOfOriginMethod = null;

    /**
     * @var boolean $chainOfSignature
     */
    protected $chainOfSignature = null;

    /**
     * @var Money $chainOfSignatureFee
     */
    protected $chainOfSignatureFee = null;

    /**
     * @var enumItem $chargesOnDocumentation
     */
    protected $chargesOnDocumentation = null;

    /**
     * @var boolean $codAlternateNumber
     */
    protected $codAlternateNumber = null;

    /**
     * @var Money $codAmount
     */
    protected $codAmount = null;

    /**
     * @var Money $codFee
     */
    protected $codFee = null;

    /**
     * @var string $codInstructions
     */
    protected $codInstructions = null;

    /**
     * @var string $codMasterTrackingNumber
     */
    protected $codMasterTrackingNumber = null;

    /**
     * @var enumItem $codMethod
     */
    protected $codMethod = null;

    /**
     * @var string $codNumber
     */
    protected $codNumber = null;

    /**
     * @var enumList $codPaymentMethod
     */
    protected $codPaymentMethod = null;

    /**
     * @var date $codPaymentMethodPostDatedCheckDate
     */
    protected $codPaymentMethodPostDatedCheckDate = null;

    /**
     * @var string $codPayorAddressEmail
     */
    protected $codPayorAddressEmail = null;

    /**
     * @var string $codPayorInstructions
     */
    protected $codPayorInstructions = null;

    /**
     * @var string $codPendingFeePayorPercentage
     */
    protected $codPendingFeePayorPercentage = null;

    /**
     * @var NameAddress $codReturnAddress
     */
    protected $codReturnAddress = null;

    /**
     * @var enumItem $codReturnMethod
     */
    protected $codReturnMethod = null;

    /**
     * @var string $codReturnTrackingNumber
     */
    protected $codReturnTrackingNumber = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var enumItem $commercialInvoiceMethod
     */
    protected $commercialInvoiceMethod = null;

    /**
     * @var string $commitmentCode
     */
    protected $commitmentCode = null;

    /**
     * @var string $commodityClass
     */
    protected $commodityClass = null;

    /**
     * @var enumItem $commodityCondition
     */
    protected $commodityCondition = null;

    /**
     * @var CommodityList $commodityContents
     */
    protected $commodityContents = null;

    /**
     * @var NameAddress $consignee
     */
    protected $consignee = null;

    /**
     * @var string $consigneeAccount
     */
    protected $consigneeAccount = null;

    /**
     * @var string $consigneeBillingId
     */
    protected $consigneeBillingId = null;

    /**
     * @var string $consigneeCode
     */
    protected $consigneeCode = null;

    /**
     * @var string $consigneeCustomsId
     */
    protected $consigneeCustomsId = null;

    /**
     * @var string $consigneeEmail
     */
    protected $consigneeEmail = null;

    /**
     * @var string $consigneeReference
     */
    protected $consigneeReference = null;

    /**
     * @var string $consigneeTaxId
     */
    protected $consigneeTaxId = null;

    /**
     * @var enumItem $consigneeTaxIdType
     */
    protected $consigneeTaxIdType = null;

    /**
     * @var boolean $consigneeThirdPartyBilling
     */
    protected $consigneeThirdPartyBilling = null;

    /**
     * @var string $consigneeThirdPartyBillingAccount
     */
    protected $consigneeThirdPartyBillingAccount = null;

    /**
     * @var NameAddress $consigneeThirdPartyBillingAddress
     */
    protected $consigneeThirdPartyBillingAddress = null;

    /**
     * @var string $consolidationCarrier
     */
    protected $consolidationCarrier = null;

    /**
     * @var string $consolidationCode
     */
    protected $consolidationCode = null;

    /**
     * @var boolean $consolidationFlag
     */
    protected $consolidationFlag = null;

    /**
     * @var int $consolidationId
     */
    protected $consolidationId = null;

    /**
     * @var string $consolidationShipmentId
     */
    protected $consolidationShipmentId = null;

    /**
     * @var string $consolidationType
     */
    protected $consolidationType = null;

    /**
     * @var string $containerCode
     */
    protected $containerCode = null;

    /**
     * @var NameAddress $customsBroker
     */
    protected $customsBroker = null;

    /**
     * @var string $customsBrokerCode
     */
    protected $customsBrokerCode = null;

    /**
     * @var int $cycleCount
     */
    protected $cycleCount = null;

    /**
     * @var Money $declaredValueAmount
     */
    protected $declaredValueAmount = null;

    /**
     * @var Money $declaredValueCustoms
     */
    protected $declaredValueCustoms = null;

    /**
     * @var Money $declaredValueFee
     */
    protected $declaredValueFee = null;

    /**
     * @var string $deconsolidationCarrier
     */
    protected $deconsolidationCarrier = null;

    /**
     * @var string $deliveryAreaCode
     */
    protected $deliveryAreaCode = null;

    /**
     * @var boolean $deliveryExceptionNotification
     */
    protected $deliveryExceptionNotification = null;

    /**
     * @var string $deliveryExceptionNotificationAddressEmail
     */
    protected $deliveryExceptionNotificationAddressEmail = null;

    /**
     * @var string $deliveryExceptionNotificationDescription
     */
    protected $deliveryExceptionNotificationDescription = null;

    /**
     * @var boolean $deliveryExceptionNotificationEmail
     */
    protected $deliveryExceptionNotificationEmail = null;

    /**
     * @var Money $deliveryExceptionNotificationFee
     */
    protected $deliveryExceptionNotificationFee = null;

    /**
     * @var string $deliveryExceptionNotificationSenderName
     */
    protected $deliveryExceptionNotificationSenderName = null;

    /**
     * @var string $deliveryExceptionNotificationSubjectText
     */
    protected $deliveryExceptionNotificationSubjectText = null;

    /**
     * @var enumItem $deliveryMethod
     */
    protected $deliveryMethod = null;

    /**
     * @var string $deliveryNotificationAccount
     */
    protected $deliveryNotificationAccount = null;

    /**
     * @var NameAddress $deliveryNotificationAddress
     */
    protected $deliveryNotificationAddress = null;

    /**
     * @var string $deliveryNotificationAddressEmail
     */
    protected $deliveryNotificationAddressEmail = null;

    /**
     * @var string $deliveryNotificationDescription
     */
    protected $deliveryNotificationDescription = null;

    /**
     * @var boolean $deliveryNotificationEmail
     */
    protected $deliveryNotificationEmail = null;

    /**
     * @var Money $deliveryNotificationFee
     */
    protected $deliveryNotificationFee = null;

    /**
     * @var boolean $deliveryNotificationFile
     */
    protected $deliveryNotificationFile = null;

    /**
     * @var boolean $deliveryNotificationPhone
     */
    protected $deliveryNotificationPhone = null;

    /**
     * @var string $deliveryNotificationSenderName
     */
    protected $deliveryNotificationSenderName = null;

    /**
     * @var boolean $deliveryNotificationSms
     */
    protected $deliveryNotificationSms = null;

    /**
     * @var string $deliveryNotificationSubjectText
     */
    protected $deliveryNotificationSubjectText = null;

    /**
     * @var boolean $deliveryNotificationVerbal
     */
    protected $deliveryNotificationVerbal = null;

    /**
     * @var Money $deliveryWindowFee
     */
    protected $deliveryWindowFee = null;

    /**
     * @var boolean $deliverToDoor
     */
    protected $deliverToDoor = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $destinationAirportCode
     */
    protected $destinationAirportCode = null;

    /**
     * @var Dimensions $dimension
     */
    protected $dimension = null;

    /**
     * @var boolean $dimensionalWeightRated
     */
    protected $dimensionalWeightRated = null;

    /**
     * @var boolean $directDelivery
     */
    protected $directDelivery = null;

    /**
     * @var Money $directDeliveryFee
     */
    protected $directDeliveryFee = null;

    /**
     * @var Money $discount
     */
    protected $discount = null;

    /**
     * @var enumItem $dispositionMethod
     */
    protected $dispositionMethod = null;

    /**
     * @var string $distributionCode
     */
    protected $distributionCode = null;

    /**
     * @var NameAddress $documentationConsignee
     */
    protected $documentationConsignee = null;

    /**
     * @var Money $documentationFee
     */
    protected $documentationFee = null;

    /**
     * @var boolean $documentsOnly
     */
    protected $documentsOnly = null;

    /**
     * @var date $dropoffAppointmentDate
     */
    protected $dropoffAppointmentDate = null;

    /**
     * @var string $dropoffAppointmentNumber
     */
    protected $dropoffAppointmentNumber = null;

    /**
     * @var time $dropoffAppointmentTime
     */
    protected $dropoffAppointmentTime = null;

    /**
     * @var Money $dryIceFee
     */
    protected $dryIceFee = null;

    /**
     * @var enumItem $dryIcePurpose
     */
    protected $dryIcePurpose = null;

    /**
     * @var enumItem $dryIceRegulationSet
     */
    protected $dryIceRegulationSet = null;

    /**
     * @var Weight $dryIceWeight
     */
    protected $dryIceWeight = null;

    /**
     * @var Money $dutyFee
     */
    protected $dutyFee = null;

    /**
     * @var date $earliestDeliveryDate
     */
    protected $earliestDeliveryDate = null;

    /**
     * @var time $earliestDeliveryTime
     */
    protected $earliestDeliveryTime = null;

    /**
     * @var Money $earlyDeliveryFee
     */
    protected $earlyDeliveryFee = null;

    /**
     * @var string $eeiNotificationAddressEmail
     */
    protected $eeiNotificationAddressEmail = null;

    /**
     * @var string $eeiNotificationDescription
     */
    protected $eeiNotificationDescription = null;

    /**
     * @var boolean $eeiNotificationEmail
     */
    protected $eeiNotificationEmail = null;

    /**
     * @var string $eeiNotificationSenderName
     */
    protected $eeiNotificationSenderName = null;

    /**
     * @var string $eeiNotificationSubjectText
     */
    protected $eeiNotificationSubjectText = null;

    /**
     * @var string $entryNumber
     */
    protected $entryNumber = null;

    /**
     * @var boolean $eveningDelivery
     */
    protected $eveningDelivery = null;

    /**
     * @var Money $eveningDeliveryFee
     */
    protected $eveningDeliveryFee = null;

    /**
     * @var boolean $exchange
     */
    protected $exchange = null;

    /**
     * @var Money $exchangeFee
     */
    protected $exchangeFee = null;

    /**
     * @var enumItem $exchangeMethod
     */
    protected $exchangeMethod = null;

    /**
     * @var NameAddress $exporter
     */
    protected $exporter = null;

    /**
     * @var string $exporterAccount
     */
    protected $exporterAccount = null;

    /**
     * @var string $exporterTaxId
     */
    protected $exporterTaxId = null;

    /**
     * @var string $exportDeclarationStatement
     */
    protected $exportDeclarationStatement = null;

    /**
     * @var string $exportInformationCode
     */
    protected $exportInformationCode = null;

    /**
     * @var string $exportReason
     */
    protected $exportReason = null;

    /**
     * @var Money $extendedAreaFee
     */
    protected $extendedAreaFee = null;

    /**
     * @var boolean $flats
     */
    protected $flats = null;

    /**
     * @var boolean $forkliftDelivery
     */
    protected $forkliftDelivery = null;

    /**
     * @var Money $forkliftDeliveryFee
     */
    protected $forkliftDeliveryFee = null;

    /**
     * @var boolean $forkliftPickup
     */
    protected $forkliftPickup = null;

    /**
     * @var Money $forkliftPickupFee
     */
    protected $forkliftPickupFee = null;

    /**
     * @var NameAddress $forwardingAgent
     */
    protected $forwardingAgent = null;

    /**
     * @var string $forwardingAgentTaxId
     */
    protected $forwardingAgentTaxId = null;

    /**
     * @var string $ftzIdentifier
     */
    protected $ftzIdentifier = null;

    /**
     * @var Money $fuelSurcharge
     */
    protected $fuelSurcharge = null;

    /**
     * @var boolean $goodsInFreeCirculation
     */
    protected $goodsInFreeCirculation = null;

    /**
     * @var NameAddress $goodsOrigin
     */
    protected $goodsOrigin = null;

    /**
     * @var boolean $groundsaver
     */
    protected $groundsaver = null;

    /**
     * @var NameAddress $halNotificationAddress
     */
    protected $halNotificationAddress = null;

    /**
     * @var string $halNotificationAddressEmail
     */
    protected $halNotificationAddressEmail = null;

    /**
     * @var string $halNotificationDescription
     */
    protected $halNotificationDescription = null;

    /**
     * @var boolean $halNotificationEmail
     */
    protected $halNotificationEmail = null;

    /**
     * @var language $halNotificationLocale
     */
    protected $halNotificationLocale = null;

    /**
     * @var boolean $halNotificationPhone
     */
    protected $halNotificationPhone = null;

    /**
     * @var string $halNotificationSenderName
     */
    protected $halNotificationSenderName = null;

    /**
     * @var boolean $halNotificationSms
     */
    protected $halNotificationSms = null;

    /**
     * @var string $halNotificationSubjectText
     */
    protected $halNotificationSubjectText = null;

    /**
     * @var boolean $hazmat
     */
    protected $hazmat = null;

    /**
     * @var boolean $hazmatAllPackedInOne
     */
    protected $hazmatAllPackedInOne = null;

    /**
     * @var HazmatItemList $hazmatContents
     */
    protected $hazmatContents = null;

    /**
     * @var Money $hazmatFee
     */
    protected $hazmatFee = null;

    /**
     * @var string $hazmatHandlingInformation
     */
    protected $hazmatHandlingInformation = null;

    /**
     * @var boolean $hazmatOverpack
     */
    protected $hazmatOverpack = null;

    /**
     * @var float $hazmatQValue
     */
    protected $hazmatQValue = null;

    /**
     * @var NameAddress $hazmatSignatoryAddress
     */
    protected $hazmatSignatoryAddress = null;

    /**
     * @var string $hazmatSignatoryTitle
     */
    protected $hazmatSignatoryTitle = null;

    /**
     * @var boolean $healthInsurance
     */
    protected $healthInsurance = null;

    /**
     * @var Money $healthInsuranceFee
     */
    protected $healthInsuranceFee = null;

    /**
     * @var boolean $helperDelivery
     */
    protected $helperDelivery = null;

    /**
     * @var Money $helperDeliveryFee
     */
    protected $helperDeliveryFee = null;

    /**
     * @var boolean $helperPickup
     */
    protected $helperPickup = null;

    /**
     * @var Money $helperPickupFee
     */
    protected $helperPickupFee = null;

    /**
     * @var boolean $holdAtLocation
     */
    protected $holdAtLocation = null;

    /**
     * @var NameAddress $holdAtLocationAddress
     */
    protected $holdAtLocationAddress = null;

    /**
     * @var string $holdAtLocationFacilityId
     */
    protected $holdAtLocationFacilityId = null;

    /**
     * @var Money $holdAtLocationFee
     */
    protected $holdAtLocationFee = null;

    /**
     * @var string $holdAtLocationReleaseCode
     */
    protected $holdAtLocationReleaseCode = null;

    /**
     * @var enumItem $holdAtLocationType
     */
    protected $holdAtLocationType = null;

    /**
     * @var boolean $holidayDelivery
     */
    protected $holidayDelivery = null;

    /**
     * @var Money $holidayDeliveryFee
     */
    protected $holidayDeliveryFee = null;

    /**
     * @var Money $holidayPickupFee
     */
    protected $holidayPickupFee = null;

    /**
     * @var string $hubCode
     */
    protected $hubCode = null;

    /**
     * @var boolean $hundredweightRated
     */
    protected $hundredweightRated = null;

    /**
     * @var Money $impbNonComplianceFee
     */
    protected $impbNonComplianceFee = null;

    /**
     * @var NameAddress $importerOfRecord
     */
    protected $importerOfRecord = null;

    /**
     * @var string $importerOfRecordAccount
     */
    protected $importerOfRecordAccount = null;

    /**
     * @var string $importerOfRecordTaxId
     */
    protected $importerOfRecordTaxId = null;

    /**
     * @var boolean $importDelivery
     */
    protected $importDelivery = null;

    /**
     * @var enumItem $inbondCode
     */
    protected $inbondCode = null;

    /**
     * @var boolean $insideDelivery
     */
    protected $insideDelivery = null;

    /**
     * @var Money $insideDeliveryFee
     */
    protected $insideDeliveryFee = null;

    /**
     * @var boolean $insidePickup
     */
    protected $insidePickup = null;

    /**
     * @var Money $insidePickupFee
     */
    protected $insidePickupFee = null;

    /**
     * @var enumItem $insuranceMethod
     */
    protected $insuranceMethod = null;

    /**
     * @var Money $invoiceDiscount
     */
    protected $invoiceDiscount = null;

    /**
     * @var Money $invoiceFreight
     */
    protected $invoiceFreight = null;

    /**
     * @var Money $invoiceInsuranceFee
     */
    protected $invoiceInsuranceFee = null;

    /**
     * @var Money $invoiceOtherFee
     */
    protected $invoiceOtherFee = null;

    /**
     * @var boolean $inTransitNotification
     */
    protected $inTransitNotification = null;

    /**
     * @var string $inTransitNotificationAddressEmail
     */
    protected $inTransitNotificationAddressEmail = null;

    /**
     * @var string $inTransitNotificationDescription
     */
    protected $inTransitNotificationDescription = null;

    /**
     * @var boolean $inTransitNotificationEmail
     */
    protected $inTransitNotificationEmail = null;

    /**
     * @var string $inTransitNotificationSenderName
     */
    protected $inTransitNotificationSenderName = null;

    /**
     * @var string $inTransitNotificationSubjectText
     */
    protected $inTransitNotificationSubjectText = null;

    /**
     * @var string $isoUniqueIdentifier
     */
    protected $isoUniqueIdentifier = null;

    /**
     * @var string $itemNumber
     */
    protected $itemNumber = null;

    /**
     * @var boolean $largePackage
     */
    protected $largePackage = null;

    /**
     * @var Money $largePackageFee
     */
    protected $largePackageFee = null;

    /**
     * @var boolean $largePallet
     */
    protected $largePallet = null;

    /**
     * @var Money $largePalletFee
     */
    protected $largePalletFee = null;

    /**
     * @var date $latestDeliveryDate
     */
    protected $latestDeliveryDate = null;

    /**
     * @var time $latestDeliveryTime
     */
    protected $latestDeliveryTime = null;

    /**
     * @var Money $licenseVerificationFee
     */
    protected $licenseVerificationFee = null;

    /**
     * @var boolean $liftgateDelivery
     */
    protected $liftgateDelivery = null;

    /**
     * @var Money $liftgateDeliveryFee
     */
    protected $liftgateDeliveryFee = null;

    /**
     * @var boolean $liftgatePickup
     */
    protected $liftgatePickup = null;

    /**
     * @var Money $liftgatePickupFee
     */
    protected $liftgatePickupFee = null;

    /**
     * @var boolean $lithiumBatteriesContainedInEquipment
     */
    protected $lithiumBatteriesContainedInEquipment = null;

    /**
     * @var string $locationId
     */
    protected $locationId = null;

    /**
     * @var string $markings
     */
    protected $markings = null;

    /**
     * @var StringList $maxicode
     */
    protected $maxicode = null;

    /**
     * @var string $miscReference1
     */
    protected $miscReference1 = null;

    /**
     * @var string $miscReference2
     */
    protected $miscReference2 = null;

    /**
     * @var string $miscReference3
     */
    protected $miscReference3 = null;

    /**
     * @var string $miscReference4
     */
    protected $miscReference4 = null;

    /**
     * @var string $miscReference5
     */
    protected $miscReference5 = null;

    /**
     * @var boolean $mms
     */
    protected $mms = null;

    /**
     * @var string $mmsPieceId
     */
    protected $mmsPieceId = null;

    /**
     * @var int $msn
     */
    protected $msn = null;

    /**
     * @var Money $multiPieceFee
     */
    protected $multiPieceFee = null;

    /**
     * @var boolean $neutralDeliveryService
     */
    protected $neutralDeliveryService = null;

    /**
     * @var Money $neutralDeliveryServiceFee
     */
    protected $neutralDeliveryServiceFee = null;

    /**
     * @var int $nofnSequence
     */
    protected $nofnSequence = null;

    /**
     * @var int $nofnSequenceBundle
     */
    protected $nofnSequenceBundle = null;

    /**
     * @var int $nofnTotal
     */
    protected $nofnTotal = null;

    /**
     * @var int $nofnTotalBundle
     */
    protected $nofnTotalBundle = null;

    /**
     * @var boolean $nonhazardousLithiumBatteries
     */
    protected $nonhazardousLithiumBatteries = null;

    /**
     * @var boolean $nonmachinableMail
     */
    protected $nonmachinableMail = null;

    /**
     * @var Money $nonmachinableMailFee
     */
    protected $nonmachinableMailFee = null;

    /**
     * @var boolean $nonrectangular
     */
    protected $nonrectangular = null;

    /**
     * @var boolean $nonstandardMail
     */
    protected $nonstandardMail = null;

    /**
     * @var Money $nonstandardMailFee
     */
    protected $nonstandardMailFee = null;

    /**
     * @var string $notificationFailureAddressEmail
     */
    protected $notificationFailureAddressEmail = null;

    /**
     * @var boolean $notFlatMachinable
     */
    protected $notFlatMachinable = null;

    /**
     * @var Money $offshoreFee
     */
    protected $offshoreFee = null;

    /**
     * @var date $originatorShipdate
     */
    protected $originatorShipdate = null;

    /**
     * @var string $originatorTrackingNumber
     */
    protected $originatorTrackingNumber = null;

    /**
     * @var NameAddress $originAddress
     */
    protected $originAddress = null;

    /**
     * @var string $originDescription
     */
    protected $originDescription = null;

    /**
     * @var anyType $otherCharges
     */
    protected $otherCharges = null;

    /**
     * @var boolean $oversize
     */
    protected $oversize = null;

    /**
     * @var Money $oversizeFee
     */
    protected $oversizeFee = null;

    /**
     * @var Money $overDimensionFee
     */
    protected $overDimensionFee = null;

    /**
     * @var int $packageListId
     */
    protected $packageListId = null;

    /**
     * @var string $packaging
     */
    protected $packaging = null;

    /**
     * @var string $packagingDescription
     */
    protected $packagingDescription = null;

    /**
     * @var Weight $packagingTareWeight
     */
    protected $packagingTareWeight = null;

    /**
     * @var Money $palletFee
     */
    protected $palletFee = null;

    /**
     * @var boolean $palletJackDelivery
     */
    protected $palletJackDelivery = null;

    /**
     * @var Money $palletJackDeliveryFee
     */
    protected $palletJackDeliveryFee = null;

    /**
     * @var boolean $palletJackPickup
     */
    protected $palletJackPickup = null;

    /**
     * @var Money $palletJackPickupFee
     */
    protected $palletJackPickupFee = null;

    /**
     * @var boolean $parcelAirlift
     */
    protected $parcelAirlift = null;

    /**
     * @var Money $parcelAirliftFee
     */
    protected $parcelAirliftFee = null;

    /**
     * @var DataDictionary $parentContainer
     */
    protected $parentContainer = null;

    /**
     * @var string $parentContainerCode
     */
    protected $parentContainerCode = null;

    /**
     * @var boolean $partiesRelated
     */
    protected $partiesRelated = null;

    /**
     * @var boolean $perishable
     */
    protected $perishable = null;

    /**
     * @var boolean $pharmacyDelivery
     */
    protected $pharmacyDelivery = null;

    /**
     * @var time $pickupTime
     */
    protected $pickupTime = null;

    /**
     * @var int $pieceCount
     */
    protected $pieceCount = null;

    /**
     * @var Money $pieceCountFee
     */
    protected $pieceCountFee = null;

    /**
     * @var boolean $poaIncluded
     */
    protected $poaIncluded = null;

    /**
     * @var string $portOfEntry
     */
    protected $portOfEntry = null;

    /**
     * @var NameAddress $preAlertNotificationAddress
     */
    protected $preAlertNotificationAddress = null;

    /**
     * @var string $preAlertNotificationAddressEmail
     */
    protected $preAlertNotificationAddressEmail = null;

    /**
     * @var string $preAlertNotificationDescription
     */
    protected $preAlertNotificationDescription = null;

    /**
     * @var boolean $preAlertNotificationEmail
     */
    protected $preAlertNotificationEmail = null;

    /**
     * @var language $preAlertNotificationLocale
     */
    protected $preAlertNotificationLocale = null;

    /**
     * @var boolean $preAlertNotificationPhone
     */
    protected $preAlertNotificationPhone = null;

    /**
     * @var string $preAlertNotificationSenderName
     */
    protected $preAlertNotificationSenderName = null;

    /**
     * @var boolean $preAlertNotificationSms
     */
    protected $preAlertNotificationSms = null;

    /**
     * @var string $preAlertNotificationSubjectText
     */
    protected $preAlertNotificationSubjectText = null;

    /**
     * @var boolean $priorDeliveryNotificationConsignee
     */
    protected $priorDeliveryNotificationConsignee = null;

    /**
     * @var Money $priorDeliveryNotificationFee
     */
    protected $priorDeliveryNotificationFee = null;

    /**
     * @var boolean $proactiveRecovery
     */
    protected $proactiveRecovery = null;

    /**
     * @var Money $proactiveRecoveryFee
     */
    protected $proactiveRecoveryFee = null;

    /**
     * @var boolean $proof
     */
    protected $proof = null;

    /**
     * @var Money $proofFee
     */
    protected $proofFee = null;

    /**
     * @var string $proofNumber
     */
    protected $proofNumber = null;

    /**
     * @var boolean $proofRequireSignature
     */
    protected $proofRequireSignature = null;

    /**
     * @var boolean $proofRequireSignatureAdult
     */
    protected $proofRequireSignatureAdult = null;

    /**
     * @var boolean $proofRequireSignatureConsignee
     */
    protected $proofRequireSignatureConsignee = null;

    /**
     * @var Money $proofRequireSignatureFee
     */
    protected $proofRequireSignatureFee = null;

    /**
     * @var boolean $proofReturnOfDocuments
     */
    protected $proofReturnOfDocuments = null;

    /**
     * @var boolean $proofSignatureWaiver
     */
    protected $proofSignatureWaiver = null;

    /**
     * @var boolean $proofUseAlternateNumber
     */
    protected $proofUseAlternateNumber = null;

    /**
     * @var Weight $ratedWeight
     */
    protected $ratedWeight = null;

    /**
     * @var string $rateCode
     */
    protected $rateCode = null;

    /**
     * @var boolean $registeredMail
     */
    protected $registeredMail = null;

    /**
     * @var Money $registeredMailFee
     */
    protected $registeredMailFee = null;

    /**
     * @var Money $remoteOriginFee
     */
    protected $remoteOriginFee = null;

    /**
     * @var anyType $remotePassthrough
     */
    protected $remotePassthrough = null;

    /**
     * @var Money $residentialDeliveryFee
     */
    protected $residentialDeliveryFee = null;

    /**
     * @var string $returnAccount
     */
    protected $returnAccount = null;

    /**
     * @var NameAddress $returnAddress
     */
    protected $returnAddress = null;

    /**
     * @var enumItem $returnAddressMethod
     */
    protected $returnAddressMethod = null;

    /**
     * @var boolean $returnDelivery
     */
    protected $returnDelivery = null;

    /**
     * @var string $returnDeliveryAddressEmail
     */
    protected $returnDeliveryAddressEmail = null;

    /**
     * @var language $returnDeliveryAddressEmailLocale
     */
    protected $returnDeliveryAddressEmailLocale = null;

    /**
     * @var Money $returnDeliveryFee
     */
    protected $returnDeliveryFee = null;

    /**
     * @var enumItem $returnDeliveryMethod
     */
    protected $returnDeliveryMethod = null;

    /**
     * @var NameAddress $returnDeliveryNotificationAddress
     */
    protected $returnDeliveryNotificationAddress = null;

    /**
     * @var NameAddress $returnDeliveryNotificationAddress2
     */
    protected $returnDeliveryNotificationAddress2 = null;

    /**
     * @var string $returnDeliveryNotificationAddressEmail
     */
    protected $returnDeliveryNotificationAddressEmail = null;

    /**
     * @var string $returnDeliveryNotificationDescription
     */
    protected $returnDeliveryNotificationDescription = null;

    /**
     * @var boolean $returnDeliveryNotificationEmail
     */
    protected $returnDeliveryNotificationEmail = null;

    /**
     * @var boolean $returnDeliveryNotificationFax
     */
    protected $returnDeliveryNotificationFax = null;

    /**
     * @var Money $returnDeliveryNotificationFee
     */
    protected $returnDeliveryNotificationFee = null;

    /**
     * @var string $returnDeliveryNotificationSenderName
     */
    protected $returnDeliveryNotificationSenderName = null;

    /**
     * @var string $returnDeliveryNotificationSubjectText
     */
    protected $returnDeliveryNotificationSubjectText = null;

    /**
     * @var int $returnTrackingRetentionDays
     */
    protected $returnTrackingRetentionDays = null;

    /**
     * @var boolean $routedExportTransaction
     */
    protected $routedExportTransaction = null;

    /**
     * @var string $routingCode
     */
    protected $routingCode = null;

    /**
     * @var string $routingCode2
     */
    protected $routingCode2 = null;

    /**
     * @var string $routingCode3
     */
    protected $routingCode3 = null;

    /**
     * @var string $routingCode4
     */
    protected $routingCode4 = null;

    /**
     * @var string $routingCode5
     */
    protected $routingCode5 = null;

    /**
     * @var string $sackLevel
     */
    protected $sackLevel = null;

    /**
     * @var string $sackZip
     */
    protected $sackZip = null;

    /**
     * @var boolean $saturdayDelivery
     */
    protected $saturdayDelivery = null;

    /**
     * @var Money $saturdayDeliveryFee
     */
    protected $saturdayDeliveryFee = null;

    /**
     * @var Money $saturdayPickupFee
     */
    protected $saturdayPickupFee = null;

    /**
     * @var boolean $security
     */
    protected $security = null;

    /**
     * @var Money $securityFee
     */
    protected $securityFee = null;

    /**
     * @var string $sedExemptionNumber
     */
    protected $sedExemptionNumber = null;

    /**
     * @var enumItem $sedMethod
     */
    protected $sedMethod = null;

    /**
     * @var string $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var date $shipdate
     */
    protected $shipdate = null;

    /**
     * @var string $shipper
     */
    protected $shipper = null;

    /**
     * @var string $shipperReference
     */
    protected $shipperReference = null;

    /**
     * @var NameAddress $shipNotificationAddress
     */
    protected $shipNotificationAddress = null;

    /**
     * @var NameAddress $shipNotificationAddress2
     */
    protected $shipNotificationAddress2 = null;

    /**
     * @var string $shipNotificationAddressEmail
     */
    protected $shipNotificationAddressEmail = null;

    /**
     * @var string $shipNotificationAddressFax
     */
    protected $shipNotificationAddressFax = null;

    /**
     * @var string $shipNotificationDescription
     */
    protected $shipNotificationDescription = null;

    /**
     * @var boolean $shipNotificationEmail
     */
    protected $shipNotificationEmail = null;

    /**
     * @var boolean $shipNotificationFax
     */
    protected $shipNotificationFax = null;

    /**
     * @var Money $shipNotificationFee
     */
    protected $shipNotificationFee = null;

    /**
     * @var string $shipNotificationSenderName
     */
    protected $shipNotificationSenderName = null;

    /**
     * @var string $shipNotificationSubjectText
     */
    protected $shipNotificationSubjectText = null;

    /**
     * @var boolean $shipNotificationVerbal
     */
    protected $shipNotificationVerbal = null;

    /**
     * @var boolean $signatureRelease
     */
    protected $signatureRelease = null;

    /**
     * @var Money $special
     */
    protected $special = null;

    /**
     * @var boolean $specialDelivery
     */
    protected $specialDelivery = null;

    /**
     * @var Money $specialDeliveryFee
     */
    protected $specialDeliveryFee = null;

    /**
     * @var boolean $stairDelivery
     */
    protected $stairDelivery = null;

    /**
     * @var Money $stairDeliveryFee
     */
    protected $stairDeliveryFee = null;

    /**
     * @var boolean $stairPickup
     */
    protected $stairPickup = null;

    /**
     * @var Money $stairPickupFee
     */
    protected $stairPickupFee = null;

    /**
     * @var string $subcategory
     */
    protected $subcategory = null;

    /**
     * @var string $subNumber
     */
    protected $subNumber = null;

    /**
     * @var boolean $sundayDelivery
     */
    protected $sundayDelivery = null;

    /**
     * @var Money $sundayDeliveryFee
     */
    protected $sundayDeliveryFee = null;

    /**
     * @var Money $sundayPickupFee
     */
    protected $sundayPickupFee = null;

    /**
     * @var boolean $suppressDc
     */
    protected $suppressDc = null;

    /**
     * @var boolean $suppressMms
     */
    protected $suppressMms = null;

    /**
     * @var Money $tax
     */
    protected $tax = null;

    /**
     * @var enumItem $temperatureControl
     */
    protected $temperatureControl = null;

    /**
     * @var Money $temperatureControlFee
     */
    protected $temperatureControlFee = null;

    /**
     * @var Money $terminalHandlingFee
     */
    protected $terminalHandlingFee = null;

    /**
     * @var string $terms
     */
    protected $terms = null;

    /**
     * @var string $termsOfSale
     */
    protected $termsOfSale = null;

    /**
     * @var boolean $thirdPartyBilling
     */
    protected $thirdPartyBilling = null;

    /**
     * @var string $thirdPartyBillingAccount
     */
    protected $thirdPartyBillingAccount = null;

    /**
     * @var NameAddress $thirdPartyBillingAddress
     */
    protected $thirdPartyBillingAddress = null;

    /**
     * @var Commitment $timeInTransit
     */
    protected $timeInTransit = null;

    /**
     * @var Money $total
     */
    protected $total = null;

    /**
     * @var string $trackingNumber
     */
    protected $trackingNumber = null;

    /**
     * @var string $trackingNumber2
     */
    protected $trackingNumber2 = null;

    /**
     * @var enumItem $transportMode
     */
    protected $transportMode = null;

    /**
     * @var NameAddress $ultimateConsignee
     */
    protected $ultimateConsignee = null;

    /**
     * @var enumItem $ultimateConsigneeType
     */
    protected $ultimateConsigneeType = null;

    /**
     * @var string $ultimateDestinationCountry
     */
    protected $ultimateDestinationCountry = null;

    /**
     * @var boolean $unpack
     */
    protected $unpack = null;

    /**
     * @var Money $unpackFee
     */
    protected $unpackFee = null;

    /**
     * @var Money $urbanDeliveryFee
     */
    protected $urbanDeliveryFee = null;

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

    /**
     * @var string $waybillBolNumber
     */
    protected $waybillBolNumber = null;

    /**
     * @var Weight $weight
     */
    protected $weight = null;

    /**
     * @var Money $wharfageFee
     */
    protected $wharfageFee = null;

    /**
     * @var string $worldEaseCode
     */
    protected $worldEaseCode = null;

    /**
     * @var boolean $worldEaseFlag
     */
    protected $worldEaseFlag = null;

    /**
     * @var int $worldEaseId
     */
    protected $worldEaseId = null;

    /**
     * @var string $worldEaseMasterShipmentId
     */
    protected $worldEaseMasterShipmentId = null;

    /**
     * @var boolean $worldEaseSingleEuCountry
     */
    protected $worldEaseSingleEuCountry = null;

    /**
     * @var string $zone
     */
    protected $zone = null;

    /**
     * @var string $externalKey
     */
    protected $externalKey = null;

    /**
     * @param string $externalKey
     */
    public function __construct($externalKey)
    {
      $this->externalKey = $externalKey;
    }

    /**
     * @return boolean
     */
    public function getAdditionalHandling()
    {
      return $this->additionalHandling;
    }

    /**
     * @param boolean $additionalHandling
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAdditionalHandling($additionalHandling)
    {
      $this->additionalHandling = $additionalHandling;
      return $this;
    }

    /**
     * @return Money
     */
    public function getAdditionalHandlingFee()
    {
      return $this->additionalHandlingFee;
    }

    /**
     * @param Money $additionalHandlingFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAdditionalHandlingFee($additionalHandlingFee)
    {
      $this->additionalHandlingFee = $additionalHandlingFee;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getAdditionalHandlingType()
    {
      return $this->additionalHandlingType;
    }

    /**
     * @param enumItem $additionalHandlingType
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAdditionalHandlingType($additionalHandlingType)
    {
      $this->additionalHandlingType = $additionalHandlingType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdditionalHardcopyDocumentation()
    {
      return $this->additionalHardcopyDocumentation;
    }

    /**
     * @param boolean $additionalHardcopyDocumentation
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAdditionalHardcopyDocumentation($additionalHardcopyDocumentation)
    {
      $this->additionalHardcopyDocumentation = $additionalHardcopyDocumentation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddressChangeNotification()
    {
      return $this->addressChangeNotification;
    }

    /**
     * @param boolean $addressChangeNotification
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAddressChangeNotification($addressChangeNotification)
    {
      $this->addressChangeNotification = $addressChangeNotification;
      return $this;
    }

    /**
     * @return string
     */
    public function getAesTransactionNumber()
    {
      return $this->aesTransactionNumber;
    }

    /**
     * @param string $aesTransactionNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAesTransactionNumber($aesTransactionNumber)
    {
      $this->aesTransactionNumber = $aesTransactionNumber;
      return $this;
    }

    /**
     * @return Money
     */
    public function getAirFreightFee()
    {
      return $this->airFreightFee;
    }

    /**
     * @param Money $airFreightFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAirFreightFee($airFreightFee)
    {
      $this->airFreightFee = $airFreightFee;
      return $this;
    }

    /**
     * @return AlcoholItemList
     */
    public function getAlcoholContents()
    {
      return $this->alcoholContents;
    }

    /**
     * @param AlcoholItemList $alcoholContents
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAlcoholContents($alcoholContents)
    {
      $this->alcoholContents = $alcoholContents;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAppointmentDelivery()
    {
      return $this->appointmentDelivery;
    }

    /**
     * @param boolean $appointmentDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAppointmentDelivery($appointmentDelivery)
    {
      $this->appointmentDelivery = $appointmentDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getAppointmentDeliveryFee()
    {
      return $this->appointmentDeliveryFee;
    }

    /**
     * @param Money $appointmentDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setAppointmentDeliveryFee($appointmentDeliveryFee)
    {
      $this->appointmentDeliveryFee = $appointmentDeliveryFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getApportionedBase()
    {
      return $this->apportionedBase;
    }

    /**
     * @param Money $apportionedBase
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setApportionedBase($apportionedBase)
    {
      $this->apportionedBase = $apportionedBase;
      return $this;
    }

    /**
     * @return Money
     */
    public function getApportionedDiscount()
    {
      return $this->apportionedDiscount;
    }

    /**
     * @param Money $apportionedDiscount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setApportionedDiscount($apportionedDiscount)
    {
      $this->apportionedDiscount = $apportionedDiscount;
      return $this;
    }

    /**
     * @return Money
     */
    public function getApportionedSpecial()
    {
      return $this->apportionedSpecial;
    }

    /**
     * @param Money $apportionedSpecial
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setApportionedSpecial($apportionedSpecial)
    {
      $this->apportionedSpecial = $apportionedSpecial;
      return $this;
    }

    /**
     * @return Money
     */
    public function getApportionedTotal()
    {
      return $this->apportionedTotal;
    }

    /**
     * @param Money $apportionedTotal
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setApportionedTotal($apportionedTotal)
    {
      $this->apportionedTotal = $apportionedTotal;
      return $this;
    }

    /**
     * @return date
     */
    public function getArriveDate()
    {
      return $this->arriveDate;
    }

    /**
     * @param date $arriveDate
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setArriveDate($arriveDate)
    {
      $this->arriveDate = $arriveDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
      return $this->barCode;
    }

    /**
     * @param string $barCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBarCode($barCode)
    {
      $this->barCode = $barCode;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBarCodeBinary()
    {
      return $this->barCodeBinary;
    }

    /**
     * @param base64Binary $barCodeBinary
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBarCodeBinary($barCodeBinary)
    {
      $this->barCodeBinary = $barCodeBinary;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCode2()
    {
      return $this->barCode2;
    }

    /**
     * @param string $barCode2
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBarCode2($barCode2)
    {
      $this->barCode2 = $barCode2;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBarCode2Binary()
    {
      return $this->barCode2Binary;
    }

    /**
     * @param base64Binary $barCode2Binary
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBarCode2Binary($barCode2Binary)
    {
      $this->barCode2Binary = $barCode2Binary;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCode3()
    {
      return $this->barCode3;
    }

    /**
     * @param string $barCode3
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBarCode3($barCode3)
    {
      $this->barCode3 = $barCode3;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBarCode3Binary()
    {
      return $this->barCode3Binary;
    }

    /**
     * @param base64Binary $barCode3Binary
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBarCode3Binary($barCode3Binary)
    {
      $this->barCode3Binary = $barCode3Binary;
      return $this;
    }

    /**
     * @return Money
     */
    public function getBase()
    {
      return $this->base;
    }

    /**
     * @param Money $base
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBase($base)
    {
      $this->base = $base;
      return $this;
    }

    /**
     * @return Money
     */
    public function getBillingFee()
    {
      return $this->billingFee;
    }

    /**
     * @param Money $billingFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBillingFee($billingFee)
    {
      $this->billingFee = $billingFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getBolComment()
    {
      return $this->bolComment;
    }

    /**
     * @param string $bolComment
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBolComment($bolComment)
    {
      $this->bolComment = $bolComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getBolLegalStatement()
    {
      return $this->bolLegalStatement;
    }

    /**
     * @param string $bolLegalStatement
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBolLegalStatement($bolLegalStatement)
    {
      $this->bolLegalStatement = $bolLegalStatement;
      return $this;
    }

    /**
     * @return Money
     */
    public function getBorderProcessingFee()
    {
      return $this->borderProcessingFee;
    }

    /**
     * @param Money $borderProcessingFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBorderProcessingFee($borderProcessingFee)
    {
      $this->borderProcessingFee = $borderProcessingFee;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getBrokerageMethod()
    {
      return $this->brokerageMethod;
    }

    /**
     * @param enumItem $brokerageMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBrokerageMethod($brokerageMethod)
    {
      $this->brokerageMethod = $brokerageMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBrokerageThirdPartyBilling()
    {
      return $this->brokerageThirdPartyBilling;
    }

    /**
     * @param boolean $brokerageThirdPartyBilling
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBrokerageThirdPartyBilling($brokerageThirdPartyBilling)
    {
      $this->brokerageThirdPartyBilling = $brokerageThirdPartyBilling;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrokerageThirdPartyBillingAccount()
    {
      return $this->brokerageThirdPartyBillingAccount;
    }

    /**
     * @param string $brokerageThirdPartyBillingAccount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBrokerageThirdPartyBillingAccount($brokerageThirdPartyBillingAccount)
    {
      $this->brokerageThirdPartyBillingAccount = $brokerageThirdPartyBillingAccount;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getBrokerageThirdPartyBillingAddress()
    {
      return $this->brokerageThirdPartyBillingAddress;
    }

    /**
     * @param NameAddress $brokerageThirdPartyBillingAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBrokerageThirdPartyBillingAddress($brokerageThirdPartyBillingAddress)
    {
      $this->brokerageThirdPartyBillingAddress = $brokerageThirdPartyBillingAddress;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBundleId($bundleId)
    {
      $this->bundleId = $bundleId;
      return $this;
    }

    /**
     * @return IntegerList
     */
    public function getBundleIdList()
    {
      return $this->bundleIdList;
    }

    /**
     * @param IntegerList $bundleIdList
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setBundleIdList($bundleIdList)
    {
      $this->bundleIdList = $bundleIdList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCalltag()
    {
      return $this->calltag;
    }

    /**
     * @param boolean $calltag
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCalltag($calltag)
    {
      $this->calltag = $calltag;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCalltagFee()
    {
      return $this->calltagFee;
    }

    /**
     * @param Money $calltagFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCalltagFee($calltagFee)
    {
      $this->calltagFee = $calltagFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalltagNumber()
    {
      return $this->calltagNumber;
    }

    /**
     * @param string $calltagNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCalltagNumber($calltagNumber)
    {
      $this->calltagNumber = $calltagNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCarbonNeutral()
    {
      return $this->carbonNeutral;
    }

    /**
     * @param boolean $carbonNeutral
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarbonNeutral($carbonNeutral)
    {
      $this->carbonNeutral = $carbonNeutral;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCarbonNeutralFee()
    {
      return $this->carbonNeutralFee;
    }

    /**
     * @param Money $carbonNeutralFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarbonNeutralFee($carbonNeutralFee)
    {
      $this->carbonNeutralFee = $carbonNeutralFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCarrierCostSurcharge()
    {
      return $this->carrierCostSurcharge;
    }

    /**
     * @param Money $carrierCostSurcharge
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarrierCostSurcharge($carrierCostSurcharge)
    {
      $this->carrierCostSurcharge = $carrierCostSurcharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierInstructions()
    {
      return $this->carrierInstructions;
    }

    /**
     * @param string $carrierInstructions
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarrierInstructions($carrierInstructions)
    {
      $this->carrierInstructions = $carrierInstructions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCarrierMonitoring()
    {
      return $this->carrierMonitoring;
    }

    /**
     * @param boolean $carrierMonitoring
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarrierMonitoring($carrierMonitoring)
    {
      $this->carrierMonitoring = $carrierMonitoring;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCarrierMonitoringFee()
    {
      return $this->carrierMonitoringFee;
    }

    /**
     * @param Money $carrierMonitoringFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarrierMonitoringFee($carrierMonitoringFee)
    {
      $this->carrierMonitoringFee = $carrierMonitoringFee;
      return $this;
    }

    /**
     * @return enumList
     */
    public function getCarrierMonitoringPurpose()
    {
      return $this->carrierMonitoringPurpose;
    }

    /**
     * @param enumList $carrierMonitoringPurpose
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarrierMonitoringPurpose($carrierMonitoringPurpose)
    {
      $this->carrierMonitoringPurpose = $carrierMonitoringPurpose;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierName()
    {
      return $this->carrierName;
    }

    /**
     * @param string $carrierName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarrierName($carrierName)
    {
      $this->carrierName = $carrierName;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getCarrierTenderMethod()
    {
      return $this->carrierTenderMethod;
    }

    /**
     * @param enumItem $carrierTenderMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCarrierTenderMethod($carrierTenderMethod)
    {
      $this->carrierTenderMethod = $carrierTenderMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCertifiedMail()
    {
      return $this->certifiedMail;
    }

    /**
     * @param boolean $certifiedMail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCertifiedMail($certifiedMail)
    {
      $this->certifiedMail = $certifiedMail;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCertifiedMailFee()
    {
      return $this->certifiedMailFee;
    }

    /**
     * @param Money $certifiedMailFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCertifiedMailFee($certifiedMailFee)
    {
      $this->certifiedMailFee = $certifiedMailFee;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCertOfOriginMethod($certOfOriginMethod)
    {
      $this->certOfOriginMethod = $certOfOriginMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChainOfSignature()
    {
      return $this->chainOfSignature;
    }

    /**
     * @param boolean $chainOfSignature
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setChainOfSignature($chainOfSignature)
    {
      $this->chainOfSignature = $chainOfSignature;
      return $this;
    }

    /**
     * @return Money
     */
    public function getChainOfSignatureFee()
    {
      return $this->chainOfSignatureFee;
    }

    /**
     * @param Money $chainOfSignatureFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setChainOfSignatureFee($chainOfSignatureFee)
    {
      $this->chainOfSignatureFee = $chainOfSignatureFee;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getChargesOnDocumentation()
    {
      return $this->chargesOnDocumentation;
    }

    /**
     * @param enumItem $chargesOnDocumentation
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setChargesOnDocumentation($chargesOnDocumentation)
    {
      $this->chargesOnDocumentation = $chargesOnDocumentation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCodAlternateNumber()
    {
      return $this->codAlternateNumber;
    }

    /**
     * @param boolean $codAlternateNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodAlternateNumber($codAlternateNumber)
    {
      $this->codAlternateNumber = $codAlternateNumber;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCodAmount()
    {
      return $this->codAmount;
    }

    /**
     * @param Money $codAmount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodAmount($codAmount)
    {
      $this->codAmount = $codAmount;
      return $this;
    }

    /**
     * @return Money
     */
    public function getCodFee()
    {
      return $this->codFee;
    }

    /**
     * @param Money $codFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodFee($codFee)
    {
      $this->codFee = $codFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodInstructions()
    {
      return $this->codInstructions;
    }

    /**
     * @param string $codInstructions
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodInstructions($codInstructions)
    {
      $this->codInstructions = $codInstructions;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodMasterTrackingNumber()
    {
      return $this->codMasterTrackingNumber;
    }

    /**
     * @param string $codMasterTrackingNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodMasterTrackingNumber($codMasterTrackingNumber)
    {
      $this->codMasterTrackingNumber = $codMasterTrackingNumber;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getCodMethod()
    {
      return $this->codMethod;
    }

    /**
     * @param enumItem $codMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodMethod($codMethod)
    {
      $this->codMethod = $codMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodNumber()
    {
      return $this->codNumber;
    }

    /**
     * @param string $codNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodNumber($codNumber)
    {
      $this->codNumber = $codNumber;
      return $this;
    }

    /**
     * @return enumList
     */
    public function getCodPaymentMethod()
    {
      return $this->codPaymentMethod;
    }

    /**
     * @param enumList $codPaymentMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodPaymentMethod($codPaymentMethod)
    {
      $this->codPaymentMethod = $codPaymentMethod;
      return $this;
    }

    /**
     * @return date
     */
    public function getCodPaymentMethodPostDatedCheckDate()
    {
      return $this->codPaymentMethodPostDatedCheckDate;
    }

    /**
     * @param date $codPaymentMethodPostDatedCheckDate
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodPaymentMethodPostDatedCheckDate($codPaymentMethodPostDatedCheckDate)
    {
      $this->codPaymentMethodPostDatedCheckDate = $codPaymentMethodPostDatedCheckDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodPayorAddressEmail()
    {
      return $this->codPayorAddressEmail;
    }

    /**
     * @param string $codPayorAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodPayorAddressEmail($codPayorAddressEmail)
    {
      $this->codPayorAddressEmail = $codPayorAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodPayorInstructions()
    {
      return $this->codPayorInstructions;
    }

    /**
     * @param string $codPayorInstructions
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodPayorInstructions($codPayorInstructions)
    {
      $this->codPayorInstructions = $codPayorInstructions;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodPendingFeePayorPercentage()
    {
      return $this->codPendingFeePayorPercentage;
    }

    /**
     * @param string $codPendingFeePayorPercentage
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodPendingFeePayorPercentage($codPendingFeePayorPercentage)
    {
      $this->codPendingFeePayorPercentage = $codPendingFeePayorPercentage;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getCodReturnAddress()
    {
      return $this->codReturnAddress;
    }

    /**
     * @param NameAddress $codReturnAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodReturnAddress($codReturnAddress)
    {
      $this->codReturnAddress = $codReturnAddress;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getCodReturnMethod()
    {
      return $this->codReturnMethod;
    }

    /**
     * @param enumItem $codReturnMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodReturnMethod($codReturnMethod)
    {
      $this->codReturnMethod = $codReturnMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodReturnTrackingNumber()
    {
      return $this->codReturnTrackingNumber;
    }

    /**
     * @param string $codReturnTrackingNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCodReturnTrackingNumber($codReturnTrackingNumber)
    {
      $this->codReturnTrackingNumber = $codReturnTrackingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string $comments
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setComments($comments)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getCommercialInvoiceMethod()
    {
      return $this->commercialInvoiceMethod;
    }

    /**
     * @param enumItem $commercialInvoiceMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCommercialInvoiceMethod($commercialInvoiceMethod)
    {
      $this->commercialInvoiceMethod = $commercialInvoiceMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommitmentCode()
    {
      return $this->commitmentCode;
    }

    /**
     * @param string $commitmentCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCommitmentCode($commitmentCode)
    {
      $this->commitmentCode = $commitmentCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommodityClass()
    {
      return $this->commodityClass;
    }

    /**
     * @param string $commodityClass
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCommodityClass($commodityClass)
    {
      $this->commodityClass = $commodityClass;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCommodityCondition($commodityCondition)
    {
      $this->commodityCondition = $commodityCondition;
      return $this;
    }

    /**
     * @return CommodityList
     */
    public function getCommodityContents()
    {
      return $this->commodityContents;
    }

    /**
     * @param CommodityList $commodityContents
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCommodityContents($commodityContents)
    {
      $this->commodityContents = $commodityContents;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getConsignee()
    {
      return $this->consignee;
    }

    /**
     * @param NameAddress $consignee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsignee($consignee)
    {
      $this->consignee = $consignee;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeAccount()
    {
      return $this->consigneeAccount;
    }

    /**
     * @param string $consigneeAccount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeAccount($consigneeAccount)
    {
      $this->consigneeAccount = $consigneeAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeBillingId()
    {
      return $this->consigneeBillingId;
    }

    /**
     * @param string $consigneeBillingId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeBillingId($consigneeBillingId)
    {
      $this->consigneeBillingId = $consigneeBillingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeCode()
    {
      return $this->consigneeCode;
    }

    /**
     * @param string $consigneeCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeCode($consigneeCode)
    {
      $this->consigneeCode = $consigneeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeCustomsId()
    {
      return $this->consigneeCustomsId;
    }

    /**
     * @param string $consigneeCustomsId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeCustomsId($consigneeCustomsId)
    {
      $this->consigneeCustomsId = $consigneeCustomsId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeEmail()
    {
      return $this->consigneeEmail;
    }

    /**
     * @param string $consigneeEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeEmail($consigneeEmail)
    {
      $this->consigneeEmail = $consigneeEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeReference()
    {
      return $this->consigneeReference;
    }

    /**
     * @param string $consigneeReference
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeReference($consigneeReference)
    {
      $this->consigneeReference = $consigneeReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeTaxId()
    {
      return $this->consigneeTaxId;
    }

    /**
     * @param string $consigneeTaxId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeTaxId($consigneeTaxId)
    {
      $this->consigneeTaxId = $consigneeTaxId;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getConsigneeTaxIdType()
    {
      return $this->consigneeTaxIdType;
    }

    /**
     * @param enumItem $consigneeTaxIdType
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeTaxIdType($consigneeTaxIdType)
    {
      $this->consigneeTaxIdType = $consigneeTaxIdType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConsigneeThirdPartyBilling()
    {
      return $this->consigneeThirdPartyBilling;
    }

    /**
     * @param boolean $consigneeThirdPartyBilling
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeThirdPartyBilling($consigneeThirdPartyBilling)
    {
      $this->consigneeThirdPartyBilling = $consigneeThirdPartyBilling;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeThirdPartyBillingAccount()
    {
      return $this->consigneeThirdPartyBillingAccount;
    }

    /**
     * @param string $consigneeThirdPartyBillingAccount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeThirdPartyBillingAccount($consigneeThirdPartyBillingAccount)
    {
      $this->consigneeThirdPartyBillingAccount = $consigneeThirdPartyBillingAccount;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getConsigneeThirdPartyBillingAddress()
    {
      return $this->consigneeThirdPartyBillingAddress;
    }

    /**
     * @param NameAddress $consigneeThirdPartyBillingAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsigneeThirdPartyBillingAddress($consigneeThirdPartyBillingAddress)
    {
      $this->consigneeThirdPartyBillingAddress = $consigneeThirdPartyBillingAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsolidationCarrier()
    {
      return $this->consolidationCarrier;
    }

    /**
     * @param string $consolidationCarrier
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsolidationCarrier($consolidationCarrier)
    {
      $this->consolidationCarrier = $consolidationCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsolidationCode()
    {
      return $this->consolidationCode;
    }

    /**
     * @param string $consolidationCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsolidationCode($consolidationCode)
    {
      $this->consolidationCode = $consolidationCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConsolidationFlag()
    {
      return $this->consolidationFlag;
    }

    /**
     * @param boolean $consolidationFlag
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsolidationFlag($consolidationFlag)
    {
      $this->consolidationFlag = $consolidationFlag;
      return $this;
    }

    /**
     * @return int
     */
    public function getConsolidationId()
    {
      return $this->consolidationId;
    }

    /**
     * @param int $consolidationId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsolidationId($consolidationId)
    {
      $this->consolidationId = $consolidationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsolidationShipmentId()
    {
      return $this->consolidationShipmentId;
    }

    /**
     * @param string $consolidationShipmentId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsolidationShipmentId($consolidationShipmentId)
    {
      $this->consolidationShipmentId = $consolidationShipmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsolidationType()
    {
      return $this->consolidationType;
    }

    /**
     * @param string $consolidationType
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setConsolidationType($consolidationType)
    {
      $this->consolidationType = $consolidationType;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setContainerCode($containerCode)
    {
      $this->containerCode = $containerCode;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getCustomsBroker()
    {
      return $this->customsBroker;
    }

    /**
     * @param NameAddress $customsBroker
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCustomsBroker($customsBroker)
    {
      $this->customsBroker = $customsBroker;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsBrokerCode()
    {
      return $this->customsBrokerCode;
    }

    /**
     * @param string $customsBrokerCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCustomsBrokerCode($customsBrokerCode)
    {
      $this->customsBrokerCode = $customsBrokerCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCycleCount()
    {
      return $this->cycleCount;
    }

    /**
     * @param int $cycleCount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setCycleCount($cycleCount)
    {
      $this->cycleCount = $cycleCount;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDeclaredValueAmount()
    {
      return $this->declaredValueAmount;
    }

    /**
     * @param Money $declaredValueAmount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeclaredValueAmount($declaredValueAmount)
    {
      $this->declaredValueAmount = $declaredValueAmount;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDeclaredValueCustoms()
    {
      return $this->declaredValueCustoms;
    }

    /**
     * @param Money $declaredValueCustoms
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeclaredValueCustoms($declaredValueCustoms)
    {
      $this->declaredValueCustoms = $declaredValueCustoms;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDeclaredValueFee()
    {
      return $this->declaredValueFee;
    }

    /**
     * @param Money $declaredValueFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeclaredValueFee($declaredValueFee)
    {
      $this->declaredValueFee = $declaredValueFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeconsolidationCarrier()
    {
      return $this->deconsolidationCarrier;
    }

    /**
     * @param string $deconsolidationCarrier
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeconsolidationCarrier($deconsolidationCarrier)
    {
      $this->deconsolidationCarrier = $deconsolidationCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAreaCode()
    {
      return $this->deliveryAreaCode;
    }

    /**
     * @param string $deliveryAreaCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryAreaCode($deliveryAreaCode)
    {
      $this->deliveryAreaCode = $deliveryAreaCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryExceptionNotification()
    {
      return $this->deliveryExceptionNotification;
    }

    /**
     * @param boolean $deliveryExceptionNotification
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryExceptionNotification($deliveryExceptionNotification)
    {
      $this->deliveryExceptionNotification = $deliveryExceptionNotification;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryExceptionNotificationAddressEmail()
    {
      return $this->deliveryExceptionNotificationAddressEmail;
    }

    /**
     * @param string $deliveryExceptionNotificationAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryExceptionNotificationAddressEmail($deliveryExceptionNotificationAddressEmail)
    {
      $this->deliveryExceptionNotificationAddressEmail = $deliveryExceptionNotificationAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryExceptionNotificationDescription()
    {
      return $this->deliveryExceptionNotificationDescription;
    }

    /**
     * @param string $deliveryExceptionNotificationDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryExceptionNotificationDescription($deliveryExceptionNotificationDescription)
    {
      $this->deliveryExceptionNotificationDescription = $deliveryExceptionNotificationDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryExceptionNotificationEmail()
    {
      return $this->deliveryExceptionNotificationEmail;
    }

    /**
     * @param boolean $deliveryExceptionNotificationEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryExceptionNotificationEmail($deliveryExceptionNotificationEmail)
    {
      $this->deliveryExceptionNotificationEmail = $deliveryExceptionNotificationEmail;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDeliveryExceptionNotificationFee()
    {
      return $this->deliveryExceptionNotificationFee;
    }

    /**
     * @param Money $deliveryExceptionNotificationFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryExceptionNotificationFee($deliveryExceptionNotificationFee)
    {
      $this->deliveryExceptionNotificationFee = $deliveryExceptionNotificationFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryExceptionNotificationSenderName()
    {
      return $this->deliveryExceptionNotificationSenderName;
    }

    /**
     * @param string $deliveryExceptionNotificationSenderName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryExceptionNotificationSenderName($deliveryExceptionNotificationSenderName)
    {
      $this->deliveryExceptionNotificationSenderName = $deliveryExceptionNotificationSenderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryExceptionNotificationSubjectText()
    {
      return $this->deliveryExceptionNotificationSubjectText;
    }

    /**
     * @param string $deliveryExceptionNotificationSubjectText
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryExceptionNotificationSubjectText($deliveryExceptionNotificationSubjectText)
    {
      $this->deliveryExceptionNotificationSubjectText = $deliveryExceptionNotificationSubjectText;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getDeliveryMethod()
    {
      return $this->deliveryMethod;
    }

    /**
     * @param enumItem $deliveryMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryMethod($deliveryMethod)
    {
      $this->deliveryMethod = $deliveryMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNotificationAccount()
    {
      return $this->deliveryNotificationAccount;
    }

    /**
     * @param string $deliveryNotificationAccount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationAccount($deliveryNotificationAccount)
    {
      $this->deliveryNotificationAccount = $deliveryNotificationAccount;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getDeliveryNotificationAddress()
    {
      return $this->deliveryNotificationAddress;
    }

    /**
     * @param NameAddress $deliveryNotificationAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationAddress($deliveryNotificationAddress)
    {
      $this->deliveryNotificationAddress = $deliveryNotificationAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNotificationAddressEmail()
    {
      return $this->deliveryNotificationAddressEmail;
    }

    /**
     * @param string $deliveryNotificationAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationAddressEmail($deliveryNotificationAddressEmail)
    {
      $this->deliveryNotificationAddressEmail = $deliveryNotificationAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNotificationDescription()
    {
      return $this->deliveryNotificationDescription;
    }

    /**
     * @param string $deliveryNotificationDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationDescription($deliveryNotificationDescription)
    {
      $this->deliveryNotificationDescription = $deliveryNotificationDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryNotificationEmail()
    {
      return $this->deliveryNotificationEmail;
    }

    /**
     * @param boolean $deliveryNotificationEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationEmail($deliveryNotificationEmail)
    {
      $this->deliveryNotificationEmail = $deliveryNotificationEmail;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDeliveryNotificationFee()
    {
      return $this->deliveryNotificationFee;
    }

    /**
     * @param Money $deliveryNotificationFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationFee($deliveryNotificationFee)
    {
      $this->deliveryNotificationFee = $deliveryNotificationFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryNotificationFile()
    {
      return $this->deliveryNotificationFile;
    }

    /**
     * @param boolean $deliveryNotificationFile
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationFile($deliveryNotificationFile)
    {
      $this->deliveryNotificationFile = $deliveryNotificationFile;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryNotificationPhone()
    {
      return $this->deliveryNotificationPhone;
    }

    /**
     * @param boolean $deliveryNotificationPhone
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationPhone($deliveryNotificationPhone)
    {
      $this->deliveryNotificationPhone = $deliveryNotificationPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNotificationSenderName()
    {
      return $this->deliveryNotificationSenderName;
    }

    /**
     * @param string $deliveryNotificationSenderName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationSenderName($deliveryNotificationSenderName)
    {
      $this->deliveryNotificationSenderName = $deliveryNotificationSenderName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryNotificationSms()
    {
      return $this->deliveryNotificationSms;
    }

    /**
     * @param boolean $deliveryNotificationSms
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationSms($deliveryNotificationSms)
    {
      $this->deliveryNotificationSms = $deliveryNotificationSms;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNotificationSubjectText()
    {
      return $this->deliveryNotificationSubjectText;
    }

    /**
     * @param string $deliveryNotificationSubjectText
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationSubjectText($deliveryNotificationSubjectText)
    {
      $this->deliveryNotificationSubjectText = $deliveryNotificationSubjectText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveryNotificationVerbal()
    {
      return $this->deliveryNotificationVerbal;
    }

    /**
     * @param boolean $deliveryNotificationVerbal
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryNotificationVerbal($deliveryNotificationVerbal)
    {
      $this->deliveryNotificationVerbal = $deliveryNotificationVerbal;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDeliveryWindowFee()
    {
      return $this->deliveryWindowFee;
    }

    /**
     * @param Money $deliveryWindowFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliveryWindowFee($deliveryWindowFee)
    {
      $this->deliveryWindowFee = $deliveryWindowFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliverToDoor()
    {
      return $this->deliverToDoor;
    }

    /**
     * @param boolean $deliverToDoor
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDeliverToDoor($deliverToDoor)
    {
      $this->deliverToDoor = $deliverToDoor;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationAirportCode()
    {
      return $this->destinationAirportCode;
    }

    /**
     * @param string $destinationAirportCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDestinationAirportCode($destinationAirportCode)
    {
      $this->destinationAirportCode = $destinationAirportCode;
      return $this;
    }

    /**
     * @return Dimensions
     */
    public function getDimension()
    {
      return $this->dimension;
    }

    /**
     * @param Dimensions $dimension
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDimension($dimension)
    {
      $this->dimension = $dimension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDimensionalWeightRated()
    {
      return $this->dimensionalWeightRated;
    }

    /**
     * @param boolean $dimensionalWeightRated
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDimensionalWeightRated($dimensionalWeightRated)
    {
      $this->dimensionalWeightRated = $dimensionalWeightRated;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectDelivery()
    {
      return $this->directDelivery;
    }

    /**
     * @param boolean $directDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDirectDelivery($directDelivery)
    {
      $this->directDelivery = $directDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDirectDeliveryFee()
    {
      return $this->directDeliveryFee;
    }

    /**
     * @param Money $directDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDirectDeliveryFee($directDeliveryFee)
    {
      $this->directDeliveryFee = $directDeliveryFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param Money $discount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDiscount($discount)
    {
      $this->discount = $discount;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getDispositionMethod()
    {
      return $this->dispositionMethod;
    }

    /**
     * @param enumItem $dispositionMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDispositionMethod($dispositionMethod)
    {
      $this->dispositionMethod = $dispositionMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getDistributionCode()
    {
      return $this->distributionCode;
    }

    /**
     * @param string $distributionCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDistributionCode($distributionCode)
    {
      $this->distributionCode = $distributionCode;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getDocumentationConsignee()
    {
      return $this->documentationConsignee;
    }

    /**
     * @param NameAddress $documentationConsignee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDocumentationConsignee($documentationConsignee)
    {
      $this->documentationConsignee = $documentationConsignee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDocumentationFee()
    {
      return $this->documentationFee;
    }

    /**
     * @param Money $documentationFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDocumentationFee($documentationFee)
    {
      $this->documentationFee = $documentationFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDocumentsOnly()
    {
      return $this->documentsOnly;
    }

    /**
     * @param boolean $documentsOnly
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDocumentsOnly($documentsOnly)
    {
      $this->documentsOnly = $documentsOnly;
      return $this;
    }

    /**
     * @return date
     */
    public function getDropoffAppointmentDate()
    {
      return $this->dropoffAppointmentDate;
    }

    /**
     * @param date $dropoffAppointmentDate
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDropoffAppointmentDate($dropoffAppointmentDate)
    {
      $this->dropoffAppointmentDate = $dropoffAppointmentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropoffAppointmentNumber()
    {
      return $this->dropoffAppointmentNumber;
    }

    /**
     * @param string $dropoffAppointmentNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDropoffAppointmentNumber($dropoffAppointmentNumber)
    {
      $this->dropoffAppointmentNumber = $dropoffAppointmentNumber;
      return $this;
    }

    /**
     * @return time
     */
    public function getDropoffAppointmentTime()
    {
      return $this->dropoffAppointmentTime;
    }

    /**
     * @param time $dropoffAppointmentTime
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDropoffAppointmentTime($dropoffAppointmentTime)
    {
      $this->dropoffAppointmentTime = $dropoffAppointmentTime;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDryIceFee()
    {
      return $this->dryIceFee;
    }

    /**
     * @param Money $dryIceFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDryIceFee($dryIceFee)
    {
      $this->dryIceFee = $dryIceFee;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getDryIcePurpose()
    {
      return $this->dryIcePurpose;
    }

    /**
     * @param enumItem $dryIcePurpose
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDryIcePurpose($dryIcePurpose)
    {
      $this->dryIcePurpose = $dryIcePurpose;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getDryIceRegulationSet()
    {
      return $this->dryIceRegulationSet;
    }

    /**
     * @param enumItem $dryIceRegulationSet
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDryIceRegulationSet($dryIceRegulationSet)
    {
      $this->dryIceRegulationSet = $dryIceRegulationSet;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getDryIceWeight()
    {
      return $this->dryIceWeight;
    }

    /**
     * @param Weight $dryIceWeight
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDryIceWeight($dryIceWeight)
    {
      $this->dryIceWeight = $dryIceWeight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getDutyFee()
    {
      return $this->dutyFee;
    }

    /**
     * @param Money $dutyFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setDutyFee($dutyFee)
    {
      $this->dutyFee = $dutyFee;
      return $this;
    }

    /**
     * @return date
     */
    public function getEarliestDeliveryDate()
    {
      return $this->earliestDeliveryDate;
    }

    /**
     * @param date $earliestDeliveryDate
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEarliestDeliveryDate($earliestDeliveryDate)
    {
      $this->earliestDeliveryDate = $earliestDeliveryDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getEarliestDeliveryTime()
    {
      return $this->earliestDeliveryTime;
    }

    /**
     * @param time $earliestDeliveryTime
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEarliestDeliveryTime($earliestDeliveryTime)
    {
      $this->earliestDeliveryTime = $earliestDeliveryTime;
      return $this;
    }

    /**
     * @return Money
     */
    public function getEarlyDeliveryFee()
    {
      return $this->earlyDeliveryFee;
    }

    /**
     * @param Money $earlyDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEarlyDeliveryFee($earlyDeliveryFee)
    {
      $this->earlyDeliveryFee = $earlyDeliveryFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getEeiNotificationAddressEmail()
    {
      return $this->eeiNotificationAddressEmail;
    }

    /**
     * @param string $eeiNotificationAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEeiNotificationAddressEmail($eeiNotificationAddressEmail)
    {
      $this->eeiNotificationAddressEmail = $eeiNotificationAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getEeiNotificationDescription()
    {
      return $this->eeiNotificationDescription;
    }

    /**
     * @param string $eeiNotificationDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEeiNotificationDescription($eeiNotificationDescription)
    {
      $this->eeiNotificationDescription = $eeiNotificationDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEeiNotificationEmail()
    {
      return $this->eeiNotificationEmail;
    }

    /**
     * @param boolean $eeiNotificationEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEeiNotificationEmail($eeiNotificationEmail)
    {
      $this->eeiNotificationEmail = $eeiNotificationEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getEeiNotificationSenderName()
    {
      return $this->eeiNotificationSenderName;
    }

    /**
     * @param string $eeiNotificationSenderName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEeiNotificationSenderName($eeiNotificationSenderName)
    {
      $this->eeiNotificationSenderName = $eeiNotificationSenderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEeiNotificationSubjectText()
    {
      return $this->eeiNotificationSubjectText;
    }

    /**
     * @param string $eeiNotificationSubjectText
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEeiNotificationSubjectText($eeiNotificationSubjectText)
    {
      $this->eeiNotificationSubjectText = $eeiNotificationSubjectText;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntryNumber()
    {
      return $this->entryNumber;
    }

    /**
     * @param string $entryNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEntryNumber($entryNumber)
    {
      $this->entryNumber = $entryNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEveningDelivery()
    {
      return $this->eveningDelivery;
    }

    /**
     * @param boolean $eveningDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEveningDelivery($eveningDelivery)
    {
      $this->eveningDelivery = $eveningDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getEveningDeliveryFee()
    {
      return $this->eveningDeliveryFee;
    }

    /**
     * @param Money $eveningDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setEveningDeliveryFee($eveningDeliveryFee)
    {
      $this->eveningDeliveryFee = $eveningDeliveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExchange()
    {
      return $this->exchange;
    }

    /**
     * @param boolean $exchange
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExchange($exchange)
    {
      $this->exchange = $exchange;
      return $this;
    }

    /**
     * @return Money
     */
    public function getExchangeFee()
    {
      return $this->exchangeFee;
    }

    /**
     * @param Money $exchangeFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExchangeFee($exchangeFee)
    {
      $this->exchangeFee = $exchangeFee;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getExchangeMethod()
    {
      return $this->exchangeMethod;
    }

    /**
     * @param enumItem $exchangeMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExchangeMethod($exchangeMethod)
    {
      $this->exchangeMethod = $exchangeMethod;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getExporter()
    {
      return $this->exporter;
    }

    /**
     * @param NameAddress $exporter
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExporter($exporter)
    {
      $this->exporter = $exporter;
      return $this;
    }

    /**
     * @return string
     */
    public function getExporterAccount()
    {
      return $this->exporterAccount;
    }

    /**
     * @param string $exporterAccount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExporterAccount($exporterAccount)
    {
      $this->exporterAccount = $exporterAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getExporterTaxId()
    {
      return $this->exporterTaxId;
    }

    /**
     * @param string $exporterTaxId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExporterTaxId($exporterTaxId)
    {
      $this->exporterTaxId = $exporterTaxId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportDeclarationStatement()
    {
      return $this->exportDeclarationStatement;
    }

    /**
     * @param string $exportDeclarationStatement
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExportDeclarationStatement($exportDeclarationStatement)
    {
      $this->exportDeclarationStatement = $exportDeclarationStatement;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExportInformationCode($exportInformationCode)
    {
      $this->exportInformationCode = $exportInformationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportReason()
    {
      return $this->exportReason;
    }

    /**
     * @param string $exportReason
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExportReason($exportReason)
    {
      $this->exportReason = $exportReason;
      return $this;
    }

    /**
     * @return Money
     */
    public function getExtendedAreaFee()
    {
      return $this->extendedAreaFee;
    }

    /**
     * @param Money $extendedAreaFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExtendedAreaFee($extendedAreaFee)
    {
      $this->extendedAreaFee = $extendedAreaFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlats()
    {
      return $this->flats;
    }

    /**
     * @param boolean $flats
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setFlats($flats)
    {
      $this->flats = $flats;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForkliftDelivery()
    {
      return $this->forkliftDelivery;
    }

    /**
     * @param boolean $forkliftDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setForkliftDelivery($forkliftDelivery)
    {
      $this->forkliftDelivery = $forkliftDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getForkliftDeliveryFee()
    {
      return $this->forkliftDeliveryFee;
    }

    /**
     * @param Money $forkliftDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setForkliftDeliveryFee($forkliftDeliveryFee)
    {
      $this->forkliftDeliveryFee = $forkliftDeliveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForkliftPickup()
    {
      return $this->forkliftPickup;
    }

    /**
     * @param boolean $forkliftPickup
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setForkliftPickup($forkliftPickup)
    {
      $this->forkliftPickup = $forkliftPickup;
      return $this;
    }

    /**
     * @return Money
     */
    public function getForkliftPickupFee()
    {
      return $this->forkliftPickupFee;
    }

    /**
     * @param Money $forkliftPickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setForkliftPickupFee($forkliftPickupFee)
    {
      $this->forkliftPickupFee = $forkliftPickupFee;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getForwardingAgent()
    {
      return $this->forwardingAgent;
    }

    /**
     * @param NameAddress $forwardingAgent
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setForwardingAgent($forwardingAgent)
    {
      $this->forwardingAgent = $forwardingAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getForwardingAgentTaxId()
    {
      return $this->forwardingAgentTaxId;
    }

    /**
     * @param string $forwardingAgentTaxId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setForwardingAgentTaxId($forwardingAgentTaxId)
    {
      $this->forwardingAgentTaxId = $forwardingAgentTaxId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFtzIdentifier()
    {
      return $this->ftzIdentifier;
    }

    /**
     * @param string $ftzIdentifier
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setFtzIdentifier($ftzIdentifier)
    {
      $this->ftzIdentifier = $ftzIdentifier;
      return $this;
    }

    /**
     * @return Money
     */
    public function getFuelSurcharge()
    {
      return $this->fuelSurcharge;
    }

    /**
     * @param Money $fuelSurcharge
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setFuelSurcharge($fuelSurcharge)
    {
      $this->fuelSurcharge = $fuelSurcharge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGoodsInFreeCirculation()
    {
      return $this->goodsInFreeCirculation;
    }

    /**
     * @param boolean $goodsInFreeCirculation
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setGoodsInFreeCirculation($goodsInFreeCirculation)
    {
      $this->goodsInFreeCirculation = $goodsInFreeCirculation;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getGoodsOrigin()
    {
      return $this->goodsOrigin;
    }

    /**
     * @param NameAddress $goodsOrigin
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setGoodsOrigin($goodsOrigin)
    {
      $this->goodsOrigin = $goodsOrigin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGroundsaver()
    {
      return $this->groundsaver;
    }

    /**
     * @param boolean $groundsaver
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setGroundsaver($groundsaver)
    {
      $this->groundsaver = $groundsaver;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getHalNotificationAddress()
    {
      return $this->halNotificationAddress;
    }

    /**
     * @param NameAddress $halNotificationAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationAddress($halNotificationAddress)
    {
      $this->halNotificationAddress = $halNotificationAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalNotificationAddressEmail()
    {
      return $this->halNotificationAddressEmail;
    }

    /**
     * @param string $halNotificationAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationAddressEmail($halNotificationAddressEmail)
    {
      $this->halNotificationAddressEmail = $halNotificationAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalNotificationDescription()
    {
      return $this->halNotificationDescription;
    }

    /**
     * @param string $halNotificationDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationDescription($halNotificationDescription)
    {
      $this->halNotificationDescription = $halNotificationDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHalNotificationEmail()
    {
      return $this->halNotificationEmail;
    }

    /**
     * @param boolean $halNotificationEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationEmail($halNotificationEmail)
    {
      $this->halNotificationEmail = $halNotificationEmail;
      return $this;
    }

    /**
     * @return language
     */
    public function getHalNotificationLocale()
    {
      return $this->halNotificationLocale;
    }

    /**
     * @param language $halNotificationLocale
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationLocale($halNotificationLocale)
    {
      $this->halNotificationLocale = $halNotificationLocale;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHalNotificationPhone()
    {
      return $this->halNotificationPhone;
    }

    /**
     * @param boolean $halNotificationPhone
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationPhone($halNotificationPhone)
    {
      $this->halNotificationPhone = $halNotificationPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalNotificationSenderName()
    {
      return $this->halNotificationSenderName;
    }

    /**
     * @param string $halNotificationSenderName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationSenderName($halNotificationSenderName)
    {
      $this->halNotificationSenderName = $halNotificationSenderName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHalNotificationSms()
    {
      return $this->halNotificationSms;
    }

    /**
     * @param boolean $halNotificationSms
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationSms($halNotificationSms)
    {
      $this->halNotificationSms = $halNotificationSms;
      return $this;
    }

    /**
     * @return string
     */
    public function getHalNotificationSubjectText()
    {
      return $this->halNotificationSubjectText;
    }

    /**
     * @param string $halNotificationSubjectText
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHalNotificationSubjectText($halNotificationSubjectText)
    {
      $this->halNotificationSubjectText = $halNotificationSubjectText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHazmat()
    {
      return $this->hazmat;
    }

    /**
     * @param boolean $hazmat
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmat($hazmat)
    {
      $this->hazmat = $hazmat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHazmatAllPackedInOne()
    {
      return $this->hazmatAllPackedInOne;
    }

    /**
     * @param boolean $hazmatAllPackedInOne
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmatAllPackedInOne($hazmatAllPackedInOne)
    {
      $this->hazmatAllPackedInOne = $hazmatAllPackedInOne;
      return $this;
    }

    /**
     * @return HazmatItemList
     */
    public function getHazmatContents()
    {
      return $this->hazmatContents;
    }

    /**
     * @param HazmatItemList $hazmatContents
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmatContents($hazmatContents)
    {
      $this->hazmatContents = $hazmatContents;
      return $this;
    }

    /**
     * @return Money
     */
    public function getHazmatFee()
    {
      return $this->hazmatFee;
    }

    /**
     * @param Money $hazmatFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmatFee($hazmatFee)
    {
      $this->hazmatFee = $hazmatFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatHandlingInformation()
    {
      return $this->hazmatHandlingInformation;
    }

    /**
     * @param string $hazmatHandlingInformation
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmatHandlingInformation($hazmatHandlingInformation)
    {
      $this->hazmatHandlingInformation = $hazmatHandlingInformation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHazmatOverpack()
    {
      return $this->hazmatOverpack;
    }

    /**
     * @param boolean $hazmatOverpack
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmatOverpack($hazmatOverpack)
    {
      $this->hazmatOverpack = $hazmatOverpack;
      return $this;
    }

    /**
     * @return float
     */
    public function getHazmatQValue()
    {
      return $this->hazmatQValue;
    }

    /**
     * @param float $hazmatQValue
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmatQValue($hazmatQValue)
    {
      $this->hazmatQValue = $hazmatQValue;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getHazmatSignatoryAddress()
    {
      return $this->hazmatSignatoryAddress;
    }

    /**
     * @param NameAddress $hazmatSignatoryAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmatSignatoryAddress($hazmatSignatoryAddress)
    {
      $this->hazmatSignatoryAddress = $hazmatSignatoryAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatSignatoryTitle()
    {
      return $this->hazmatSignatoryTitle;
    }

    /**
     * @param string $hazmatSignatoryTitle
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHazmatSignatoryTitle($hazmatSignatoryTitle)
    {
      $this->hazmatSignatoryTitle = $hazmatSignatoryTitle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHealthInsurance()
    {
      return $this->healthInsurance;
    }

    /**
     * @param boolean $healthInsurance
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHealthInsurance($healthInsurance)
    {
      $this->healthInsurance = $healthInsurance;
      return $this;
    }

    /**
     * @return Money
     */
    public function getHealthInsuranceFee()
    {
      return $this->healthInsuranceFee;
    }

    /**
     * @param Money $healthInsuranceFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHealthInsuranceFee($healthInsuranceFee)
    {
      $this->healthInsuranceFee = $healthInsuranceFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHelperDelivery()
    {
      return $this->helperDelivery;
    }

    /**
     * @param boolean $helperDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHelperDelivery($helperDelivery)
    {
      $this->helperDelivery = $helperDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getHelperDeliveryFee()
    {
      return $this->helperDeliveryFee;
    }

    /**
     * @param Money $helperDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHelperDeliveryFee($helperDeliveryFee)
    {
      $this->helperDeliveryFee = $helperDeliveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHelperPickup()
    {
      return $this->helperPickup;
    }

    /**
     * @param boolean $helperPickup
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHelperPickup($helperPickup)
    {
      $this->helperPickup = $helperPickup;
      return $this;
    }

    /**
     * @return Money
     */
    public function getHelperPickupFee()
    {
      return $this->helperPickupFee;
    }

    /**
     * @param Money $helperPickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHelperPickupFee($helperPickupFee)
    {
      $this->helperPickupFee = $helperPickupFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHoldAtLocation()
    {
      return $this->holdAtLocation;
    }

    /**
     * @param boolean $holdAtLocation
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHoldAtLocation($holdAtLocation)
    {
      $this->holdAtLocation = $holdAtLocation;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getHoldAtLocationAddress()
    {
      return $this->holdAtLocationAddress;
    }

    /**
     * @param NameAddress $holdAtLocationAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHoldAtLocationAddress($holdAtLocationAddress)
    {
      $this->holdAtLocationAddress = $holdAtLocationAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getHoldAtLocationFacilityId()
    {
      return $this->holdAtLocationFacilityId;
    }

    /**
     * @param string $holdAtLocationFacilityId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHoldAtLocationFacilityId($holdAtLocationFacilityId)
    {
      $this->holdAtLocationFacilityId = $holdAtLocationFacilityId;
      return $this;
    }

    /**
     * @return Money
     */
    public function getHoldAtLocationFee()
    {
      return $this->holdAtLocationFee;
    }

    /**
     * @param Money $holdAtLocationFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHoldAtLocationFee($holdAtLocationFee)
    {
      $this->holdAtLocationFee = $holdAtLocationFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getHoldAtLocationReleaseCode()
    {
      return $this->holdAtLocationReleaseCode;
    }

    /**
     * @param string $holdAtLocationReleaseCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHoldAtLocationReleaseCode($holdAtLocationReleaseCode)
    {
      $this->holdAtLocationReleaseCode = $holdAtLocationReleaseCode;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getHoldAtLocationType()
    {
      return $this->holdAtLocationType;
    }

    /**
     * @param enumItem $holdAtLocationType
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHoldAtLocationType($holdAtLocationType)
    {
      $this->holdAtLocationType = $holdAtLocationType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHolidayDelivery()
    {
      return $this->holidayDelivery;
    }

    /**
     * @param boolean $holidayDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHolidayDelivery($holidayDelivery)
    {
      $this->holidayDelivery = $holidayDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getHolidayDeliveryFee()
    {
      return $this->holidayDeliveryFee;
    }

    /**
     * @param Money $holidayDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHolidayDeliveryFee($holidayDeliveryFee)
    {
      $this->holidayDeliveryFee = $holidayDeliveryFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getHolidayPickupFee()
    {
      return $this->holidayPickupFee;
    }

    /**
     * @param Money $holidayPickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHolidayPickupFee($holidayPickupFee)
    {
      $this->holidayPickupFee = $holidayPickupFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getHubCode()
    {
      return $this->hubCode;
    }

    /**
     * @param string $hubCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHubCode($hubCode)
    {
      $this->hubCode = $hubCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHundredweightRated()
    {
      return $this->hundredweightRated;
    }

    /**
     * @param boolean $hundredweightRated
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setHundredweightRated($hundredweightRated)
    {
      $this->hundredweightRated = $hundredweightRated;
      return $this;
    }

    /**
     * @return Money
     */
    public function getImpbNonComplianceFee()
    {
      return $this->impbNonComplianceFee;
    }

    /**
     * @param Money $impbNonComplianceFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setImpbNonComplianceFee($impbNonComplianceFee)
    {
      $this->impbNonComplianceFee = $impbNonComplianceFee;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getImporterOfRecord()
    {
      return $this->importerOfRecord;
    }

    /**
     * @param NameAddress $importerOfRecord
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setImporterOfRecord($importerOfRecord)
    {
      $this->importerOfRecord = $importerOfRecord;
      return $this;
    }

    /**
     * @return string
     */
    public function getImporterOfRecordAccount()
    {
      return $this->importerOfRecordAccount;
    }

    /**
     * @param string $importerOfRecordAccount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setImporterOfRecordAccount($importerOfRecordAccount)
    {
      $this->importerOfRecordAccount = $importerOfRecordAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getImporterOfRecordTaxId()
    {
      return $this->importerOfRecordTaxId;
    }

    /**
     * @param string $importerOfRecordTaxId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setImporterOfRecordTaxId($importerOfRecordTaxId)
    {
      $this->importerOfRecordTaxId = $importerOfRecordTaxId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getImportDelivery()
    {
      return $this->importDelivery;
    }

    /**
     * @param boolean $importDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setImportDelivery($importDelivery)
    {
      $this->importDelivery = $importDelivery;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getInbondCode()
    {
      return $this->inbondCode;
    }

    /**
     * @param enumItem $inbondCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInbondCode($inbondCode)
    {
      $this->inbondCode = $inbondCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInsideDelivery()
    {
      return $this->insideDelivery;
    }

    /**
     * @param boolean $insideDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInsideDelivery($insideDelivery)
    {
      $this->insideDelivery = $insideDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getInsideDeliveryFee()
    {
      return $this->insideDeliveryFee;
    }

    /**
     * @param Money $insideDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInsideDeliveryFee($insideDeliveryFee)
    {
      $this->insideDeliveryFee = $insideDeliveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInsidePickup()
    {
      return $this->insidePickup;
    }

    /**
     * @param boolean $insidePickup
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInsidePickup($insidePickup)
    {
      $this->insidePickup = $insidePickup;
      return $this;
    }

    /**
     * @return Money
     */
    public function getInsidePickupFee()
    {
      return $this->insidePickupFee;
    }

    /**
     * @param Money $insidePickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInsidePickupFee($insidePickupFee)
    {
      $this->insidePickupFee = $insidePickupFee;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getInsuranceMethod()
    {
      return $this->insuranceMethod;
    }

    /**
     * @param enumItem $insuranceMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInsuranceMethod($insuranceMethod)
    {
      $this->insuranceMethod = $insuranceMethod;
      return $this;
    }

    /**
     * @return Money
     */
    public function getInvoiceDiscount()
    {
      return $this->invoiceDiscount;
    }

    /**
     * @param Money $invoiceDiscount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInvoiceDiscount($invoiceDiscount)
    {
      $this->invoiceDiscount = $invoiceDiscount;
      return $this;
    }

    /**
     * @return Money
     */
    public function getInvoiceFreight()
    {
      return $this->invoiceFreight;
    }

    /**
     * @param Money $invoiceFreight
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInvoiceFreight($invoiceFreight)
    {
      $this->invoiceFreight = $invoiceFreight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getInvoiceInsuranceFee()
    {
      return $this->invoiceInsuranceFee;
    }

    /**
     * @param Money $invoiceInsuranceFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInvoiceInsuranceFee($invoiceInsuranceFee)
    {
      $this->invoiceInsuranceFee = $invoiceInsuranceFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getInvoiceOtherFee()
    {
      return $this->invoiceOtherFee;
    }

    /**
     * @param Money $invoiceOtherFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInvoiceOtherFee($invoiceOtherFee)
    {
      $this->invoiceOtherFee = $invoiceOtherFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInTransitNotification()
    {
      return $this->inTransitNotification;
    }

    /**
     * @param boolean $inTransitNotification
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInTransitNotification($inTransitNotification)
    {
      $this->inTransitNotification = $inTransitNotification;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTransitNotificationAddressEmail()
    {
      return $this->inTransitNotificationAddressEmail;
    }

    /**
     * @param string $inTransitNotificationAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInTransitNotificationAddressEmail($inTransitNotificationAddressEmail)
    {
      $this->inTransitNotificationAddressEmail = $inTransitNotificationAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTransitNotificationDescription()
    {
      return $this->inTransitNotificationDescription;
    }

    /**
     * @param string $inTransitNotificationDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInTransitNotificationDescription($inTransitNotificationDescription)
    {
      $this->inTransitNotificationDescription = $inTransitNotificationDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInTransitNotificationEmail()
    {
      return $this->inTransitNotificationEmail;
    }

    /**
     * @param boolean $inTransitNotificationEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInTransitNotificationEmail($inTransitNotificationEmail)
    {
      $this->inTransitNotificationEmail = $inTransitNotificationEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTransitNotificationSenderName()
    {
      return $this->inTransitNotificationSenderName;
    }

    /**
     * @param string $inTransitNotificationSenderName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInTransitNotificationSenderName($inTransitNotificationSenderName)
    {
      $this->inTransitNotificationSenderName = $inTransitNotificationSenderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTransitNotificationSubjectText()
    {
      return $this->inTransitNotificationSubjectText;
    }

    /**
     * @param string $inTransitNotificationSubjectText
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setInTransitNotificationSubjectText($inTransitNotificationSubjectText)
    {
      $this->inTransitNotificationSubjectText = $inTransitNotificationSubjectText;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsoUniqueIdentifier()
    {
      return $this->isoUniqueIdentifier;
    }

    /**
     * @param string $isoUniqueIdentifier
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setIsoUniqueIdentifier($isoUniqueIdentifier)
    {
      $this->isoUniqueIdentifier = $isoUniqueIdentifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemNumber()
    {
      return $this->itemNumber;
    }

    /**
     * @param string $itemNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setItemNumber($itemNumber)
    {
      $this->itemNumber = $itemNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLargePackage()
    {
      return $this->largePackage;
    }

    /**
     * @param boolean $largePackage
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLargePackage($largePackage)
    {
      $this->largePackage = $largePackage;
      return $this;
    }

    /**
     * @return Money
     */
    public function getLargePackageFee()
    {
      return $this->largePackageFee;
    }

    /**
     * @param Money $largePackageFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLargePackageFee($largePackageFee)
    {
      $this->largePackageFee = $largePackageFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLargePallet()
    {
      return $this->largePallet;
    }

    /**
     * @param boolean $largePallet
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLargePallet($largePallet)
    {
      $this->largePallet = $largePallet;
      return $this;
    }

    /**
     * @return Money
     */
    public function getLargePalletFee()
    {
      return $this->largePalletFee;
    }

    /**
     * @param Money $largePalletFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLargePalletFee($largePalletFee)
    {
      $this->largePalletFee = $largePalletFee;
      return $this;
    }

    /**
     * @return date
     */
    public function getLatestDeliveryDate()
    {
      return $this->latestDeliveryDate;
    }

    /**
     * @param date $latestDeliveryDate
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLatestDeliveryDate($latestDeliveryDate)
    {
      $this->latestDeliveryDate = $latestDeliveryDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getLatestDeliveryTime()
    {
      return $this->latestDeliveryTime;
    }

    /**
     * @param time $latestDeliveryTime
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLatestDeliveryTime($latestDeliveryTime)
    {
      $this->latestDeliveryTime = $latestDeliveryTime;
      return $this;
    }

    /**
     * @return Money
     */
    public function getLicenseVerificationFee()
    {
      return $this->licenseVerificationFee;
    }

    /**
     * @param Money $licenseVerificationFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLicenseVerificationFee($licenseVerificationFee)
    {
      $this->licenseVerificationFee = $licenseVerificationFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLiftgateDelivery()
    {
      return $this->liftgateDelivery;
    }

    /**
     * @param boolean $liftgateDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLiftgateDelivery($liftgateDelivery)
    {
      $this->liftgateDelivery = $liftgateDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getLiftgateDeliveryFee()
    {
      return $this->liftgateDeliveryFee;
    }

    /**
     * @param Money $liftgateDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLiftgateDeliveryFee($liftgateDeliveryFee)
    {
      $this->liftgateDeliveryFee = $liftgateDeliveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLiftgatePickup()
    {
      return $this->liftgatePickup;
    }

    /**
     * @param boolean $liftgatePickup
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLiftgatePickup($liftgatePickup)
    {
      $this->liftgatePickup = $liftgatePickup;
      return $this;
    }

    /**
     * @return Money
     */
    public function getLiftgatePickupFee()
    {
      return $this->liftgatePickupFee;
    }

    /**
     * @param Money $liftgatePickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLiftgatePickupFee($liftgatePickupFee)
    {
      $this->liftgatePickupFee = $liftgatePickupFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLithiumBatteriesContainedInEquipment()
    {
      return $this->lithiumBatteriesContainedInEquipment;
    }

    /**
     * @param boolean $lithiumBatteriesContainedInEquipment
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLithiumBatteriesContainedInEquipment($lithiumBatteriesContainedInEquipment)
    {
      $this->lithiumBatteriesContainedInEquipment = $lithiumBatteriesContainedInEquipment;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationId()
    {
      return $this->locationId;
    }

    /**
     * @param string $locationId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setLocationId($locationId)
    {
      $this->locationId = $locationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarkings()
    {
      return $this->markings;
    }

    /**
     * @param string $markings
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMarkings($markings)
    {
      $this->markings = $markings;
      return $this;
    }

    /**
     * @return StringList
     */
    public function getMaxicode()
    {
      return $this->maxicode;
    }

    /**
     * @param StringList $maxicode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMaxicode($maxicode)
    {
      $this->maxicode = $maxicode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiscReference1()
    {
      return $this->miscReference1;
    }

    /**
     * @param string $miscReference1
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMiscReference1($miscReference1)
    {
      $this->miscReference1 = $miscReference1;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiscReference2()
    {
      return $this->miscReference2;
    }

    /**
     * @param string $miscReference2
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMiscReference2($miscReference2)
    {
      $this->miscReference2 = $miscReference2;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiscReference3()
    {
      return $this->miscReference3;
    }

    /**
     * @param string $miscReference3
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMiscReference3($miscReference3)
    {
      $this->miscReference3 = $miscReference3;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiscReference4()
    {
      return $this->miscReference4;
    }

    /**
     * @param string $miscReference4
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMiscReference4($miscReference4)
    {
      $this->miscReference4 = $miscReference4;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiscReference5()
    {
      return $this->miscReference5;
    }

    /**
     * @param string $miscReference5
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMiscReference5($miscReference5)
    {
      $this->miscReference5 = $miscReference5;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMms()
    {
      return $this->mms;
    }

    /**
     * @param boolean $mms
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMms($mms)
    {
      $this->mms = $mms;
      return $this;
    }

    /**
     * @return string
     */
    public function getMmsPieceId()
    {
      return $this->mmsPieceId;
    }

    /**
     * @param string $mmsPieceId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMmsPieceId($mmsPieceId)
    {
      $this->mmsPieceId = $mmsPieceId;
      return $this;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMsn($msn)
    {
      $this->msn = $msn;
      return $this;
    }

    /**
     * @return Money
     */
    public function getMultiPieceFee()
    {
      return $this->multiPieceFee;
    }

    /**
     * @param Money $multiPieceFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setMultiPieceFee($multiPieceFee)
    {
      $this->multiPieceFee = $multiPieceFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNeutralDeliveryService()
    {
      return $this->neutralDeliveryService;
    }

    /**
     * @param boolean $neutralDeliveryService
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNeutralDeliveryService($neutralDeliveryService)
    {
      $this->neutralDeliveryService = $neutralDeliveryService;
      return $this;
    }

    /**
     * @return Money
     */
    public function getNeutralDeliveryServiceFee()
    {
      return $this->neutralDeliveryServiceFee;
    }

    /**
     * @param Money $neutralDeliveryServiceFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNeutralDeliveryServiceFee($neutralDeliveryServiceFee)
    {
      $this->neutralDeliveryServiceFee = $neutralDeliveryServiceFee;
      return $this;
    }

    /**
     * @return int
     */
    public function getNofnSequence()
    {
      return $this->nofnSequence;
    }

    /**
     * @param int $nofnSequence
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNofnSequence($nofnSequence)
    {
      $this->nofnSequence = $nofnSequence;
      return $this;
    }

    /**
     * @return int
     */
    public function getNofnSequenceBundle()
    {
      return $this->nofnSequenceBundle;
    }

    /**
     * @param int $nofnSequenceBundle
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNofnSequenceBundle($nofnSequenceBundle)
    {
      $this->nofnSequenceBundle = $nofnSequenceBundle;
      return $this;
    }

    /**
     * @return int
     */
    public function getNofnTotal()
    {
      return $this->nofnTotal;
    }

    /**
     * @param int $nofnTotal
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNofnTotal($nofnTotal)
    {
      $this->nofnTotal = $nofnTotal;
      return $this;
    }

    /**
     * @return int
     */
    public function getNofnTotalBundle()
    {
      return $this->nofnTotalBundle;
    }

    /**
     * @param int $nofnTotalBundle
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNofnTotalBundle($nofnTotalBundle)
    {
      $this->nofnTotalBundle = $nofnTotalBundle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonhazardousLithiumBatteries()
    {
      return $this->nonhazardousLithiumBatteries;
    }

    /**
     * @param boolean $nonhazardousLithiumBatteries
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNonhazardousLithiumBatteries($nonhazardousLithiumBatteries)
    {
      $this->nonhazardousLithiumBatteries = $nonhazardousLithiumBatteries;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonmachinableMail()
    {
      return $this->nonmachinableMail;
    }

    /**
     * @param boolean $nonmachinableMail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNonmachinableMail($nonmachinableMail)
    {
      $this->nonmachinableMail = $nonmachinableMail;
      return $this;
    }

    /**
     * @return Money
     */
    public function getNonmachinableMailFee()
    {
      return $this->nonmachinableMailFee;
    }

    /**
     * @param Money $nonmachinableMailFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNonmachinableMailFee($nonmachinableMailFee)
    {
      $this->nonmachinableMailFee = $nonmachinableMailFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonrectangular()
    {
      return $this->nonrectangular;
    }

    /**
     * @param boolean $nonrectangular
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNonrectangular($nonrectangular)
    {
      $this->nonrectangular = $nonrectangular;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonstandardMail()
    {
      return $this->nonstandardMail;
    }

    /**
     * @param boolean $nonstandardMail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNonstandardMail($nonstandardMail)
    {
      $this->nonstandardMail = $nonstandardMail;
      return $this;
    }

    /**
     * @return Money
     */
    public function getNonstandardMailFee()
    {
      return $this->nonstandardMailFee;
    }

    /**
     * @param Money $nonstandardMailFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNonstandardMailFee($nonstandardMailFee)
    {
      $this->nonstandardMailFee = $nonstandardMailFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotificationFailureAddressEmail()
    {
      return $this->notificationFailureAddressEmail;
    }

    /**
     * @param string $notificationFailureAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNotificationFailureAddressEmail($notificationFailureAddressEmail)
    {
      $this->notificationFailureAddressEmail = $notificationFailureAddressEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotFlatMachinable()
    {
      return $this->notFlatMachinable;
    }

    /**
     * @param boolean $notFlatMachinable
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setNotFlatMachinable($notFlatMachinable)
    {
      $this->notFlatMachinable = $notFlatMachinable;
      return $this;
    }

    /**
     * @return Money
     */
    public function getOffshoreFee()
    {
      return $this->offshoreFee;
    }

    /**
     * @param Money $offshoreFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOffshoreFee($offshoreFee)
    {
      $this->offshoreFee = $offshoreFee;
      return $this;
    }

    /**
     * @return date
     */
    public function getOriginatorShipdate()
    {
      return $this->originatorShipdate;
    }

    /**
     * @param date $originatorShipdate
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOriginatorShipdate($originatorShipdate)
    {
      $this->originatorShipdate = $originatorShipdate;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginatorTrackingNumber()
    {
      return $this->originatorTrackingNumber;
    }

    /**
     * @param string $originatorTrackingNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOriginatorTrackingNumber($originatorTrackingNumber)
    {
      $this->originatorTrackingNumber = $originatorTrackingNumber;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getOriginAddress()
    {
      return $this->originAddress;
    }

    /**
     * @param NameAddress $originAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOriginAddress($originAddress)
    {
      $this->originAddress = $originAddress;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOriginDescription($originDescription)
    {
      $this->originDescription = $originDescription;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getOtherCharges()
    {
      return $this->otherCharges;
    }

    /**
     * @param anyType $otherCharges
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOtherCharges($otherCharges)
    {
      $this->otherCharges = $otherCharges;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOversize()
    {
      return $this->oversize;
    }

    /**
     * @param boolean $oversize
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOversize($oversize)
    {
      $this->oversize = $oversize;
      return $this;
    }

    /**
     * @return Money
     */
    public function getOversizeFee()
    {
      return $this->oversizeFee;
    }

    /**
     * @param Money $oversizeFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOversizeFee($oversizeFee)
    {
      $this->oversizeFee = $oversizeFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getOverDimensionFee()
    {
      return $this->overDimensionFee;
    }

    /**
     * @param Money $overDimensionFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setOverDimensionFee($overDimensionFee)
    {
      $this->overDimensionFee = $overDimensionFee;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageListId()
    {
      return $this->packageListId;
    }

    /**
     * @param int $packageListId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPackageListId($packageListId)
    {
      $this->packageListId = $packageListId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackaging()
    {
      return $this->packaging;
    }

    /**
     * @param string $packaging
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPackaging($packaging)
    {
      $this->packaging = $packaging;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackagingDescription()
    {
      return $this->packagingDescription;
    }

    /**
     * @param string $packagingDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPackagingDescription($packagingDescription)
    {
      $this->packagingDescription = $packagingDescription;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getPackagingTareWeight()
    {
      return $this->packagingTareWeight;
    }

    /**
     * @param Weight $packagingTareWeight
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPackagingTareWeight($packagingTareWeight)
    {
      $this->packagingTareWeight = $packagingTareWeight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getPalletFee()
    {
      return $this->palletFee;
    }

    /**
     * @param Money $palletFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPalletFee($palletFee)
    {
      $this->palletFee = $palletFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPalletJackDelivery()
    {
      return $this->palletJackDelivery;
    }

    /**
     * @param boolean $palletJackDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPalletJackDelivery($palletJackDelivery)
    {
      $this->palletJackDelivery = $palletJackDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getPalletJackDeliveryFee()
    {
      return $this->palletJackDeliveryFee;
    }

    /**
     * @param Money $palletJackDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPalletJackDeliveryFee($palletJackDeliveryFee)
    {
      $this->palletJackDeliveryFee = $palletJackDeliveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPalletJackPickup()
    {
      return $this->palletJackPickup;
    }

    /**
     * @param boolean $palletJackPickup
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPalletJackPickup($palletJackPickup)
    {
      $this->palletJackPickup = $palletJackPickup;
      return $this;
    }

    /**
     * @return Money
     */
    public function getPalletJackPickupFee()
    {
      return $this->palletJackPickupFee;
    }

    /**
     * @param Money $palletJackPickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPalletJackPickupFee($palletJackPickupFee)
    {
      $this->palletJackPickupFee = $palletJackPickupFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getParcelAirlift()
    {
      return $this->parcelAirlift;
    }

    /**
     * @param boolean $parcelAirlift
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setParcelAirlift($parcelAirlift)
    {
      $this->parcelAirlift = $parcelAirlift;
      return $this;
    }

    /**
     * @return Money
     */
    public function getParcelAirliftFee()
    {
      return $this->parcelAirliftFee;
    }

    /**
     * @param Money $parcelAirliftFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setParcelAirliftFee($parcelAirliftFee)
    {
      $this->parcelAirliftFee = $parcelAirliftFee;
      return $this;
    }

    /**
     * @return DataDictionary
     */
    public function getParentContainer()
    {
      return $this->parentContainer;
    }

    /**
     * @param DataDictionary $parentContainer
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setParentContainer($parentContainer)
    {
      $this->parentContainer = $parentContainer;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentContainerCode()
    {
      return $this->parentContainerCode;
    }

    /**
     * @param string $parentContainerCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setParentContainerCode($parentContainerCode)
    {
      $this->parentContainerCode = $parentContainerCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPartiesRelated()
    {
      return $this->partiesRelated;
    }

    /**
     * @param boolean $partiesRelated
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPartiesRelated($partiesRelated)
    {
      $this->partiesRelated = $partiesRelated;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPerishable()
    {
      return $this->perishable;
    }

    /**
     * @param boolean $perishable
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPerishable($perishable)
    {
      $this->perishable = $perishable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPharmacyDelivery()
    {
      return $this->pharmacyDelivery;
    }

    /**
     * @param boolean $pharmacyDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPharmacyDelivery($pharmacyDelivery)
    {
      $this->pharmacyDelivery = $pharmacyDelivery;
      return $this;
    }

    /**
     * @return time
     */
    public function getPickupTime()
    {
      return $this->pickupTime;
    }

    /**
     * @param time $pickupTime
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPickupTime($pickupTime)
    {
      $this->pickupTime = $pickupTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getPieceCount()
    {
      return $this->pieceCount;
    }

    /**
     * @param int $pieceCount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPieceCount($pieceCount)
    {
      $this->pieceCount = $pieceCount;
      return $this;
    }

    /**
     * @return Money
     */
    public function getPieceCountFee()
    {
      return $this->pieceCountFee;
    }

    /**
     * @param Money $pieceCountFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPieceCountFee($pieceCountFee)
    {
      $this->pieceCountFee = $pieceCountFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPoaIncluded()
    {
      return $this->poaIncluded;
    }

    /**
     * @param boolean $poaIncluded
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPoaIncluded($poaIncluded)
    {
      $this->poaIncluded = $poaIncluded;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortOfEntry()
    {
      return $this->portOfEntry;
    }

    /**
     * @param string $portOfEntry
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPortOfEntry($portOfEntry)
    {
      $this->portOfEntry = $portOfEntry;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getPreAlertNotificationAddress()
    {
      return $this->preAlertNotificationAddress;
    }

    /**
     * @param NameAddress $preAlertNotificationAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationAddress($preAlertNotificationAddress)
    {
      $this->preAlertNotificationAddress = $preAlertNotificationAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreAlertNotificationAddressEmail()
    {
      return $this->preAlertNotificationAddressEmail;
    }

    /**
     * @param string $preAlertNotificationAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationAddressEmail($preAlertNotificationAddressEmail)
    {
      $this->preAlertNotificationAddressEmail = $preAlertNotificationAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreAlertNotificationDescription()
    {
      return $this->preAlertNotificationDescription;
    }

    /**
     * @param string $preAlertNotificationDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationDescription($preAlertNotificationDescription)
    {
      $this->preAlertNotificationDescription = $preAlertNotificationDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreAlertNotificationEmail()
    {
      return $this->preAlertNotificationEmail;
    }

    /**
     * @param boolean $preAlertNotificationEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationEmail($preAlertNotificationEmail)
    {
      $this->preAlertNotificationEmail = $preAlertNotificationEmail;
      return $this;
    }

    /**
     * @return language
     */
    public function getPreAlertNotificationLocale()
    {
      return $this->preAlertNotificationLocale;
    }

    /**
     * @param language $preAlertNotificationLocale
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationLocale($preAlertNotificationLocale)
    {
      $this->preAlertNotificationLocale = $preAlertNotificationLocale;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreAlertNotificationPhone()
    {
      return $this->preAlertNotificationPhone;
    }

    /**
     * @param boolean $preAlertNotificationPhone
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationPhone($preAlertNotificationPhone)
    {
      $this->preAlertNotificationPhone = $preAlertNotificationPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreAlertNotificationSenderName()
    {
      return $this->preAlertNotificationSenderName;
    }

    /**
     * @param string $preAlertNotificationSenderName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationSenderName($preAlertNotificationSenderName)
    {
      $this->preAlertNotificationSenderName = $preAlertNotificationSenderName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreAlertNotificationSms()
    {
      return $this->preAlertNotificationSms;
    }

    /**
     * @param boolean $preAlertNotificationSms
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationSms($preAlertNotificationSms)
    {
      $this->preAlertNotificationSms = $preAlertNotificationSms;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreAlertNotificationSubjectText()
    {
      return $this->preAlertNotificationSubjectText;
    }

    /**
     * @param string $preAlertNotificationSubjectText
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPreAlertNotificationSubjectText($preAlertNotificationSubjectText)
    {
      $this->preAlertNotificationSubjectText = $preAlertNotificationSubjectText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPriorDeliveryNotificationConsignee()
    {
      return $this->priorDeliveryNotificationConsignee;
    }

    /**
     * @param boolean $priorDeliveryNotificationConsignee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPriorDeliveryNotificationConsignee($priorDeliveryNotificationConsignee)
    {
      $this->priorDeliveryNotificationConsignee = $priorDeliveryNotificationConsignee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getPriorDeliveryNotificationFee()
    {
      return $this->priorDeliveryNotificationFee;
    }

    /**
     * @param Money $priorDeliveryNotificationFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setPriorDeliveryNotificationFee($priorDeliveryNotificationFee)
    {
      $this->priorDeliveryNotificationFee = $priorDeliveryNotificationFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProactiveRecovery()
    {
      return $this->proactiveRecovery;
    }

    /**
     * @param boolean $proactiveRecovery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProactiveRecovery($proactiveRecovery)
    {
      $this->proactiveRecovery = $proactiveRecovery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getProactiveRecoveryFee()
    {
      return $this->proactiveRecoveryFee;
    }

    /**
     * @param Money $proactiveRecoveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProactiveRecoveryFee($proactiveRecoveryFee)
    {
      $this->proactiveRecoveryFee = $proactiveRecoveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProof()
    {
      return $this->proof;
    }

    /**
     * @param boolean $proof
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProof($proof)
    {
      $this->proof = $proof;
      return $this;
    }

    /**
     * @return Money
     */
    public function getProofFee()
    {
      return $this->proofFee;
    }

    /**
     * @param Money $proofFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofFee($proofFee)
    {
      $this->proofFee = $proofFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getProofNumber()
    {
      return $this->proofNumber;
    }

    /**
     * @param string $proofNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofNumber($proofNumber)
    {
      $this->proofNumber = $proofNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProofRequireSignature()
    {
      return $this->proofRequireSignature;
    }

    /**
     * @param boolean $proofRequireSignature
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofRequireSignature($proofRequireSignature)
    {
      $this->proofRequireSignature = $proofRequireSignature;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProofRequireSignatureAdult()
    {
      return $this->proofRequireSignatureAdult;
    }

    /**
     * @param boolean $proofRequireSignatureAdult
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofRequireSignatureAdult($proofRequireSignatureAdult)
    {
      $this->proofRequireSignatureAdult = $proofRequireSignatureAdult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProofRequireSignatureConsignee()
    {
      return $this->proofRequireSignatureConsignee;
    }

    /**
     * @param boolean $proofRequireSignatureConsignee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofRequireSignatureConsignee($proofRequireSignatureConsignee)
    {
      $this->proofRequireSignatureConsignee = $proofRequireSignatureConsignee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getProofRequireSignatureFee()
    {
      return $this->proofRequireSignatureFee;
    }

    /**
     * @param Money $proofRequireSignatureFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofRequireSignatureFee($proofRequireSignatureFee)
    {
      $this->proofRequireSignatureFee = $proofRequireSignatureFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProofReturnOfDocuments()
    {
      return $this->proofReturnOfDocuments;
    }

    /**
     * @param boolean $proofReturnOfDocuments
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofReturnOfDocuments($proofReturnOfDocuments)
    {
      $this->proofReturnOfDocuments = $proofReturnOfDocuments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProofSignatureWaiver()
    {
      return $this->proofSignatureWaiver;
    }

    /**
     * @param boolean $proofSignatureWaiver
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofSignatureWaiver($proofSignatureWaiver)
    {
      $this->proofSignatureWaiver = $proofSignatureWaiver;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProofUseAlternateNumber()
    {
      return $this->proofUseAlternateNumber;
    }

    /**
     * @param boolean $proofUseAlternateNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setProofUseAlternateNumber($proofUseAlternateNumber)
    {
      $this->proofUseAlternateNumber = $proofUseAlternateNumber;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getRatedWeight()
    {
      return $this->ratedWeight;
    }

    /**
     * @param Weight $ratedWeight
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRatedWeight($ratedWeight)
    {
      $this->ratedWeight = $ratedWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateCode()
    {
      return $this->rateCode;
    }

    /**
     * @param string $rateCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRateCode($rateCode)
    {
      $this->rateCode = $rateCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRegisteredMail()
    {
      return $this->registeredMail;
    }

    /**
     * @param boolean $registeredMail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRegisteredMail($registeredMail)
    {
      $this->registeredMail = $registeredMail;
      return $this;
    }

    /**
     * @return Money
     */
    public function getRegisteredMailFee()
    {
      return $this->registeredMailFee;
    }

    /**
     * @param Money $registeredMailFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRegisteredMailFee($registeredMailFee)
    {
      $this->registeredMailFee = $registeredMailFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getRemoteOriginFee()
    {
      return $this->remoteOriginFee;
    }

    /**
     * @param Money $remoteOriginFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRemoteOriginFee($remoteOriginFee)
    {
      $this->remoteOriginFee = $remoteOriginFee;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getRemotePassthrough()
    {
      return $this->remotePassthrough;
    }

    /**
     * @param anyType $remotePassthrough
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRemotePassthrough($remotePassthrough)
    {
      $this->remotePassthrough = $remotePassthrough;
      return $this;
    }

    /**
     * @return Money
     */
    public function getResidentialDeliveryFee()
    {
      return $this->residentialDeliveryFee;
    }

    /**
     * @param Money $residentialDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setResidentialDeliveryFee($residentialDeliveryFee)
    {
      $this->residentialDeliveryFee = $residentialDeliveryFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnAccount()
    {
      return $this->returnAccount;
    }

    /**
     * @param string $returnAccount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnAccount($returnAccount)
    {
      $this->returnAccount = $returnAccount;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getReturnAddress()
    {
      return $this->returnAddress;
    }

    /**
     * @param NameAddress $returnAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnAddress($returnAddress)
    {
      $this->returnAddress = $returnAddress;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getReturnAddressMethod()
    {
      return $this->returnAddressMethod;
    }

    /**
     * @param enumItem $returnAddressMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnAddressMethod($returnAddressMethod)
    {
      $this->returnAddressMethod = $returnAddressMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnDelivery()
    {
      return $this->returnDelivery;
    }

    /**
     * @param boolean $returnDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDelivery($returnDelivery)
    {
      $this->returnDelivery = $returnDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnDeliveryAddressEmail()
    {
      return $this->returnDeliveryAddressEmail;
    }

    /**
     * @param string $returnDeliveryAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryAddressEmail($returnDeliveryAddressEmail)
    {
      $this->returnDeliveryAddressEmail = $returnDeliveryAddressEmail;
      return $this;
    }

    /**
     * @return language
     */
    public function getReturnDeliveryAddressEmailLocale()
    {
      return $this->returnDeliveryAddressEmailLocale;
    }

    /**
     * @param language $returnDeliveryAddressEmailLocale
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryAddressEmailLocale($returnDeliveryAddressEmailLocale)
    {
      $this->returnDeliveryAddressEmailLocale = $returnDeliveryAddressEmailLocale;
      return $this;
    }

    /**
     * @return Money
     */
    public function getReturnDeliveryFee()
    {
      return $this->returnDeliveryFee;
    }

    /**
     * @param Money $returnDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryFee($returnDeliveryFee)
    {
      $this->returnDeliveryFee = $returnDeliveryFee;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getReturnDeliveryMethod()
    {
      return $this->returnDeliveryMethod;
    }

    /**
     * @param enumItem $returnDeliveryMethod
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryMethod($returnDeliveryMethod)
    {
      $this->returnDeliveryMethod = $returnDeliveryMethod;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getReturnDeliveryNotificationAddress()
    {
      return $this->returnDeliveryNotificationAddress;
    }

    /**
     * @param NameAddress $returnDeliveryNotificationAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationAddress($returnDeliveryNotificationAddress)
    {
      $this->returnDeliveryNotificationAddress = $returnDeliveryNotificationAddress;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getReturnDeliveryNotificationAddress2()
    {
      return $this->returnDeliveryNotificationAddress2;
    }

    /**
     * @param NameAddress $returnDeliveryNotificationAddress2
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationAddress2($returnDeliveryNotificationAddress2)
    {
      $this->returnDeliveryNotificationAddress2 = $returnDeliveryNotificationAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnDeliveryNotificationAddressEmail()
    {
      return $this->returnDeliveryNotificationAddressEmail;
    }

    /**
     * @param string $returnDeliveryNotificationAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationAddressEmail($returnDeliveryNotificationAddressEmail)
    {
      $this->returnDeliveryNotificationAddressEmail = $returnDeliveryNotificationAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnDeliveryNotificationDescription()
    {
      return $this->returnDeliveryNotificationDescription;
    }

    /**
     * @param string $returnDeliveryNotificationDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationDescription($returnDeliveryNotificationDescription)
    {
      $this->returnDeliveryNotificationDescription = $returnDeliveryNotificationDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnDeliveryNotificationEmail()
    {
      return $this->returnDeliveryNotificationEmail;
    }

    /**
     * @param boolean $returnDeliveryNotificationEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationEmail($returnDeliveryNotificationEmail)
    {
      $this->returnDeliveryNotificationEmail = $returnDeliveryNotificationEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnDeliveryNotificationFax()
    {
      return $this->returnDeliveryNotificationFax;
    }

    /**
     * @param boolean $returnDeliveryNotificationFax
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationFax($returnDeliveryNotificationFax)
    {
      $this->returnDeliveryNotificationFax = $returnDeliveryNotificationFax;
      return $this;
    }

    /**
     * @return Money
     */
    public function getReturnDeliveryNotificationFee()
    {
      return $this->returnDeliveryNotificationFee;
    }

    /**
     * @param Money $returnDeliveryNotificationFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationFee($returnDeliveryNotificationFee)
    {
      $this->returnDeliveryNotificationFee = $returnDeliveryNotificationFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnDeliveryNotificationSenderName()
    {
      return $this->returnDeliveryNotificationSenderName;
    }

    /**
     * @param string $returnDeliveryNotificationSenderName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationSenderName($returnDeliveryNotificationSenderName)
    {
      $this->returnDeliveryNotificationSenderName = $returnDeliveryNotificationSenderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnDeliveryNotificationSubjectText()
    {
      return $this->returnDeliveryNotificationSubjectText;
    }

    /**
     * @param string $returnDeliveryNotificationSubjectText
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnDeliveryNotificationSubjectText($returnDeliveryNotificationSubjectText)
    {
      $this->returnDeliveryNotificationSubjectText = $returnDeliveryNotificationSubjectText;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnTrackingRetentionDays()
    {
      return $this->returnTrackingRetentionDays;
    }

    /**
     * @param int $returnTrackingRetentionDays
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setReturnTrackingRetentionDays($returnTrackingRetentionDays)
    {
      $this->returnTrackingRetentionDays = $returnTrackingRetentionDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRoutedExportTransaction()
    {
      return $this->routedExportTransaction;
    }

    /**
     * @param boolean $routedExportTransaction
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRoutedExportTransaction($routedExportTransaction)
    {
      $this->routedExportTransaction = $routedExportTransaction;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingCode()
    {
      return $this->routingCode;
    }

    /**
     * @param string $routingCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRoutingCode($routingCode)
    {
      $this->routingCode = $routingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingCode2()
    {
      return $this->routingCode2;
    }

    /**
     * @param string $routingCode2
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRoutingCode2($routingCode2)
    {
      $this->routingCode2 = $routingCode2;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingCode3()
    {
      return $this->routingCode3;
    }

    /**
     * @param string $routingCode3
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRoutingCode3($routingCode3)
    {
      $this->routingCode3 = $routingCode3;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingCode4()
    {
      return $this->routingCode4;
    }

    /**
     * @param string $routingCode4
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRoutingCode4($routingCode4)
    {
      $this->routingCode4 = $routingCode4;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingCode5()
    {
      return $this->routingCode5;
    }

    /**
     * @param string $routingCode5
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setRoutingCode5($routingCode5)
    {
      $this->routingCode5 = $routingCode5;
      return $this;
    }

    /**
     * @return string
     */
    public function getSackLevel()
    {
      return $this->sackLevel;
    }

    /**
     * @param string $sackLevel
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSackLevel($sackLevel)
    {
      $this->sackLevel = $sackLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getSackZip()
    {
      return $this->sackZip;
    }

    /**
     * @param string $sackZip
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSackZip($sackZip)
    {
      $this->sackZip = $sackZip;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturdayDelivery()
    {
      return $this->saturdayDelivery;
    }

    /**
     * @param boolean $saturdayDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSaturdayDelivery($saturdayDelivery)
    {
      $this->saturdayDelivery = $saturdayDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getSaturdayDeliveryFee()
    {
      return $this->saturdayDeliveryFee;
    }

    /**
     * @param Money $saturdayDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSaturdayDeliveryFee($saturdayDeliveryFee)
    {
      $this->saturdayDeliveryFee = $saturdayDeliveryFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getSaturdayPickupFee()
    {
      return $this->saturdayPickupFee;
    }

    /**
     * @param Money $saturdayPickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSaturdayPickupFee($saturdayPickupFee)
    {
      $this->saturdayPickupFee = $saturdayPickupFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSecurity()
    {
      return $this->security;
    }

    /**
     * @param boolean $security
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSecurity($security)
    {
      $this->security = $security;
      return $this;
    }

    /**
     * @return Money
     */
    public function getSecurityFee()
    {
      return $this->securityFee;
    }

    /**
     * @param Money $securityFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSecurityFee($securityFee)
    {
      $this->securityFee = $securityFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getSedExemptionNumber()
    {
      return $this->sedExemptionNumber;
    }

    /**
     * @param string $sedExemptionNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSedExemptionNumber($sedExemptionNumber)
    {
      $this->sedExemptionNumber = $sedExemptionNumber;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSedMethod($sedMethod)
    {
      $this->sedMethod = $sedMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return date
     */
    public function getShipdate()
    {
      return $this->shipdate;
    }

    /**
     * @param date $shipdate
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipdate($shipdate)
    {
      $this->shipdate = $shipdate;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param string $shipper
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperReference()
    {
      return $this->shipperReference;
    }

    /**
     * @param string $shipperReference
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipperReference($shipperReference)
    {
      $this->shipperReference = $shipperReference;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getShipNotificationAddress()
    {
      return $this->shipNotificationAddress;
    }

    /**
     * @param NameAddress $shipNotificationAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationAddress($shipNotificationAddress)
    {
      $this->shipNotificationAddress = $shipNotificationAddress;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getShipNotificationAddress2()
    {
      return $this->shipNotificationAddress2;
    }

    /**
     * @param NameAddress $shipNotificationAddress2
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationAddress2($shipNotificationAddress2)
    {
      $this->shipNotificationAddress2 = $shipNotificationAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotificationAddressEmail()
    {
      return $this->shipNotificationAddressEmail;
    }

    /**
     * @param string $shipNotificationAddressEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationAddressEmail($shipNotificationAddressEmail)
    {
      $this->shipNotificationAddressEmail = $shipNotificationAddressEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotificationAddressFax()
    {
      return $this->shipNotificationAddressFax;
    }

    /**
     * @param string $shipNotificationAddressFax
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationAddressFax($shipNotificationAddressFax)
    {
      $this->shipNotificationAddressFax = $shipNotificationAddressFax;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotificationDescription()
    {
      return $this->shipNotificationDescription;
    }

    /**
     * @param string $shipNotificationDescription
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationDescription($shipNotificationDescription)
    {
      $this->shipNotificationDescription = $shipNotificationDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipNotificationEmail()
    {
      return $this->shipNotificationEmail;
    }

    /**
     * @param boolean $shipNotificationEmail
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationEmail($shipNotificationEmail)
    {
      $this->shipNotificationEmail = $shipNotificationEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipNotificationFax()
    {
      return $this->shipNotificationFax;
    }

    /**
     * @param boolean $shipNotificationFax
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationFax($shipNotificationFax)
    {
      $this->shipNotificationFax = $shipNotificationFax;
      return $this;
    }

    /**
     * @return Money
     */
    public function getShipNotificationFee()
    {
      return $this->shipNotificationFee;
    }

    /**
     * @param Money $shipNotificationFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationFee($shipNotificationFee)
    {
      $this->shipNotificationFee = $shipNotificationFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotificationSenderName()
    {
      return $this->shipNotificationSenderName;
    }

    /**
     * @param string $shipNotificationSenderName
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationSenderName($shipNotificationSenderName)
    {
      $this->shipNotificationSenderName = $shipNotificationSenderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipNotificationSubjectText()
    {
      return $this->shipNotificationSubjectText;
    }

    /**
     * @param string $shipNotificationSubjectText
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationSubjectText($shipNotificationSubjectText)
    {
      $this->shipNotificationSubjectText = $shipNotificationSubjectText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipNotificationVerbal()
    {
      return $this->shipNotificationVerbal;
    }

    /**
     * @param boolean $shipNotificationVerbal
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setShipNotificationVerbal($shipNotificationVerbal)
    {
      $this->shipNotificationVerbal = $shipNotificationVerbal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSignatureRelease()
    {
      return $this->signatureRelease;
    }

    /**
     * @param boolean $signatureRelease
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSignatureRelease($signatureRelease)
    {
      $this->signatureRelease = $signatureRelease;
      return $this;
    }

    /**
     * @return Money
     */
    public function getSpecial()
    {
      return $this->special;
    }

    /**
     * @param Money $special
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSpecial($special)
    {
      $this->special = $special;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSpecialDelivery()
    {
      return $this->specialDelivery;
    }

    /**
     * @param boolean $specialDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSpecialDelivery($specialDelivery)
    {
      $this->specialDelivery = $specialDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getSpecialDeliveryFee()
    {
      return $this->specialDeliveryFee;
    }

    /**
     * @param Money $specialDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSpecialDeliveryFee($specialDeliveryFee)
    {
      $this->specialDeliveryFee = $specialDeliveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStairDelivery()
    {
      return $this->stairDelivery;
    }

    /**
     * @param boolean $stairDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setStairDelivery($stairDelivery)
    {
      $this->stairDelivery = $stairDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getStairDeliveryFee()
    {
      return $this->stairDeliveryFee;
    }

    /**
     * @param Money $stairDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setStairDeliveryFee($stairDeliveryFee)
    {
      $this->stairDeliveryFee = $stairDeliveryFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStairPickup()
    {
      return $this->stairPickup;
    }

    /**
     * @param boolean $stairPickup
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setStairPickup($stairPickup)
    {
      $this->stairPickup = $stairPickup;
      return $this;
    }

    /**
     * @return Money
     */
    public function getStairPickupFee()
    {
      return $this->stairPickupFee;
    }

    /**
     * @param Money $stairPickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setStairPickupFee($stairPickupFee)
    {
      $this->stairPickupFee = $stairPickupFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubcategory()
    {
      return $this->subcategory;
    }

    /**
     * @param string $subcategory
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSubcategory($subcategory)
    {
      $this->subcategory = $subcategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubNumber()
    {
      return $this->subNumber;
    }

    /**
     * @param string $subNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSubNumber($subNumber)
    {
      $this->subNumber = $subNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSundayDelivery()
    {
      return $this->sundayDelivery;
    }

    /**
     * @param boolean $sundayDelivery
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSundayDelivery($sundayDelivery)
    {
      $this->sundayDelivery = $sundayDelivery;
      return $this;
    }

    /**
     * @return Money
     */
    public function getSundayDeliveryFee()
    {
      return $this->sundayDeliveryFee;
    }

    /**
     * @param Money $sundayDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSundayDeliveryFee($sundayDeliveryFee)
    {
      $this->sundayDeliveryFee = $sundayDeliveryFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getSundayPickupFee()
    {
      return $this->sundayPickupFee;
    }

    /**
     * @param Money $sundayPickupFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSundayPickupFee($sundayPickupFee)
    {
      $this->sundayPickupFee = $sundayPickupFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressDc()
    {
      return $this->suppressDc;
    }

    /**
     * @param boolean $suppressDc
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSuppressDc($suppressDc)
    {
      $this->suppressDc = $suppressDc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressMms()
    {
      return $this->suppressMms;
    }

    /**
     * @param boolean $suppressMms
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setSuppressMms($suppressMms)
    {
      $this->suppressMms = $suppressMms;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTax()
    {
      return $this->tax;
    }

    /**
     * @param Money $tax
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTax($tax)
    {
      $this->tax = $tax;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getTemperatureControl()
    {
      return $this->temperatureControl;
    }

    /**
     * @param enumItem $temperatureControl
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTemperatureControl($temperatureControl)
    {
      $this->temperatureControl = $temperatureControl;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTemperatureControlFee()
    {
      return $this->temperatureControlFee;
    }

    /**
     * @param Money $temperatureControlFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTemperatureControlFee($temperatureControlFee)
    {
      $this->temperatureControlFee = $temperatureControlFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTerminalHandlingFee()
    {
      return $this->terminalHandlingFee;
    }

    /**
     * @param Money $terminalHandlingFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTerminalHandlingFee($terminalHandlingFee)
    {
      $this->terminalHandlingFee = $terminalHandlingFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param string $terms
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTerms($terms)
    {
      $this->terms = $terms;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfSale()
    {
      return $this->termsOfSale;
    }

    /**
     * @param string $termsOfSale
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTermsOfSale($termsOfSale)
    {
      $this->termsOfSale = $termsOfSale;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThirdPartyBilling()
    {
      return $this->thirdPartyBilling;
    }

    /**
     * @param boolean $thirdPartyBilling
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setThirdPartyBilling($thirdPartyBilling)
    {
      $this->thirdPartyBilling = $thirdPartyBilling;
      return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyBillingAccount()
    {
      return $this->thirdPartyBillingAccount;
    }

    /**
     * @param string $thirdPartyBillingAccount
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setThirdPartyBillingAccount($thirdPartyBillingAccount)
    {
      $this->thirdPartyBillingAccount = $thirdPartyBillingAccount;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getThirdPartyBillingAddress()
    {
      return $this->thirdPartyBillingAddress;
    }

    /**
     * @param NameAddress $thirdPartyBillingAddress
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setThirdPartyBillingAddress($thirdPartyBillingAddress)
    {
      $this->thirdPartyBillingAddress = $thirdPartyBillingAddress;
      return $this;
    }

    /**
     * @return Commitment
     */
    public function getTimeInTransit()
    {
      return $this->timeInTransit;
    }

    /**
     * @param Commitment $timeInTransit
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTimeInTransit($timeInTransit)
    {
      $this->timeInTransit = $timeInTransit;
      return $this;
    }

    /**
     * @return Money
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param Money $total
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTrackingNumber($trackingNumber)
    {
      $this->trackingNumber = $trackingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber2()
    {
      return $this->trackingNumber2;
    }

    /**
     * @param string $trackingNumber2
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTrackingNumber2($trackingNumber2)
    {
      $this->trackingNumber2 = $trackingNumber2;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getTransportMode()
    {
      return $this->transportMode;
    }

    /**
     * @param enumItem $transportMode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setTransportMode($transportMode)
    {
      $this->transportMode = $transportMode;
      return $this;
    }

    /**
     * @return NameAddress
     */
    public function getUltimateConsignee()
    {
      return $this->ultimateConsignee;
    }

    /**
     * @param NameAddress $ultimateConsignee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setUltimateConsignee($ultimateConsignee)
    {
      $this->ultimateConsignee = $ultimateConsignee;
      return $this;
    }

    /**
     * @return enumItem
     */
    public function getUltimateConsigneeType()
    {
      return $this->ultimateConsigneeType;
    }

    /**
     * @param enumItem $ultimateConsigneeType
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setUltimateConsigneeType($ultimateConsigneeType)
    {
      $this->ultimateConsigneeType = $ultimateConsigneeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getUltimateDestinationCountry()
    {
      return $this->ultimateDestinationCountry;
    }

    /**
     * @param string $ultimateDestinationCountry
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setUltimateDestinationCountry($ultimateDestinationCountry)
    {
      $this->ultimateDestinationCountry = $ultimateDestinationCountry;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnpack()
    {
      return $this->unpack;
    }

    /**
     * @param boolean $unpack
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setUnpack($unpack)
    {
      $this->unpack = $unpack;
      return $this;
    }

    /**
     * @return Money
     */
    public function getUnpackFee()
    {
      return $this->unpackFee;
    }

    /**
     * @param Money $unpackFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setUnpackFee($unpackFee)
    {
      $this->unpackFee = $unpackFee;
      return $this;
    }

    /**
     * @return Money
     */
    public function getUrbanDeliveryFee()
    {
      return $this->urbanDeliveryFee;
    }

    /**
     * @param Money $urbanDeliveryFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setUrbanDeliveryFee($urbanDeliveryFee)
    {
      $this->urbanDeliveryFee = $urbanDeliveryFee;
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
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
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setUserData5($userData5)
    {
      $this->userData5 = $userData5;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaybillBolNumber()
    {
      return $this->waybillBolNumber;
    }

    /**
     * @param string $waybillBolNumber
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setWaybillBolNumber($waybillBolNumber)
    {
      $this->waybillBolNumber = $waybillBolNumber;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param Weight $weight
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return Money
     */
    public function getWharfageFee()
    {
      return $this->wharfageFee;
    }

    /**
     * @param Money $wharfageFee
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setWharfageFee($wharfageFee)
    {
      $this->wharfageFee = $wharfageFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorldEaseCode()
    {
      return $this->worldEaseCode;
    }

    /**
     * @param string $worldEaseCode
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setWorldEaseCode($worldEaseCode)
    {
      $this->worldEaseCode = $worldEaseCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWorldEaseFlag()
    {
      return $this->worldEaseFlag;
    }

    /**
     * @param boolean $worldEaseFlag
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setWorldEaseFlag($worldEaseFlag)
    {
      $this->worldEaseFlag = $worldEaseFlag;
      return $this;
    }

    /**
     * @return int
     */
    public function getWorldEaseId()
    {
      return $this->worldEaseId;
    }

    /**
     * @param int $worldEaseId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setWorldEaseId($worldEaseId)
    {
      $this->worldEaseId = $worldEaseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorldEaseMasterShipmentId()
    {
      return $this->worldEaseMasterShipmentId;
    }

    /**
     * @param string $worldEaseMasterShipmentId
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setWorldEaseMasterShipmentId($worldEaseMasterShipmentId)
    {
      $this->worldEaseMasterShipmentId = $worldEaseMasterShipmentId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWorldEaseSingleEuCountry()
    {
      return $this->worldEaseSingleEuCountry;
    }

    /**
     * @param boolean $worldEaseSingleEuCountry
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setWorldEaseSingleEuCountry($worldEaseSingleEuCountry)
    {
      $this->worldEaseSingleEuCountry = $worldEaseSingleEuCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getZone()
    {
      return $this->zone;
    }

    /**
     * @param string $zone
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setZone($zone)
    {
      $this->zone = $zone;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalKey()
    {
      return $this->externalKey;
    }

    /**
     * @param string $externalKey
     * @return \Williams\ConnectshipBundle\AMP\DataDictionary
     */
    public function setExternalKey($externalKey)
    {
      $this->externalKey = $externalKey;
      return $this;
    }

}
