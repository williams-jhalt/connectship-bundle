<?php

namespace Williams\ConnectshipBundle\AMP;

class CompoundResult
{

    /**
     * @var CloseOutResponse $closeOutResponse
     */
    protected $closeOutResponse = null;

    /**
     * @var CreateGroupResponse $createGroupResponse
     */
    protected $createGroupResponse = null;

    /**
     * @var CustomOperationResponse $customOperationResponse
     */
    protected $customOperationResponse = null;

    /**
     * @var DeleteShipFilesResponse $deleteShipFilesResponse
     */
    protected $deleteShipFilesResponse = null;

    /**
     * @var DeleteTransmitItemsResponse $deleteTransmitItemsResponse
     */
    protected $deleteTransmitItemsResponse = null;

    /**
     * @var GetGroupResponse $getGroupResponse
     */
    protected $getGroupResponse = null;

    /**
     * @var GetSchemaResponse $getSchemaResponse
     */
    protected $getSchemaResponse = null;

    /**
     * @var GetShipperInformationResponse $getShipperInformationResponse
     */
    protected $getShipperInformationResponse = null;

    /**
     * @var ListCarriersResponse $listCarriersResponse
     */
    protected $listCarriersResponse = null;

    /**
     * @var ListCloseOutItemsResponse $listCloseOutItemsResponse
     */
    protected $listCloseOutItemsResponse = null;

    /**
     * @var ListCountriesResponse $listCountriesResponse
     */
    protected $listCountriesResponse = null;

    /**
     * @var ListCountryServicesResponse $listCountryServicesResponse
     */
    protected $listCountryServicesResponse = null;

    /**
     * @var ListCurrenciesResponse $listCurrenciesResponse
     */
    protected $listCurrenciesResponse = null;

    /**
     * @var ListDocumentsResponse $listDocumentsResponse
     */
    protected $listDocumentsResponse = null;

    /**
     * @var ListDocumentFormatsResponse $listDocumentFormatsResponse
     */
    protected $listDocumentFormatsResponse = null;

    /**
     * @var ListGroupingsResponse $listGroupingsResponse
     */
    protected $listGroupingsResponse = null;

    /**
     * @var ListGroupsResponse $listGroupsResponse
     */
    protected $listGroupsResponse = null;

    /**
     * @var ListIncotermsResponse $listIncotermsResponse
     */
    protected $listIncotermsResponse = null;

    /**
     * @var ListLocalPortsResponse $listLocalPortsResponse
     */
    protected $listLocalPortsResponse = null;

    /**
     * @var ListPackagingTypesResponse $listPackagingTypesResponse
     */
    protected $listPackagingTypesResponse = null;

    /**
     * @var ListPaymentTypesResponse $listPaymentTypesResponse
     */
    protected $listPaymentTypesResponse = null;

    /**
     * @var ListPrinterDevicesResponse $listPrinterDevicesResponse
     */
    protected $listPrinterDevicesResponse = null;

    /**
     * @var ListServicesResponse $listServicesResponse
     */
    protected $listServicesResponse = null;

    /**
     * @var ListShipFilesResponse $listShipFilesResponse
     */
    protected $listShipFilesResponse = null;

    /**
     * @var ListShippersResponse $listShippersResponse
     */
    protected $listShippersResponse = null;

    /**
     * @var ListStocksResponse $listStocksResponse
     */
    protected $listStocksResponse = null;

    /**
     * @var ListTransmitItemsResponse $listTransmitItemsResponse
     */
    protected $listTransmitItemsResponse = null;

    /**
     * @var ListUnitsResponse $listUnitsResponse
     */
    protected $listUnitsResponse = null;

    /**
     * @var ListWindowsPrintersResponse $listWindowsPrintersResponse
     */
    protected $listWindowsPrintersResponse = null;

    /**
     * @var ModifyContainerResponse $modifyContainerResponse
     */
    protected $modifyContainerResponse = null;

    /**
     * @var ModifyGroupResponse $modifyGroupResponse
     */
    protected $modifyGroupResponse = null;

    /**
     * @var ModifyPackagesResponse $modifyPackagesResponse
     */
    protected $modifyPackagesResponse = null;

    /**
     * @var PrintResponse $printResponse
     */
    protected $printResponse = null;

    /**
     * @var PrintXmlResponse $printXmlResponse
     */
    protected $printXmlResponse = null;

    /**
     * @var RateResponse $rateResponse
     */
    protected $rateResponse = null;

    /**
     * @var ReprocessResponse $reprocessResponse
     */
    protected $reprocessResponse = null;

    /**
     * @var SearchResponse $searchResponse
     */
    protected $searchResponse = null;

    /**
     * @var ShipResponse $shipResponse
     */
    protected $shipResponse = null;

    /**
     * @var TransmitResponse $transmitResponse
     */
    protected $transmitResponse = null;

    /**
     * @var ValidateAddressResponse $validateAddressResponse
     */
    protected $validateAddressResponse = null;

    /**
     * @var VoidPackagesResponse $voidPackagesResponse
     */
    protected $voidPackagesResponse = null;

    /**
     * @var string $asyncCorrelationData
     */
    protected $asyncCorrelationData = null;

    /**
     * @param CloseOutResponse $closeOutResponse
     * @param CreateGroupResponse $createGroupResponse
     * @param CustomOperationResponse $customOperationResponse
     * @param DeleteShipFilesResponse $deleteShipFilesResponse
     * @param DeleteTransmitItemsResponse $deleteTransmitItemsResponse
     * @param GetGroupResponse $getGroupResponse
     * @param GetSchemaResponse $getSchemaResponse
     * @param GetShipperInformationResponse $getShipperInformationResponse
     * @param ListCarriersResponse $listCarriersResponse
     * @param ListCloseOutItemsResponse $listCloseOutItemsResponse
     * @param ListCountriesResponse $listCountriesResponse
     * @param ListCountryServicesResponse $listCountryServicesResponse
     * @param ListCurrenciesResponse $listCurrenciesResponse
     * @param ListDocumentsResponse $listDocumentsResponse
     * @param ListDocumentFormatsResponse $listDocumentFormatsResponse
     * @param ListGroupingsResponse $listGroupingsResponse
     * @param ListGroupsResponse $listGroupsResponse
     * @param ListIncotermsResponse $listIncotermsResponse
     * @param ListLocalPortsResponse $listLocalPortsResponse
     * @param ListPackagingTypesResponse $listPackagingTypesResponse
     * @param ListPaymentTypesResponse $listPaymentTypesResponse
     * @param ListPrinterDevicesResponse $listPrinterDevicesResponse
     * @param ListServicesResponse $listServicesResponse
     * @param ListShipFilesResponse $listShipFilesResponse
     * @param ListShippersResponse $listShippersResponse
     * @param ListStocksResponse $listStocksResponse
     * @param ListTransmitItemsResponse $listTransmitItemsResponse
     * @param ListUnitsResponse $listUnitsResponse
     * @param ListWindowsPrintersResponse $listWindowsPrintersResponse
     * @param ModifyContainerResponse $modifyContainerResponse
     * @param ModifyGroupResponse $modifyGroupResponse
     * @param ModifyPackagesResponse $modifyPackagesResponse
     * @param PrintResponse $printResponse
     * @param PrintXmlResponse $printXmlResponse
     * @param RateResponse $rateResponse
     * @param ReprocessResponse $reprocessResponse
     * @param SearchResponse $searchResponse
     * @param ShipResponse $shipResponse
     * @param TransmitResponse $transmitResponse
     * @param ValidateAddressResponse $validateAddressResponse
     * @param VoidPackagesResponse $voidPackagesResponse
     * @param string $asyncCorrelationData
     */
    public function __construct($closeOutResponse, $createGroupResponse, $customOperationResponse, $deleteShipFilesResponse, $deleteTransmitItemsResponse, $getGroupResponse, $getSchemaResponse, $getShipperInformationResponse, $listCarriersResponse, $listCloseOutItemsResponse, $listCountriesResponse, $listCountryServicesResponse, $listCurrenciesResponse, $listDocumentsResponse, $listDocumentFormatsResponse, $listGroupingsResponse, $listGroupsResponse, $listIncotermsResponse, $listLocalPortsResponse, $listPackagingTypesResponse, $listPaymentTypesResponse, $listPrinterDevicesResponse, $listServicesResponse, $listShipFilesResponse, $listShippersResponse, $listStocksResponse, $listTransmitItemsResponse, $listUnitsResponse, $listWindowsPrintersResponse, $modifyContainerResponse, $modifyGroupResponse, $modifyPackagesResponse, $printResponse, $printXmlResponse, $rateResponse, $reprocessResponse, $searchResponse, $shipResponse, $transmitResponse, $validateAddressResponse, $voidPackagesResponse, $asyncCorrelationData)
    {
      $this->closeOutResponse = $closeOutResponse;
      $this->createGroupResponse = $createGroupResponse;
      $this->customOperationResponse = $customOperationResponse;
      $this->deleteShipFilesResponse = $deleteShipFilesResponse;
      $this->deleteTransmitItemsResponse = $deleteTransmitItemsResponse;
      $this->getGroupResponse = $getGroupResponse;
      $this->getSchemaResponse = $getSchemaResponse;
      $this->getShipperInformationResponse = $getShipperInformationResponse;
      $this->listCarriersResponse = $listCarriersResponse;
      $this->listCloseOutItemsResponse = $listCloseOutItemsResponse;
      $this->listCountriesResponse = $listCountriesResponse;
      $this->listCountryServicesResponse = $listCountryServicesResponse;
      $this->listCurrenciesResponse = $listCurrenciesResponse;
      $this->listDocumentsResponse = $listDocumentsResponse;
      $this->listDocumentFormatsResponse = $listDocumentFormatsResponse;
      $this->listGroupingsResponse = $listGroupingsResponse;
      $this->listGroupsResponse = $listGroupsResponse;
      $this->listIncotermsResponse = $listIncotermsResponse;
      $this->listLocalPortsResponse = $listLocalPortsResponse;
      $this->listPackagingTypesResponse = $listPackagingTypesResponse;
      $this->listPaymentTypesResponse = $listPaymentTypesResponse;
      $this->listPrinterDevicesResponse = $listPrinterDevicesResponse;
      $this->listServicesResponse = $listServicesResponse;
      $this->listShipFilesResponse = $listShipFilesResponse;
      $this->listShippersResponse = $listShippersResponse;
      $this->listStocksResponse = $listStocksResponse;
      $this->listTransmitItemsResponse = $listTransmitItemsResponse;
      $this->listUnitsResponse = $listUnitsResponse;
      $this->listWindowsPrintersResponse = $listWindowsPrintersResponse;
      $this->modifyContainerResponse = $modifyContainerResponse;
      $this->modifyGroupResponse = $modifyGroupResponse;
      $this->modifyPackagesResponse = $modifyPackagesResponse;
      $this->printResponse = $printResponse;
      $this->printXmlResponse = $printXmlResponse;
      $this->rateResponse = $rateResponse;
      $this->reprocessResponse = $reprocessResponse;
      $this->searchResponse = $searchResponse;
      $this->shipResponse = $shipResponse;
      $this->transmitResponse = $transmitResponse;
      $this->validateAddressResponse = $validateAddressResponse;
      $this->voidPackagesResponse = $voidPackagesResponse;
      $this->asyncCorrelationData = $asyncCorrelationData;
    }

    /**
     * @return CloseOutResponse
     */
    public function getCloseOutResponse()
    {
      return $this->closeOutResponse;
    }

    /**
     * @param CloseOutResponse $closeOutResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setCloseOutResponse($closeOutResponse)
    {
      $this->closeOutResponse = $closeOutResponse;
      return $this;
    }

    /**
     * @return CreateGroupResponse
     */
    public function getCreateGroupResponse()
    {
      return $this->createGroupResponse;
    }

    /**
     * @param CreateGroupResponse $createGroupResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setCreateGroupResponse($createGroupResponse)
    {
      $this->createGroupResponse = $createGroupResponse;
      return $this;
    }

    /**
     * @return CustomOperationResponse
     */
    public function getCustomOperationResponse()
    {
      return $this->customOperationResponse;
    }

    /**
     * @param CustomOperationResponse $customOperationResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setCustomOperationResponse($customOperationResponse)
    {
      $this->customOperationResponse = $customOperationResponse;
      return $this;
    }

    /**
     * @return DeleteShipFilesResponse
     */
    public function getDeleteShipFilesResponse()
    {
      return $this->deleteShipFilesResponse;
    }

    /**
     * @param DeleteShipFilesResponse $deleteShipFilesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setDeleteShipFilesResponse($deleteShipFilesResponse)
    {
      $this->deleteShipFilesResponse = $deleteShipFilesResponse;
      return $this;
    }

    /**
     * @return DeleteTransmitItemsResponse
     */
    public function getDeleteTransmitItemsResponse()
    {
      return $this->deleteTransmitItemsResponse;
    }

    /**
     * @param DeleteTransmitItemsResponse $deleteTransmitItemsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setDeleteTransmitItemsResponse($deleteTransmitItemsResponse)
    {
      $this->deleteTransmitItemsResponse = $deleteTransmitItemsResponse;
      return $this;
    }

    /**
     * @return GetGroupResponse
     */
    public function getGetGroupResponse()
    {
      return $this->getGroupResponse;
    }

    /**
     * @param GetGroupResponse $getGroupResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setGetGroupResponse($getGroupResponse)
    {
      $this->getGroupResponse = $getGroupResponse;
      return $this;
    }

    /**
     * @return GetSchemaResponse
     */
    public function getGetSchemaResponse()
    {
      return $this->getSchemaResponse;
    }

    /**
     * @param GetSchemaResponse $getSchemaResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setGetSchemaResponse($getSchemaResponse)
    {
      $this->getSchemaResponse = $getSchemaResponse;
      return $this;
    }

    /**
     * @return GetShipperInformationResponse
     */
    public function getGetShipperInformationResponse()
    {
      return $this->getShipperInformationResponse;
    }

    /**
     * @param GetShipperInformationResponse $getShipperInformationResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setGetShipperInformationResponse($getShipperInformationResponse)
    {
      $this->getShipperInformationResponse = $getShipperInformationResponse;
      return $this;
    }

    /**
     * @return ListCarriersResponse
     */
    public function getListCarriersResponse()
    {
      return $this->listCarriersResponse;
    }

    /**
     * @param ListCarriersResponse $listCarriersResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListCarriersResponse($listCarriersResponse)
    {
      $this->listCarriersResponse = $listCarriersResponse;
      return $this;
    }

    /**
     * @return ListCloseOutItemsResponse
     */
    public function getListCloseOutItemsResponse()
    {
      return $this->listCloseOutItemsResponse;
    }

    /**
     * @param ListCloseOutItemsResponse $listCloseOutItemsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListCloseOutItemsResponse($listCloseOutItemsResponse)
    {
      $this->listCloseOutItemsResponse = $listCloseOutItemsResponse;
      return $this;
    }

    /**
     * @return ListCountriesResponse
     */
    public function getListCountriesResponse()
    {
      return $this->listCountriesResponse;
    }

    /**
     * @param ListCountriesResponse $listCountriesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListCountriesResponse($listCountriesResponse)
    {
      $this->listCountriesResponse = $listCountriesResponse;
      return $this;
    }

    /**
     * @return ListCountryServicesResponse
     */
    public function getListCountryServicesResponse()
    {
      return $this->listCountryServicesResponse;
    }

    /**
     * @param ListCountryServicesResponse $listCountryServicesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListCountryServicesResponse($listCountryServicesResponse)
    {
      $this->listCountryServicesResponse = $listCountryServicesResponse;
      return $this;
    }

    /**
     * @return ListCurrenciesResponse
     */
    public function getListCurrenciesResponse()
    {
      return $this->listCurrenciesResponse;
    }

    /**
     * @param ListCurrenciesResponse $listCurrenciesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListCurrenciesResponse($listCurrenciesResponse)
    {
      $this->listCurrenciesResponse = $listCurrenciesResponse;
      return $this;
    }

    /**
     * @return ListDocumentsResponse
     */
    public function getListDocumentsResponse()
    {
      return $this->listDocumentsResponse;
    }

    /**
     * @param ListDocumentsResponse $listDocumentsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListDocumentsResponse($listDocumentsResponse)
    {
      $this->listDocumentsResponse = $listDocumentsResponse;
      return $this;
    }

    /**
     * @return ListDocumentFormatsResponse
     */
    public function getListDocumentFormatsResponse()
    {
      return $this->listDocumentFormatsResponse;
    }

    /**
     * @param ListDocumentFormatsResponse $listDocumentFormatsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListDocumentFormatsResponse($listDocumentFormatsResponse)
    {
      $this->listDocumentFormatsResponse = $listDocumentFormatsResponse;
      return $this;
    }

    /**
     * @return ListGroupingsResponse
     */
    public function getListGroupingsResponse()
    {
      return $this->listGroupingsResponse;
    }

    /**
     * @param ListGroupingsResponse $listGroupingsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListGroupingsResponse($listGroupingsResponse)
    {
      $this->listGroupingsResponse = $listGroupingsResponse;
      return $this;
    }

    /**
     * @return ListGroupsResponse
     */
    public function getListGroupsResponse()
    {
      return $this->listGroupsResponse;
    }

    /**
     * @param ListGroupsResponse $listGroupsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListGroupsResponse($listGroupsResponse)
    {
      $this->listGroupsResponse = $listGroupsResponse;
      return $this;
    }

    /**
     * @return ListIncotermsResponse
     */
    public function getListIncotermsResponse()
    {
      return $this->listIncotermsResponse;
    }

    /**
     * @param ListIncotermsResponse $listIncotermsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListIncotermsResponse($listIncotermsResponse)
    {
      $this->listIncotermsResponse = $listIncotermsResponse;
      return $this;
    }

    /**
     * @return ListLocalPortsResponse
     */
    public function getListLocalPortsResponse()
    {
      return $this->listLocalPortsResponse;
    }

    /**
     * @param ListLocalPortsResponse $listLocalPortsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListLocalPortsResponse($listLocalPortsResponse)
    {
      $this->listLocalPortsResponse = $listLocalPortsResponse;
      return $this;
    }

    /**
     * @return ListPackagingTypesResponse
     */
    public function getListPackagingTypesResponse()
    {
      return $this->listPackagingTypesResponse;
    }

    /**
     * @param ListPackagingTypesResponse $listPackagingTypesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListPackagingTypesResponse($listPackagingTypesResponse)
    {
      $this->listPackagingTypesResponse = $listPackagingTypesResponse;
      return $this;
    }

    /**
     * @return ListPaymentTypesResponse
     */
    public function getListPaymentTypesResponse()
    {
      return $this->listPaymentTypesResponse;
    }

    /**
     * @param ListPaymentTypesResponse $listPaymentTypesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListPaymentTypesResponse($listPaymentTypesResponse)
    {
      $this->listPaymentTypesResponse = $listPaymentTypesResponse;
      return $this;
    }

    /**
     * @return ListPrinterDevicesResponse
     */
    public function getListPrinterDevicesResponse()
    {
      return $this->listPrinterDevicesResponse;
    }

    /**
     * @param ListPrinterDevicesResponse $listPrinterDevicesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListPrinterDevicesResponse($listPrinterDevicesResponse)
    {
      $this->listPrinterDevicesResponse = $listPrinterDevicesResponse;
      return $this;
    }

    /**
     * @return ListServicesResponse
     */
    public function getListServicesResponse()
    {
      return $this->listServicesResponse;
    }

    /**
     * @param ListServicesResponse $listServicesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListServicesResponse($listServicesResponse)
    {
      $this->listServicesResponse = $listServicesResponse;
      return $this;
    }

    /**
     * @return ListShipFilesResponse
     */
    public function getListShipFilesResponse()
    {
      return $this->listShipFilesResponse;
    }

    /**
     * @param ListShipFilesResponse $listShipFilesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListShipFilesResponse($listShipFilesResponse)
    {
      $this->listShipFilesResponse = $listShipFilesResponse;
      return $this;
    }

    /**
     * @return ListShippersResponse
     */
    public function getListShippersResponse()
    {
      return $this->listShippersResponse;
    }

    /**
     * @param ListShippersResponse $listShippersResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListShippersResponse($listShippersResponse)
    {
      $this->listShippersResponse = $listShippersResponse;
      return $this;
    }

    /**
     * @return ListStocksResponse
     */
    public function getListStocksResponse()
    {
      return $this->listStocksResponse;
    }

    /**
     * @param ListStocksResponse $listStocksResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListStocksResponse($listStocksResponse)
    {
      $this->listStocksResponse = $listStocksResponse;
      return $this;
    }

    /**
     * @return ListTransmitItemsResponse
     */
    public function getListTransmitItemsResponse()
    {
      return $this->listTransmitItemsResponse;
    }

    /**
     * @param ListTransmitItemsResponse $listTransmitItemsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListTransmitItemsResponse($listTransmitItemsResponse)
    {
      $this->listTransmitItemsResponse = $listTransmitItemsResponse;
      return $this;
    }

    /**
     * @return ListUnitsResponse
     */
    public function getListUnitsResponse()
    {
      return $this->listUnitsResponse;
    }

    /**
     * @param ListUnitsResponse $listUnitsResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListUnitsResponse($listUnitsResponse)
    {
      $this->listUnitsResponse = $listUnitsResponse;
      return $this;
    }

    /**
     * @return ListWindowsPrintersResponse
     */
    public function getListWindowsPrintersResponse()
    {
      return $this->listWindowsPrintersResponse;
    }

    /**
     * @param ListWindowsPrintersResponse $listWindowsPrintersResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setListWindowsPrintersResponse($listWindowsPrintersResponse)
    {
      $this->listWindowsPrintersResponse = $listWindowsPrintersResponse;
      return $this;
    }

    /**
     * @return ModifyContainerResponse
     */
    public function getModifyContainerResponse()
    {
      return $this->modifyContainerResponse;
    }

    /**
     * @param ModifyContainerResponse $modifyContainerResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setModifyContainerResponse($modifyContainerResponse)
    {
      $this->modifyContainerResponse = $modifyContainerResponse;
      return $this;
    }

    /**
     * @return ModifyGroupResponse
     */
    public function getModifyGroupResponse()
    {
      return $this->modifyGroupResponse;
    }

    /**
     * @param ModifyGroupResponse $modifyGroupResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setModifyGroupResponse($modifyGroupResponse)
    {
      $this->modifyGroupResponse = $modifyGroupResponse;
      return $this;
    }

    /**
     * @return ModifyPackagesResponse
     */
    public function getModifyPackagesResponse()
    {
      return $this->modifyPackagesResponse;
    }

    /**
     * @param ModifyPackagesResponse $modifyPackagesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setModifyPackagesResponse($modifyPackagesResponse)
    {
      $this->modifyPackagesResponse = $modifyPackagesResponse;
      return $this;
    }

    /**
     * @return PrintResponse
     */
    public function getPrintResponse()
    {
      return $this->printResponse;
    }

    /**
     * @param PrintResponse $printResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setPrintResponse($printResponse)
    {
      $this->printResponse = $printResponse;
      return $this;
    }

    /**
     * @return PrintXmlResponse
     */
    public function getPrintXmlResponse()
    {
      return $this->printXmlResponse;
    }

    /**
     * @param PrintXmlResponse $printXmlResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setPrintXmlResponse($printXmlResponse)
    {
      $this->printXmlResponse = $printXmlResponse;
      return $this;
    }

    /**
     * @return RateResponse
     */
    public function getRateResponse()
    {
      return $this->rateResponse;
    }

    /**
     * @param RateResponse $rateResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setRateResponse($rateResponse)
    {
      $this->rateResponse = $rateResponse;
      return $this;
    }

    /**
     * @return ReprocessResponse
     */
    public function getReprocessResponse()
    {
      return $this->reprocessResponse;
    }

    /**
     * @param ReprocessResponse $reprocessResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setReprocessResponse($reprocessResponse)
    {
      $this->reprocessResponse = $reprocessResponse;
      return $this;
    }

    /**
     * @return SearchResponse
     */
    public function getSearchResponse()
    {
      return $this->searchResponse;
    }

    /**
     * @param SearchResponse $searchResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setSearchResponse($searchResponse)
    {
      $this->searchResponse = $searchResponse;
      return $this;
    }

    /**
     * @return ShipResponse
     */
    public function getShipResponse()
    {
      return $this->shipResponse;
    }

    /**
     * @param ShipResponse $shipResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setShipResponse($shipResponse)
    {
      $this->shipResponse = $shipResponse;
      return $this;
    }

    /**
     * @return TransmitResponse
     */
    public function getTransmitResponse()
    {
      return $this->transmitResponse;
    }

    /**
     * @param TransmitResponse $transmitResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setTransmitResponse($transmitResponse)
    {
      $this->transmitResponse = $transmitResponse;
      return $this;
    }

    /**
     * @return ValidateAddressResponse
     */
    public function getValidateAddressResponse()
    {
      return $this->validateAddressResponse;
    }

    /**
     * @param ValidateAddressResponse $validateAddressResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setValidateAddressResponse($validateAddressResponse)
    {
      $this->validateAddressResponse = $validateAddressResponse;
      return $this;
    }

    /**
     * @return VoidPackagesResponse
     */
    public function getVoidPackagesResponse()
    {
      return $this->voidPackagesResponse;
    }

    /**
     * @param VoidPackagesResponse $voidPackagesResponse
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setVoidPackagesResponse($voidPackagesResponse)
    {
      $this->voidPackagesResponse = $voidPackagesResponse;
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
     * @return \Williams\ConnectshipBundle\AMP\CompoundResult
     */
    public function setAsyncCorrelationData($asyncCorrelationData)
    {
      $this->asyncCorrelationData = $asyncCorrelationData;
      return $this;
    }

}
