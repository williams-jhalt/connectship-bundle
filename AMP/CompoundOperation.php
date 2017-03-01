<?php

namespace Williams\ConnectshipBundle\AMP;

class CompoundOperation
{

    /**
     * @var CloseOutRequest $closeOutRequest
     */
    protected $closeOutRequest = null;

    /**
     * @var CreateGroupRequest $createGroupRequest
     */
    protected $createGroupRequest = null;

    /**
     * @var CustomOperationRequest $customOperationRequest
     */
    protected $customOperationRequest = null;

    /**
     * @var DeleteShipFilesRequest $deleteShipFilesRequest
     */
    protected $deleteShipFilesRequest = null;

    /**
     * @var DeleteTransmitItemsRequest $deleteTransmitItemsRequest
     */
    protected $deleteTransmitItemsRequest = null;

    /**
     * @var GetGroupRequest $getGroupRequest
     */
    protected $getGroupRequest = null;

    /**
     * @var GetSchemaRequest $getSchemaRequest
     */
    protected $getSchemaRequest = null;

    /**
     * @var GetShipperInformationRequest $getShipperInformationRequest
     */
    protected $getShipperInformationRequest = null;

    /**
     * @var ListCarriersRequest $listCarriersRequest
     */
    protected $listCarriersRequest = null;

    /**
     * @var ListCloseOutItemsRequest $listCloseOutItemsRequest
     */
    protected $listCloseOutItemsRequest = null;

    /**
     * @var ListCountriesRequest $listCountriesRequest
     */
    protected $listCountriesRequest = null;

    /**
     * @var ListCountryServicesRequest $listCountryServicesRequest
     */
    protected $listCountryServicesRequest = null;

    /**
     * @var ListCurrenciesRequest $listCurrenciesRequest
     */
    protected $listCurrenciesRequest = null;

    /**
     * @var ListDocumentsRequest $listDocumentsRequest
     */
    protected $listDocumentsRequest = null;

    /**
     * @var ListDocumentFormatsRequest $listDocumentFormatsRequest
     */
    protected $listDocumentFormatsRequest = null;

    /**
     * @var ListGroupingsRequest $listGroupingsRequest
     */
    protected $listGroupingsRequest = null;

    /**
     * @var ListGroupsRequest $listGroupsRequest
     */
    protected $listGroupsRequest = null;

    /**
     * @var ListIncotermsRequest $listIncotermsRequest
     */
    protected $listIncotermsRequest = null;

    /**
     * @var ListLocalPortsRequest $listLocalPortsRequest
     */
    protected $listLocalPortsRequest = null;

    /**
     * @var ListPackagingTypesRequest $listPackagingTypesRequest
     */
    protected $listPackagingTypesRequest = null;

    /**
     * @var ListPaymentTypesRequest $listPaymentTypesRequest
     */
    protected $listPaymentTypesRequest = null;

    /**
     * @var ListPrinterDevicesRequest $listPrinterDevicesRequest
     */
    protected $listPrinterDevicesRequest = null;

    /**
     * @var ListServicesRequest $listServicesRequest
     */
    protected $listServicesRequest = null;

    /**
     * @var ListShipFilesRequest $listShipFilesRequest
     */
    protected $listShipFilesRequest = null;

    /**
     * @var ListShippersRequest $listShippersRequest
     */
    protected $listShippersRequest = null;

    /**
     * @var ListStocksRequest $listStocksRequest
     */
    protected $listStocksRequest = null;

    /**
     * @var ListTransmitItemsRequest $listTransmitItemsRequest
     */
    protected $listTransmitItemsRequest = null;

    /**
     * @var ListUnitsRequest $listUnitsRequest
     */
    protected $listUnitsRequest = null;

    /**
     * @var ListWindowsPrintersRequest $listWindowsPrintersRequest
     */
    protected $listWindowsPrintersRequest = null;

    /**
     * @var ModifyContainerRequest $modifyContainerRequest
     */
    protected $modifyContainerRequest = null;

    /**
     * @var ModifyGroupRequest $modifyGroupRequest
     */
    protected $modifyGroupRequest = null;

    /**
     * @var ModifyPackagesRequest $modifyPackagesRequest
     */
    protected $modifyPackagesRequest = null;

    /**
     * @var PrintRequest $printRequest
     */
    protected $printRequest = null;

    /**
     * @var PrintXmlRequest $printXmlRequest
     */
    protected $printXmlRequest = null;

    /**
     * @var RateRequest $rateRequest
     */
    protected $rateRequest = null;

    /**
     * @var ReprocessRequest $reprocessRequest
     */
    protected $reprocessRequest = null;

    /**
     * @var SearchRequest $searchRequest
     */
    protected $searchRequest = null;

    /**
     * @var ShipRequest $shipRequest
     */
    protected $shipRequest = null;

    /**
     * @var TransmitRequest $transmitRequest
     */
    protected $transmitRequest = null;

    /**
     * @var ValidateAddressRequest $validateAddressRequest
     */
    protected $validateAddressRequest = null;

    /**
     * @var VoidPackagesRequest $voidPackagesRequest
     */
    protected $voidPackagesRequest = null;

    /**
     * @var string $preProcess
     */
    protected $preProcess = null;

    /**
     * @var string $postProcess
     */
    protected $postProcess = null;

    /**
     * @var language $locale
     */
    protected $locale = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @var boolean $stopOnFailure
     */
    protected $stopOnFailure = null;

    /**
     * @param CloseOutRequest $closeOutRequest
     * @param CreateGroupRequest $createGroupRequest
     * @param CustomOperationRequest $customOperationRequest
     * @param DeleteShipFilesRequest $deleteShipFilesRequest
     * @param DeleteTransmitItemsRequest $deleteTransmitItemsRequest
     * @param GetGroupRequest $getGroupRequest
     * @param GetSchemaRequest $getSchemaRequest
     * @param GetShipperInformationRequest $getShipperInformationRequest
     * @param ListCarriersRequest $listCarriersRequest
     * @param ListCloseOutItemsRequest $listCloseOutItemsRequest
     * @param ListCountriesRequest $listCountriesRequest
     * @param ListCountryServicesRequest $listCountryServicesRequest
     * @param ListCurrenciesRequest $listCurrenciesRequest
     * @param ListDocumentsRequest $listDocumentsRequest
     * @param ListDocumentFormatsRequest $listDocumentFormatsRequest
     * @param ListGroupingsRequest $listGroupingsRequest
     * @param ListGroupsRequest $listGroupsRequest
     * @param ListIncotermsRequest $listIncotermsRequest
     * @param ListLocalPortsRequest $listLocalPortsRequest
     * @param ListPackagingTypesRequest $listPackagingTypesRequest
     * @param ListPaymentTypesRequest $listPaymentTypesRequest
     * @param ListPrinterDevicesRequest $listPrinterDevicesRequest
     * @param ListServicesRequest $listServicesRequest
     * @param ListShipFilesRequest $listShipFilesRequest
     * @param ListShippersRequest $listShippersRequest
     * @param ListStocksRequest $listStocksRequest
     * @param ListTransmitItemsRequest $listTransmitItemsRequest
     * @param ListUnitsRequest $listUnitsRequest
     * @param ListWindowsPrintersRequest $listWindowsPrintersRequest
     * @param ModifyContainerRequest $modifyContainerRequest
     * @param ModifyGroupRequest $modifyGroupRequest
     * @param ModifyPackagesRequest $modifyPackagesRequest
     * @param PrintRequest $printRequest
     * @param PrintXmlRequest $printXmlRequest
     * @param RateRequest $rateRequest
     * @param ReprocessRequest $reprocessRequest
     * @param SearchRequest $searchRequest
     * @param ShipRequest $shipRequest
     * @param TransmitRequest $transmitRequest
     * @param ValidateAddressRequest $validateAddressRequest
     * @param VoidPackagesRequest $voidPackagesRequest
     * @param string $preProcess
     * @param string $postProcess
     * @param language $locale
     * @param string $asyncCorrelationData
     * @param boolean $stopOnFailure
     */
    public function __construct($closeOutRequest, $createGroupRequest, $customOperationRequest, $deleteShipFilesRequest, $deleteTransmitItemsRequest, $getGroupRequest, $getSchemaRequest, $getShipperInformationRequest, $listCarriersRequest, $listCloseOutItemsRequest, $listCountriesRequest, $listCountryServicesRequest, $listCurrenciesRequest, $listDocumentsRequest, $listDocumentFormatsRequest, $listGroupingsRequest, $listGroupsRequest, $listIncotermsRequest, $listLocalPortsRequest, $listPackagingTypesRequest, $listPaymentTypesRequest, $listPrinterDevicesRequest, $listServicesRequest, $listShipFilesRequest, $listShippersRequest, $listStocksRequest, $listTransmitItemsRequest, $listUnitsRequest, $listWindowsPrintersRequest, $modifyContainerRequest, $modifyGroupRequest, $modifyPackagesRequest, $printRequest, $printXmlRequest, $rateRequest, $reprocessRequest, $searchRequest, $shipRequest, $transmitRequest, $validateAddressRequest, $voidPackagesRequest, $preProcess, $postProcess, $locale, $asyncCorrelationData, $stopOnFailure)
    {
      $this->closeOutRequest = $closeOutRequest;
      $this->createGroupRequest = $createGroupRequest;
      $this->customOperationRequest = $customOperationRequest;
      $this->deleteShipFilesRequest = $deleteShipFilesRequest;
      $this->deleteTransmitItemsRequest = $deleteTransmitItemsRequest;
      $this->getGroupRequest = $getGroupRequest;
      $this->getSchemaRequest = $getSchemaRequest;
      $this->getShipperInformationRequest = $getShipperInformationRequest;
      $this->listCarriersRequest = $listCarriersRequest;
      $this->listCloseOutItemsRequest = $listCloseOutItemsRequest;
      $this->listCountriesRequest = $listCountriesRequest;
      $this->listCountryServicesRequest = $listCountryServicesRequest;
      $this->listCurrenciesRequest = $listCurrenciesRequest;
      $this->listDocumentsRequest = $listDocumentsRequest;
      $this->listDocumentFormatsRequest = $listDocumentFormatsRequest;
      $this->listGroupingsRequest = $listGroupingsRequest;
      $this->listGroupsRequest = $listGroupsRequest;
      $this->listIncotermsRequest = $listIncotermsRequest;
      $this->listLocalPortsRequest = $listLocalPortsRequest;
      $this->listPackagingTypesRequest = $listPackagingTypesRequest;
      $this->listPaymentTypesRequest = $listPaymentTypesRequest;
      $this->listPrinterDevicesRequest = $listPrinterDevicesRequest;
      $this->listServicesRequest = $listServicesRequest;
      $this->listShipFilesRequest = $listShipFilesRequest;
      $this->listShippersRequest = $listShippersRequest;
      $this->listStocksRequest = $listStocksRequest;
      $this->listTransmitItemsRequest = $listTransmitItemsRequest;
      $this->listUnitsRequest = $listUnitsRequest;
      $this->listWindowsPrintersRequest = $listWindowsPrintersRequest;
      $this->modifyContainerRequest = $modifyContainerRequest;
      $this->modifyGroupRequest = $modifyGroupRequest;
      $this->modifyPackagesRequest = $modifyPackagesRequest;
      $this->printRequest = $printRequest;
      $this->printXmlRequest = $printXmlRequest;
      $this->rateRequest = $rateRequest;
      $this->reprocessRequest = $reprocessRequest;
      $this->searchRequest = $searchRequest;
      $this->shipRequest = $shipRequest;
      $this->transmitRequest = $transmitRequest;
      $this->validateAddressRequest = $validateAddressRequest;
      $this->voidPackagesRequest = $voidPackagesRequest;
      $this->preProcess = $preProcess;
      $this->postProcess = $postProcess;
      $this->locale = $locale;
      $this->asyncCorrelationData = $asyncCorrelationData;
      $this->stopOnFailure = $stopOnFailure;
    }

    /**
     * @return CloseOutRequest
     */
    public function getCloseOutRequest()
    {
      return $this->closeOutRequest;
    }

    /**
     * @param CloseOutRequest $closeOutRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setCloseOutRequest($closeOutRequest)
    {
      $this->closeOutRequest = $closeOutRequest;
      return $this;
    }

    /**
     * @return CreateGroupRequest
     */
    public function getCreateGroupRequest()
    {
      return $this->createGroupRequest;
    }

    /**
     * @param CreateGroupRequest $createGroupRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setCreateGroupRequest($createGroupRequest)
    {
      $this->createGroupRequest = $createGroupRequest;
      return $this;
    }

    /**
     * @return CustomOperationRequest
     */
    public function getCustomOperationRequest()
    {
      return $this->customOperationRequest;
    }

    /**
     * @param CustomOperationRequest $customOperationRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setCustomOperationRequest($customOperationRequest)
    {
      $this->customOperationRequest = $customOperationRequest;
      return $this;
    }

    /**
     * @return DeleteShipFilesRequest
     */
    public function getDeleteShipFilesRequest()
    {
      return $this->deleteShipFilesRequest;
    }

    /**
     * @param DeleteShipFilesRequest $deleteShipFilesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setDeleteShipFilesRequest($deleteShipFilesRequest)
    {
      $this->deleteShipFilesRequest = $deleteShipFilesRequest;
      return $this;
    }

    /**
     * @return DeleteTransmitItemsRequest
     */
    public function getDeleteTransmitItemsRequest()
    {
      return $this->deleteTransmitItemsRequest;
    }

    /**
     * @param DeleteTransmitItemsRequest $deleteTransmitItemsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setDeleteTransmitItemsRequest($deleteTransmitItemsRequest)
    {
      $this->deleteTransmitItemsRequest = $deleteTransmitItemsRequest;
      return $this;
    }

    /**
     * @return GetGroupRequest
     */
    public function getGetGroupRequest()
    {
      return $this->getGroupRequest;
    }

    /**
     * @param GetGroupRequest $getGroupRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setGetGroupRequest($getGroupRequest)
    {
      $this->getGroupRequest = $getGroupRequest;
      return $this;
    }

    /**
     * @return GetSchemaRequest
     */
    public function getGetSchemaRequest()
    {
      return $this->getSchemaRequest;
    }

    /**
     * @param GetSchemaRequest $getSchemaRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setGetSchemaRequest($getSchemaRequest)
    {
      $this->getSchemaRequest = $getSchemaRequest;
      return $this;
    }

    /**
     * @return GetShipperInformationRequest
     */
    public function getGetShipperInformationRequest()
    {
      return $this->getShipperInformationRequest;
    }

    /**
     * @param GetShipperInformationRequest $getShipperInformationRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setGetShipperInformationRequest($getShipperInformationRequest)
    {
      $this->getShipperInformationRequest = $getShipperInformationRequest;
      return $this;
    }

    /**
     * @return ListCarriersRequest
     */
    public function getListCarriersRequest()
    {
      return $this->listCarriersRequest;
    }

    /**
     * @param ListCarriersRequest $listCarriersRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListCarriersRequest($listCarriersRequest)
    {
      $this->listCarriersRequest = $listCarriersRequest;
      return $this;
    }

    /**
     * @return ListCloseOutItemsRequest
     */
    public function getListCloseOutItemsRequest()
    {
      return $this->listCloseOutItemsRequest;
    }

    /**
     * @param ListCloseOutItemsRequest $listCloseOutItemsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListCloseOutItemsRequest($listCloseOutItemsRequest)
    {
      $this->listCloseOutItemsRequest = $listCloseOutItemsRequest;
      return $this;
    }

    /**
     * @return ListCountriesRequest
     */
    public function getListCountriesRequest()
    {
      return $this->listCountriesRequest;
    }

    /**
     * @param ListCountriesRequest $listCountriesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListCountriesRequest($listCountriesRequest)
    {
      $this->listCountriesRequest = $listCountriesRequest;
      return $this;
    }

    /**
     * @return ListCountryServicesRequest
     */
    public function getListCountryServicesRequest()
    {
      return $this->listCountryServicesRequest;
    }

    /**
     * @param ListCountryServicesRequest $listCountryServicesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListCountryServicesRequest($listCountryServicesRequest)
    {
      $this->listCountryServicesRequest = $listCountryServicesRequest;
      return $this;
    }

    /**
     * @return ListCurrenciesRequest
     */
    public function getListCurrenciesRequest()
    {
      return $this->listCurrenciesRequest;
    }

    /**
     * @param ListCurrenciesRequest $listCurrenciesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListCurrenciesRequest($listCurrenciesRequest)
    {
      $this->listCurrenciesRequest = $listCurrenciesRequest;
      return $this;
    }

    /**
     * @return ListDocumentsRequest
     */
    public function getListDocumentsRequest()
    {
      return $this->listDocumentsRequest;
    }

    /**
     * @param ListDocumentsRequest $listDocumentsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListDocumentsRequest($listDocumentsRequest)
    {
      $this->listDocumentsRequest = $listDocumentsRequest;
      return $this;
    }

    /**
     * @return ListDocumentFormatsRequest
     */
    public function getListDocumentFormatsRequest()
    {
      return $this->listDocumentFormatsRequest;
    }

    /**
     * @param ListDocumentFormatsRequest $listDocumentFormatsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListDocumentFormatsRequest($listDocumentFormatsRequest)
    {
      $this->listDocumentFormatsRequest = $listDocumentFormatsRequest;
      return $this;
    }

    /**
     * @return ListGroupingsRequest
     */
    public function getListGroupingsRequest()
    {
      return $this->listGroupingsRequest;
    }

    /**
     * @param ListGroupingsRequest $listGroupingsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListGroupingsRequest($listGroupingsRequest)
    {
      $this->listGroupingsRequest = $listGroupingsRequest;
      return $this;
    }

    /**
     * @return ListGroupsRequest
     */
    public function getListGroupsRequest()
    {
      return $this->listGroupsRequest;
    }

    /**
     * @param ListGroupsRequest $listGroupsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListGroupsRequest($listGroupsRequest)
    {
      $this->listGroupsRequest = $listGroupsRequest;
      return $this;
    }

    /**
     * @return ListIncotermsRequest
     */
    public function getListIncotermsRequest()
    {
      return $this->listIncotermsRequest;
    }

    /**
     * @param ListIncotermsRequest $listIncotermsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListIncotermsRequest($listIncotermsRequest)
    {
      $this->listIncotermsRequest = $listIncotermsRequest;
      return $this;
    }

    /**
     * @return ListLocalPortsRequest
     */
    public function getListLocalPortsRequest()
    {
      return $this->listLocalPortsRequest;
    }

    /**
     * @param ListLocalPortsRequest $listLocalPortsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListLocalPortsRequest($listLocalPortsRequest)
    {
      $this->listLocalPortsRequest = $listLocalPortsRequest;
      return $this;
    }

    /**
     * @return ListPackagingTypesRequest
     */
    public function getListPackagingTypesRequest()
    {
      return $this->listPackagingTypesRequest;
    }

    /**
     * @param ListPackagingTypesRequest $listPackagingTypesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListPackagingTypesRequest($listPackagingTypesRequest)
    {
      $this->listPackagingTypesRequest = $listPackagingTypesRequest;
      return $this;
    }

    /**
     * @return ListPaymentTypesRequest
     */
    public function getListPaymentTypesRequest()
    {
      return $this->listPaymentTypesRequest;
    }

    /**
     * @param ListPaymentTypesRequest $listPaymentTypesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListPaymentTypesRequest($listPaymentTypesRequest)
    {
      $this->listPaymentTypesRequest = $listPaymentTypesRequest;
      return $this;
    }

    /**
     * @return ListPrinterDevicesRequest
     */
    public function getListPrinterDevicesRequest()
    {
      return $this->listPrinterDevicesRequest;
    }

    /**
     * @param ListPrinterDevicesRequest $listPrinterDevicesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListPrinterDevicesRequest($listPrinterDevicesRequest)
    {
      $this->listPrinterDevicesRequest = $listPrinterDevicesRequest;
      return $this;
    }

    /**
     * @return ListServicesRequest
     */
    public function getListServicesRequest()
    {
      return $this->listServicesRequest;
    }

    /**
     * @param ListServicesRequest $listServicesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListServicesRequest($listServicesRequest)
    {
      $this->listServicesRequest = $listServicesRequest;
      return $this;
    }

    /**
     * @return ListShipFilesRequest
     */
    public function getListShipFilesRequest()
    {
      return $this->listShipFilesRequest;
    }

    /**
     * @param ListShipFilesRequest $listShipFilesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListShipFilesRequest($listShipFilesRequest)
    {
      $this->listShipFilesRequest = $listShipFilesRequest;
      return $this;
    }

    /**
     * @return ListShippersRequest
     */
    public function getListShippersRequest()
    {
      return $this->listShippersRequest;
    }

    /**
     * @param ListShippersRequest $listShippersRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListShippersRequest($listShippersRequest)
    {
      $this->listShippersRequest = $listShippersRequest;
      return $this;
    }

    /**
     * @return ListStocksRequest
     */
    public function getListStocksRequest()
    {
      return $this->listStocksRequest;
    }

    /**
     * @param ListStocksRequest $listStocksRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListStocksRequest($listStocksRequest)
    {
      $this->listStocksRequest = $listStocksRequest;
      return $this;
    }

    /**
     * @return ListTransmitItemsRequest
     */
    public function getListTransmitItemsRequest()
    {
      return $this->listTransmitItemsRequest;
    }

    /**
     * @param ListTransmitItemsRequest $listTransmitItemsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListTransmitItemsRequest($listTransmitItemsRequest)
    {
      $this->listTransmitItemsRequest = $listTransmitItemsRequest;
      return $this;
    }

    /**
     * @return ListUnitsRequest
     */
    public function getListUnitsRequest()
    {
      return $this->listUnitsRequest;
    }

    /**
     * @param ListUnitsRequest $listUnitsRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListUnitsRequest($listUnitsRequest)
    {
      $this->listUnitsRequest = $listUnitsRequest;
      return $this;
    }

    /**
     * @return ListWindowsPrintersRequest
     */
    public function getListWindowsPrintersRequest()
    {
      return $this->listWindowsPrintersRequest;
    }

    /**
     * @param ListWindowsPrintersRequest $listWindowsPrintersRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setListWindowsPrintersRequest($listWindowsPrintersRequest)
    {
      $this->listWindowsPrintersRequest = $listWindowsPrintersRequest;
      return $this;
    }

    /**
     * @return ModifyContainerRequest
     */
    public function getModifyContainerRequest()
    {
      return $this->modifyContainerRequest;
    }

    /**
     * @param ModifyContainerRequest $modifyContainerRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setModifyContainerRequest($modifyContainerRequest)
    {
      $this->modifyContainerRequest = $modifyContainerRequest;
      return $this;
    }

    /**
     * @return ModifyGroupRequest
     */
    public function getModifyGroupRequest()
    {
      return $this->modifyGroupRequest;
    }

    /**
     * @param ModifyGroupRequest $modifyGroupRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setModifyGroupRequest($modifyGroupRequest)
    {
      $this->modifyGroupRequest = $modifyGroupRequest;
      return $this;
    }

    /**
     * @return ModifyPackagesRequest
     */
    public function getModifyPackagesRequest()
    {
      return $this->modifyPackagesRequest;
    }

    /**
     * @param ModifyPackagesRequest $modifyPackagesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setModifyPackagesRequest($modifyPackagesRequest)
    {
      $this->modifyPackagesRequest = $modifyPackagesRequest;
      return $this;
    }

    /**
     * @return PrintRequest
     */
    public function getPrintRequest()
    {
      return $this->printRequest;
    }

    /**
     * @param PrintRequest $printRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setPrintRequest($printRequest)
    {
      $this->printRequest = $printRequest;
      return $this;
    }

    /**
     * @return PrintXmlRequest
     */
    public function getPrintXmlRequest()
    {
      return $this->printXmlRequest;
    }

    /**
     * @param PrintXmlRequest $printXmlRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setPrintXmlRequest($printXmlRequest)
    {
      $this->printXmlRequest = $printXmlRequest;
      return $this;
    }

    /**
     * @return RateRequest
     */
    public function getRateRequest()
    {
      return $this->rateRequest;
    }

    /**
     * @param RateRequest $rateRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setRateRequest($rateRequest)
    {
      $this->rateRequest = $rateRequest;
      return $this;
    }

    /**
     * @return ReprocessRequest
     */
    public function getReprocessRequest()
    {
      return $this->reprocessRequest;
    }

    /**
     * @param ReprocessRequest $reprocessRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setReprocessRequest($reprocessRequest)
    {
      $this->reprocessRequest = $reprocessRequest;
      return $this;
    }

    /**
     * @return SearchRequest
     */
    public function getSearchRequest()
    {
      return $this->searchRequest;
    }

    /**
     * @param SearchRequest $searchRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setSearchRequest($searchRequest)
    {
      $this->searchRequest = $searchRequest;
      return $this;
    }

    /**
     * @return ShipRequest
     */
    public function getShipRequest()
    {
      return $this->shipRequest;
    }

    /**
     * @param ShipRequest $shipRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setShipRequest($shipRequest)
    {
      $this->shipRequest = $shipRequest;
      return $this;
    }

    /**
     * @return TransmitRequest
     */
    public function getTransmitRequest()
    {
      return $this->transmitRequest;
    }

    /**
     * @param TransmitRequest $transmitRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setTransmitRequest($transmitRequest)
    {
      $this->transmitRequest = $transmitRequest;
      return $this;
    }

    /**
     * @return ValidateAddressRequest
     */
    public function getValidateAddressRequest()
    {
      return $this->validateAddressRequest;
    }

    /**
     * @param ValidateAddressRequest $validateAddressRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setValidateAddressRequest($validateAddressRequest)
    {
      $this->validateAddressRequest = $validateAddressRequest;
      return $this;
    }

    /**
     * @return VoidPackagesRequest
     */
    public function getVoidPackagesRequest()
    {
      return $this->voidPackagesRequest;
    }

    /**
     * @param VoidPackagesRequest $voidPackagesRequest
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setVoidPackagesRequest($voidPackagesRequest)
    {
      $this->voidPackagesRequest = $voidPackagesRequest;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreProcess()
    {
      return $this->preProcess;
    }

    /**
     * @param string $preProcess
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setPreProcess($preProcess)
    {
      $this->preProcess = $preProcess;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostProcess()
    {
      return $this->postProcess;
    }

    /**
     * @param string $postProcess
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setPostProcess($postProcess)
    {
      $this->postProcess = $postProcess;
      return $this;
    }

    /**
     * @return language
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param language $locale
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return string
     */
    public function getAsyncCorrelationData()
    {
      return $this->asyncCorrelationData;
    }

    /**
     * @param string $asyncCorrelationData
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStopOnFailure()
    {
      return $this->stopOnFailure;
    }

    /**
     * @param boolean $stopOnFailure
     * @return \Williams\ConnectshipBundle\AMP\CompoundOperation
     */
    public function setStopOnFailure($stopOnFailure)
    {
      $this->stopOnFailure = $stopOnFailure;
      return $this;
    }

}
