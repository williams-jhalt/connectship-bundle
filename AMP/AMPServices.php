<?php

namespace Williams\ConnectshipBundle\AMP;

class AMPServices extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'Commitment' => 'Williams\\ConnectshipBundle\\AMP\\Commitment',
  'Dimensions' => 'Williams\\ConnectshipBundle\\AMP\\Dimensions',
  'Group' => 'Williams\\ConnectshipBundle\\AMP\\Group',
  'Identity' => 'Williams\\ConnectshipBundle\\AMP\\Identity',
  'Money' => 'Williams\\ConnectshipBundle\\AMP\\Money',
  'HazmatQuantity' => 'Williams\\ConnectshipBundle\\AMP\\HazmatQuantity',
  'NameAddress' => 'Williams\\ConnectshipBundle\\AMP\\NameAddress',
  'PrintArea' => 'Williams\\ConnectshipBundle\\AMP\\PrintArea',
  'ShipperInformation' => 'Williams\\ConnectshipBundle\\AMP\\ShipperInformation',
  'PrintAreaList' => 'Williams\\ConnectshipBundle\\AMP\\PrintAreaList',
  'StockDescriptor' => 'Williams\\ConnectshipBundle\\AMP\\StockDescriptor',
  'Volume' => 'Williams\\ConnectshipBundle\\AMP\\Volume',
  'Weight' => 'Williams\\ConnectshipBundle\\AMP\\Weight',
  'Holiday' => 'Williams\\ConnectshipBundle\\AMP\\Holiday',
  'CollectionBase' => 'Williams\\ConnectshipBundle\\AMP\\CollectionBase',
  'List' => 'Williams\\ConnectshipBundle\\AMP\\ListCustom',
  'DictionaryItem' => 'Williams\\ConnectshipBundle\\AMP\\DictionaryItem',
  'Dictionary' => 'Williams\\ConnectshipBundle\\AMP\\Dictionary',
  'StringList' => 'Williams\\ConnectshipBundle\\AMP\\StringList',
  'IntegerList' => 'Williams\\ConnectshipBundle\\AMP\\IntegerList',
  'IdentityList' => 'Williams\\ConnectshipBundle\\AMP\\IdentityList',
  'DataDictionaryList' => 'Williams\\ConnectshipBundle\\AMP\\DataDictionaryList',
  'Commodity' => 'Williams\\ConnectshipBundle\\AMP\\Commodity',
  'CommodityList' => 'Williams\\ConnectshipBundle\\AMP\\CommodityList',
  'HazmatItem' => 'Williams\\ConnectshipBundle\\AMP\\HazmatItem',
  'HazmatItemList' => 'Williams\\ConnectshipBundle\\AMP\\HazmatItemList',
  'AlcoholItem' => 'Williams\\ConnectshipBundle\\AMP\\AlcoholItem',
  'AlcoholItemList' => 'Williams\\ConnectshipBundle\\AMP\\AlcoholItemList',
  'DataDictionary' => 'Williams\\ConnectshipBundle\\AMP\\DataDictionary',
  'Result' => 'Williams\\ConnectshipBundle\\AMP\\Result',
  'IdentityListResult' => 'Williams\\ConnectshipBundle\\AMP\\IdentityListResult',
  'GroupResult' => 'Williams\\ConnectshipBundle\\AMP\\GroupResult',
  'ShipperResult' => 'Williams\\ConnectshipBundle\\AMP\\ShipperResult',
  'StringResult' => 'Williams\\ConnectshipBundle\\AMP\\StringResult',
  'BooleanResult' => 'Williams\\ConnectshipBundle\\AMP\\BooleanResult',
  'IdentityResult' => 'Williams\\ConnectshipBundle\\AMP\\IdentityResult',
  'DictionaryResult' => 'Williams\\ConnectshipBundle\\AMP\\DictionaryResult',
  'PackageResult' => 'Williams\\ConnectshipBundle\\AMP\\PackageResult',
  'PackageResultList' => 'Williams\\ConnectshipBundle\\AMP\\PackageResultList',
  'ProcessResult' => 'Williams\\ConnectshipBundle\\AMP\\ProcessResult',
  'ProcessResultList' => 'Williams\\ConnectshipBundle\\AMP\\ProcessResultList',
  'RateResult' => 'Williams\\ConnectshipBundle\\AMP\\RateResult',
  'ImageItemList' => 'Williams\\ConnectshipBundle\\AMP\\ImageItemList',
  'OutputItemList' => 'Williams\\ConnectshipBundle\\AMP\\OutputItemList',
  'DocumentOutput' => 'Williams\\ConnectshipBundle\\AMP\\DocumentOutput',
  'PrintItem' => 'Williams\\ConnectshipBundle\\AMP\\PrintItem',
  'DocumentResult' => 'Williams\\ConnectshipBundle\\AMP\\DocumentResult',
  'DocumentResultList' => 'Williams\\ConnectshipBundle\\AMP\\DocumentResultList',
  'PrintResult' => 'Williams\\ConnectshipBundle\\AMP\\PrintResult',
  'VoidPackageResult' => 'Williams\\ConnectshipBundle\\AMP\\VoidPackageResult',
  'VoidPackageResultList' => 'Williams\\ConnectshipBundle\\AMP\\VoidPackageResultList',
  'VoidResult' => 'Williams\\ConnectshipBundle\\AMP\\VoidResult',
  'SearchPackageResult' => 'Williams\\ConnectshipBundle\\AMP\\SearchPackageResult',
  'SearchPackageResultList' => 'Williams\\ConnectshipBundle\\AMP\\SearchPackageResultList',
  'SearchResult' => 'Williams\\ConnectshipBundle\\AMP\\SearchResult',
  'ShipFile' => 'Williams\\ConnectshipBundle\\AMP\\ShipFile',
  'TransmitItem' => 'Williams\\ConnectshipBundle\\AMP\\TransmitItem',
  'TransmitItemList' => 'Williams\\ConnectshipBundle\\AMP\\TransmitItemList',
  'CloseOutResult' => 'Williams\\ConnectshipBundle\\AMP\\CloseOutResult',
  'TransmitItemResult' => 'Williams\\ConnectshipBundle\\AMP\\TransmitItemResult',
  'TransmitItemResultList' => 'Williams\\ConnectshipBundle\\AMP\\TransmitItemResultList',
  'TransmitResult' => 'Williams\\ConnectshipBundle\\AMP\\TransmitResult',
  'ModifyPackageResult' => 'Williams\\ConnectshipBundle\\AMP\\ModifyPackageResult',
  'ModifyPackageResultList' => 'Williams\\ConnectshipBundle\\AMP\\ModifyPackageResultList',
  'ModifyPackagesResult' => 'Williams\\ConnectshipBundle\\AMP\\ModifyPackagesResult',
  'CandidateAddress' => 'Williams\\ConnectshipBundle\\AMP\\CandidateAddress',
  'CandidateAddressList' => 'Williams\\ConnectshipBundle\\AMP\\CandidateAddressList',
  'ValidateResult' => 'Williams\\ConnectshipBundle\\AMP\\ValidateResult',
  'StockDescriptorList' => 'Williams\\ConnectshipBundle\\AMP\\StockDescriptorList',
  'ListStocksResult' => 'Williams\\ConnectshipBundle\\AMP\\ListStocksResult',
  'GroupList' => 'Williams\\ConnectshipBundle\\AMP\\GroupList',
  'ListGroupsResult' => 'Williams\\ConnectshipBundle\\AMP\\ListGroupsResult',
  'ListTransmitItemsResult' => 'Williams\\ConnectshipBundle\\AMP\\ListTransmitItemsResult',
  'ShipFileList' => 'Williams\\ConnectshipBundle\\AMP\\ShipFileList',
  'ListShipFilesResult' => 'Williams\\ConnectshipBundle\\AMP\\ListShipFilesResult',
  'StringListResult' => 'Williams\\ConnectshipBundle\\AMP\\StringListResult',
  'HolidayItem' => 'Williams\\ConnectshipBundle\\AMP\\HolidayItem',
  'HolidayDictionary' => 'Williams\\ConnectshipBundle\\AMP\\HolidayDictionary',
  'HolidayList' => 'Williams\\ConnectshipBundle\\AMP\\HolidayList',
  'ListHolidaysResult' => 'Williams\\ConnectshipBundle\\AMP\\ListHolidaysResult',
  'CloseOutRequest' => 'Williams\\ConnectshipBundle\\AMP\\CloseOutRequest',
  'CloseOutResponse' => 'Williams\\ConnectshipBundle\\AMP\\CloseOutResponse',
  'CreateGroupRequest' => 'Williams\\ConnectshipBundle\\AMP\\CreateGroupRequest',
  'CreateGroupResponse' => 'Williams\\ConnectshipBundle\\AMP\\CreateGroupResponse',
  'CustomOperationRequest' => 'Williams\\ConnectshipBundle\\AMP\\CustomOperationRequest',
  'CustomOperationResponse' => 'Williams\\ConnectshipBundle\\AMP\\CustomOperationResponse',
  'DeleteShipFilesRequest' => 'Williams\\ConnectshipBundle\\AMP\\DeleteShipFilesRequest',
  'DeleteShipFilesResponse' => 'Williams\\ConnectshipBundle\\AMP\\DeleteShipFilesResponse',
  'DeleteTransmitItemsRequest' => 'Williams\\ConnectshipBundle\\AMP\\DeleteTransmitItemsRequest',
  'DeleteTransmitItemsResponse' => 'Williams\\ConnectshipBundle\\AMP\\DeleteTransmitItemsResponse',
  'GetGroupRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetGroupRequest',
  'GetGroupResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetGroupResponse',
  'GetSchemaRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetSchemaRequest',
  'GetSchemaResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetSchemaResponse',
  'GetShipperInformationRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperInformationRequest',
  'GetShipperInformationResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperInformationResponse',
  'ListCarriersRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListCarriersRequest',
  'ListCarriersResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListCarriersResponse',
  'ListCloseOutItemsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListCloseOutItemsRequest',
  'ListCloseOutItemsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListCloseOutItemsResponse',
  'ListCountriesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListCountriesRequest',
  'ListCountriesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListCountriesResponse',
  'ListCountryServicesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListCountryServicesRequest',
  'ListCountryServicesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListCountryServicesResponse',
  'ListCurrenciesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListCurrenciesRequest',
  'ListCurrenciesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListCurrenciesResponse',
  'ListDocumentFormatsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListDocumentFormatsRequest',
  'ListDocumentFormatsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListDocumentFormatsResponse',
  'ListDocumentsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListDocumentsRequest',
  'ListDocumentsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListDocumentsResponse',
  'ListGroupingsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListGroupingsRequest',
  'ListGroupingsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListGroupingsResponse',
  'ListGroupsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListGroupsRequest',
  'ListGroupsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListGroupsResponse',
  'ListIncotermsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListIncotermsRequest',
  'ListIncotermsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListIncotermsResponse',
  'ListLocalPortsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListLocalPortsRequest',
  'ListLocalPortsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListLocalPortsResponse',
  'ListPackagingTypesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListPackagingTypesRequest',
  'ListPackagingTypesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListPackagingTypesResponse',
  'ListPaymentTypesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListPaymentTypesRequest',
  'ListPaymentTypesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListPaymentTypesResponse',
  'ListPrinterDevicesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListPrinterDevicesRequest',
  'ListPrinterDevicesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListPrinterDevicesResponse',
  'ListServicesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListServicesRequest',
  'ListServicesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListServicesResponse',
  'ListShipFilesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListShipFilesRequest',
  'ListShipFilesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListShipFilesResponse',
  'ListShippersRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListShippersRequest',
  'ListShippersResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListShippersResponse',
  'ListStocksRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListStocksRequest',
  'ListStocksResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListStocksResponse',
  'ListTransmitItemsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListTransmitItemsRequest',
  'ListTransmitItemsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListTransmitItemsResponse',
  'ListUnitsRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListUnitsRequest',
  'ListUnitsResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListUnitsResponse',
  'ListWindowsPrintersRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListWindowsPrintersRequest',
  'ListWindowsPrintersResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListWindowsPrintersResponse',
  'ModifyContainerRequest' => 'Williams\\ConnectshipBundle\\AMP\\ModifyContainerRequest',
  'ModifyContainerResponse' => 'Williams\\ConnectshipBundle\\AMP\\ModifyContainerResponse',
  'ModifyGroupRequest' => 'Williams\\ConnectshipBundle\\AMP\\ModifyGroupRequest',
  'ModifyGroupResponse' => 'Williams\\ConnectshipBundle\\AMP\\ModifyGroupResponse',
  'ModifyPackagesRequest' => 'Williams\\ConnectshipBundle\\AMP\\ModifyPackagesRequest',
  'ModifyPackagesResponse' => 'Williams\\ConnectshipBundle\\AMP\\ModifyPackagesResponse',
  'PrintItemList' => 'Williams\\ConnectshipBundle\\AMP\\PrintItemList',
  'PrintRequest' => 'Williams\\ConnectshipBundle\\AMP\\PrintRequest',
  'PrintResponse' => 'Williams\\ConnectshipBundle\\AMP\\PrintResponse',
  'PrintXmlRequest' => 'Williams\\ConnectshipBundle\\AMP\\PrintXmlRequest',
  'PrintXmlResponse' => 'Williams\\ConnectshipBundle\\AMP\\PrintXmlResponse',
  'ServiceList' => 'Williams\\ConnectshipBundle\\AMP\\ServiceList',
  'RateRequest' => 'Williams\\ConnectshipBundle\\AMP\\RateRequest',
  'RateResponse' => 'Williams\\ConnectshipBundle\\AMP\\RateResponse',
  'ReprocessRequest' => 'Williams\\ConnectshipBundle\\AMP\\ReprocessRequest',
  'ReprocessResponse' => 'Williams\\ConnectshipBundle\\AMP\\ReprocessResponse',
  'SearchRequest' => 'Williams\\ConnectshipBundle\\AMP\\SearchRequest',
  'SearchResponse' => 'Williams\\ConnectshipBundle\\AMP\\SearchResponse',
  'ShipRequest' => 'Williams\\ConnectshipBundle\\AMP\\ShipRequest',
  'ShipResponse' => 'Williams\\ConnectshipBundle\\AMP\\ShipResponse',
  'TransmitRequest' => 'Williams\\ConnectshipBundle\\AMP\\TransmitRequest',
  'TransmitResponse' => 'Williams\\ConnectshipBundle\\AMP\\TransmitResponse',
  'ValidateAddressRequest' => 'Williams\\ConnectshipBundle\\AMP\\ValidateAddressRequest',
  'ValidateAddressResponse' => 'Williams\\ConnectshipBundle\\AMP\\ValidateAddressResponse',
  'VoidPackagesRequest' => 'Williams\\ConnectshipBundle\\AMP\\VoidPackagesRequest',
  'VoidPackagesResponse' => 'Williams\\ConnectshipBundle\\AMP\\VoidPackagesResponse',
  'ErrorResponse' => 'Williams\\ConnectshipBundle\\AMP\\ErrorResponse',
  'CompoundOperation' => 'Williams\\ConnectshipBundle\\AMP\\CompoundOperation',
  'CompoundResult' => 'Williams\\ConnectshipBundle\\AMP\\CompoundResult',
  'AddHolidayRequest' => 'Williams\\ConnectshipBundle\\AMP\\AddHolidayRequest',
  'AddHolidayResponse' => 'Williams\\ConnectshipBundle\\AMP\\AddHolidayResponse',
  'AddShipperRequest' => 'Williams\\ConnectshipBundle\\AMP\\AddShipperRequest',
  'AddShipperResponse' => 'Williams\\ConnectshipBundle\\AMP\\AddShipperResponse',
  'DeleteHolidayRequest' => 'Williams\\ConnectshipBundle\\AMP\\DeleteHolidayRequest',
  'DeleteHolidayResponse' => 'Williams\\ConnectshipBundle\\AMP\\DeleteHolidayResponse',
  'DeleteShipperRequest' => 'Williams\\ConnectshipBundle\\AMP\\DeleteShipperRequest',
  'DeleteShipperResponse' => 'Williams\\ConnectshipBundle\\AMP\\DeleteShipperResponse',
  'ExecuteHookRequest' => 'Williams\\ConnectshipBundle\\AMP\\ExecuteHookRequest',
  'ExecuteHookResponse' => 'Williams\\ConnectshipBundle\\AMP\\ExecuteHookResponse',
  'GetCategoryPropertyRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetCategoryPropertyRequest',
  'GetCategoryPropertyResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetCategoryPropertyResponse',
  'GetCategoryShipperErrorStatusRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetCategoryShipperErrorStatusRequest',
  'GetCategoryShipperErrorStatusResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetCategoryShipperErrorStatusResponse',
  'GetComponentConfigurationAssemblyRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetComponentConfigurationAssemblyRequest',
  'GetComponentConfigurationAssemblyResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetComponentConfigurationAssemblyResponse',
  'GetHolidaysRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetHolidaysRequest',
  'GetHolidaysResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetHolidaysResponse',
  'GetHooksSchemaRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetHooksSchemaRequest',
  'GetHooksSchemaResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetHooksSchemaResponse',
  'GetServerErrorStatusRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetServerErrorStatusRequest',
  'GetServerErrorStatusResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetServerErrorStatusResponse',
  'GetShipperConfigDataRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperConfigDataRequest',
  'GetShipperConfigDataResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperConfigDataResponse',
  'GetShipperConfigSchemaRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperConfigSchemaRequest',
  'GetShipperConfigSchemaResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperConfigSchemaResponse',
  'GetShipperControlDataRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperControlDataRequest',
  'GetShipperControlDataResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperControlDataResponse',
  'GetShipperControlSchemaRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperControlSchemaRequest',
  'GetShipperControlSchemaResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperControlSchemaResponse',
  'GetShipperErrorStatusRequest' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperErrorStatusRequest',
  'GetShipperErrorStatusResponse' => 'Williams\\ConnectshipBundle\\AMP\\GetShipperErrorStatusResponse',
  'ListServersRequest' => 'Williams\\ConnectshipBundle\\AMP\\ListServersRequest',
  'ListServersResponse' => 'Williams\\ConnectshipBundle\\AMP\\ListServersResponse',
  'RegisterShipperRequest' => 'Williams\\ConnectshipBundle\\AMP\\RegisterShipperRequest',
  'RegisterShipperResponse' => 'Williams\\ConnectshipBundle\\AMP\\RegisterShipperResponse',
  'SetShipperAbbreviationRequest' => 'Williams\\ConnectshipBundle\\AMP\\SetShipperAbbreviationRequest',
  'SetShipperAbbreviationResponse' => 'Williams\\ConnectshipBundle\\AMP\\SetShipperAbbreviationResponse',
  'SetShipperConfigInfoRequest' => 'Williams\\ConnectshipBundle\\AMP\\SetShipperConfigInfoRequest',
  'SetShipperConfigInfoResponse' => 'Williams\\ConnectshipBundle\\AMP\\SetShipperConfigInfoResponse',
  'SetShipperControlInfoRequest' => 'Williams\\ConnectshipBundle\\AMP\\SetShipperControlInfoRequest',
  'SetShipperControlInfoResponse' => 'Williams\\ConnectshipBundle\\AMP\\SetShipperControlInfoResponse',
  'SetShipperNameAddressRequest' => 'Williams\\ConnectshipBundle\\AMP\\SetShipperNameAddressRequest',
  'SetShipperNameAddressResponse' => 'Williams\\ConnectshipBundle\\AMP\\SetShipperNameAddressResponse',
  'UnRegisterShipperRequest' => 'Williams\\ConnectshipBundle\\AMP\\UnRegisterShipperRequest',
  'UnRegisterShipperResponse' => 'Williams\\ConnectshipBundle\\AMP\\UnRegisterShipperResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://wt-cs/amp/wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Closes out a group of shipped packages.
     *
     * @param CloseOutRequest $body
     * @return void
     */
    public function CloseOut(CloseOutRequest $body)
    {
      return $this->__soapCall('CloseOut', array($body));
    }

    /**
     * Creates a new group using the specified data.
     *
     * @param CreateGroupRequest $body
     * @return void
     */
    public function CreateGroup(CreateGroupRequest $body)
    {
      return $this->__soapCall('CreateGroup', array($body));
    }

    /**
     * Performs a custom operation using the specified data.
     *
     * @param CustomOperationRequest $body
     * @return void
     */
    public function CustomOperation(CustomOperationRequest $body)
    {
      return $this->__soapCall('CustomOperation', array($body));
    }

    /**
     * Deletes a list of ship file items.
     *
     * @param DeleteShipFilesRequest $body
     * @return void
     */
    public function DeleteShipFiles(DeleteShipFilesRequest $body)
    {
      return $this->__soapCall('DeleteShipFiles', array($body));
    }

    /**
     * Deletes a list of transmit items.
     *
     * @param DeleteTransmitItemsRequest $body
     * @return void
     */
    public function DeleteTransmitItems(DeleteTransmitItemsRequest $body)
    {
      return $this->__soapCall('DeleteTransmitItems', array($body));
    }

    /**
     * Gets the detailed information about a group.
     *
     * @param GetGroupRequest $body
     * @return void
     */
    public function GetGroup(GetGroupRequest $body)
    {
      return $this->__soapCall('GetGroup', array($body));
    }

    /**
     * Gets the current AMP message XML schema.
     *
     * @param GetSchemaRequest $body
     * @return void
     */
    public function GetSchema(GetSchemaRequest $body)
    {
      return $this->__soapCall('GetSchema', array($body));
    }

    /**
     * Gets the detailed information about a shipper.
     *
     * @param GetShipperInformationRequest $body
     * @return void
     */
    public function GetShipperInformation(GetShipperInformationRequest $body)
    {
      return $this->__soapCall('GetShipperInformation', array($body));
    }

    /**
     * Gets the list of available carriers.
     *
     * @param ListCarriersRequest $body
     * @return void
     */
    public function ListCarriers(ListCarriersRequest $body)
    {
      return $this->__soapCall('ListCarriers', array($body));
    }

    /**
     * Gets the list of available close out items.
     *
     * @param ListCloseOutItemsRequest $body
     * @return void
     */
    public function ListCloseOutItems(ListCloseOutItemsRequest $body)
    {
      return $this->__soapCall('ListCloseOutItems', array($body));
    }

    /**
     * Gets the list of available countries.
     *
     * @param ListCountriesRequest $body
     * @return void
     */
    public function ListCountries(ListCountriesRequest $body)
    {
      return $this->__soapCall('ListCountries', array($body));
    }

    /**
     * Gets the list of services for a country.
     *
     * @param ListCountryServicesRequest $body
     * @return void
     */
    public function ListCountryServices(ListCountryServicesRequest $body)
    {
      return $this->__soapCall('ListCountryServices', array($body));
    }

    /**
     * Gets the list of available currencies.
     *
     * @param ListCurrenciesRequest $body
     * @return void
     */
    public function ListCurrencies(ListCurrenciesRequest $body)
    {
      return $this->__soapCall('ListCurrencies', array($body));
    }

    /**
     * Gets the list of available documents.
     *
     * @param ListDocumentsRequest $body
     * @return void
     */
    public function ListDocuments(ListDocumentsRequest $body)
    {
      return $this->__soapCall('ListDocuments', array($body));
    }

    /**
     * Gets the list of available formats for a document.
     *
     * @param ListDocumentFormatsRequest $body
     * @return void
     */
    public function ListDocumentFormats(ListDocumentFormatsRequest $body)
    {
      return $this->__soapCall('ListDocumentFormats', array($body));
    }

    /**
     * Gets the list of supported groupings for a carrier.
     *
     * @param ListGroupingsRequest $body
     * @return void
     */
    public function ListGroupings(ListGroupingsRequest $body)
    {
      return $this->__soapCall('ListGroupings', array($body));
    }

    /**
     * Gets the list of available groups for a grouping.
     *
     * @param ListGroupsRequest $body
     * @return void
     */
    public function ListGroups(ListGroupsRequest $body)
    {
      return $this->__soapCall('ListGroups', array($body));
    }

    /**
     * Gets the list of available Incoterms.
     *
     * @param ListIncotermsRequest $body
     * @return void
     */
    public function ListIncoterms(ListIncotermsRequest $body)
    {
      return $this->__soapCall('ListIncoterms', array($body));
    }

    /**
     * Gets the list of local printer ports.
     *
     * @param ListLocalPortsRequest $body
     * @return void
     */
    public function ListLocalPorts(ListLocalPortsRequest $body)
    {
      return $this->__soapCall('ListLocalPorts', array($body));
    }

    /**
     * Gets the list of available packaging types.
     *
     * @param ListPackagingTypesRequest $body
     * @return void
     */
    public function ListPackagingTypes(ListPackagingTypesRequest $body)
    {
      return $this->__soapCall('ListPackagingTypes', array($body));
    }

    /**
     * Gets the list of available payment types.
     *
     * @param ListPaymentTypesRequest $body
     * @return void
     */
    public function ListPaymentTypes(ListPaymentTypesRequest $body)
    {
      return $this->__soapCall('ListPaymentTypes', array($body));
    }

    /**
     * Gets the list of available printer devices.
     *
     * @param ListPrinterDevicesRequest $body
     * @return void
     */
    public function ListPrinterDevices(ListPrinterDevicesRequest $body)
    {
      return $this->__soapCall('ListPrinterDevices', array($body));
    }

    /**
     * Gets the list of available carrier services.
     *
     * @param ListServicesRequest $body
     * @return void
     */
    public function ListServices(ListServicesRequest $body)
    {
      return $this->__soapCall('ListServices', array($body));
    }

    /**
     * Gets the list of available ship file items for a carrier and shipper.
     *
     * @param ListShipFilesRequest $body
     * @return void
     */
    public function ListShipFiles(ListShipFilesRequest $body)
    {
      return $this->__soapCall('ListShipFiles', array($body));
    }

    /**
     * Gets the list of available shippers.
     *
     * @param ListShippersRequest $body
     * @return void
     */
    public function ListShippers(ListShippersRequest $body)
    {
      return $this->__soapCall('ListShippers', array($body));
    }

    /**
     * Gets the list of available printer stocks.
     *
     * @param ListStocksRequest $body
     * @return void
     */
    public function ListStocks(ListStocksRequest $body)
    {
      return $this->__soapCall('ListStocks', array($body));
    }

    /**
     * Gets the list of available transmit items for a carrier and shipper.
     *
     * @param ListTransmitItemsRequest $body
     * @return void
     */
    public function ListTransmitItems(ListTransmitItemsRequest $body)
    {
      return $this->__soapCall('ListTransmitItems', array($body));
    }

    /**
     * Gets the list of available units of measurement.
     *
     * @param ListUnitsRequest $body
     * @return void
     */
    public function ListUnits(ListUnitsRequest $body)
    {
      return $this->__soapCall('ListUnits', array($body));
    }

    /**
     * Gets the list of printers configured through Windows.
     *
     * @param ListWindowsPrintersRequest $body
     * @return void
     */
    public function ListWindowsPrinters(ListWindowsPrintersRequest $body)
    {
      return $this->__soapCall('ListWindowsPrinters', array($body));
    }

    /**
     * Modifies data for a previously saved container.
     *
     * @param ModifyContainerRequest $body
     * @return void
     */
    public function ModifyContainer(ModifyContainerRequest $body)
    {
      return $this->__soapCall('ModifyContainer', array($body));
    }

    /**
     * Modifies data and/or status for a group
     *
     * @param ModifyGroupRequest $body
     * @return void
     */
    public function ModifyGroup(ModifyGroupRequest $body)
    {
      return $this->__soapCall('ModifyGroup', array($body));
    }

    /**
     * Modifies data and/or close out mode for a list of packages.
     *
     * @param ModifyPackagesRequest $body
     * @return void
     */
    public function ModifyPackages(ModifyPackagesRequest $body)
    {
      return $this->__soapCall('ModifyPackages', array($body));
    }

    /**
     * Prints or saves a document.
     *
     * @param PrintRequest $body
     * @return void
     */
    public function aPrint(PrintRequest $body)
    {
      return $this->__soapCall('Print', array($body));
    }

    /**
     * Prints or saves a document from its XML representation.
     *
     * @param PrintXmlRequest $body
     * @return void
     */
    public function PrintXml(PrintXmlRequest $body)
    {
      return $this->__soapCall('PrintXml', array($body));
    }

    /**
     * Rates a list of packages using the specified services.
     *
     * @param RateRequest $body
     * @return void
     */
    public function Rate(RateRequest $body)
    {
      return $this->__soapCall('Rate', array($body));
    }

    /**
     * Reprocesses a list of already shipped packages.
     *
     * @param ReprocessRequest $body
     * @return void
     */
    public function Reprocess(ReprocessRequest $body)
    {
      return $this->__soapCall('Reprocess', array($body));
    }

    /**
     * Searches for packages based on the specified criteria
     *
     * @param SearchRequest $body
     * @return void
     */
    public function Search(SearchRequest $body)
    {
      return $this->__soapCall('Search', array($body));
    }

    /**
     * Ships a list of packages using the specified service.
     *
     * @param ShipRequest $body
     * @return void
     */
    public function Ship(ShipRequest $body)
    {
      return $this->__soapCall('Ship', array($body));
    }

    /**
     * Transmits or offloads a list of transmit items.
     *
     * @param TransmitRequest $body
     * @return void
     */
    public function Transmit(TransmitRequest $body)
    {
      return $this->__soapCall('Transmit', array($body));
    }

    /**
     * Validates the specified address.
     *
     * @param ValidateAddressRequest $body
     * @return void
     */
    public function ValidateAddress(ValidateAddressRequest $body)
    {
      return $this->__soapCall('ValidateAddress', array($body));
    }

    /**
     * Voids a list of shipped packages.
     *
     * @param VoidPackagesRequest $body
     * @return void
     */
    public function VoidPackages(VoidPackagesRequest $body)
    {
      return $this->__soapCall('VoidPackages', array($body));
    }

    /**
     * Executes a list of operations in a single request.
     *
     * @param CompoundOperation $body
     * @return void
     */
    public function Compound(CompoundOperation $body)
    {
      return $this->__soapCall('Compound', array($body));
    }

    /**
     * Adds holiday
     *
     * @param AddHolidayRequest $body
     * @return void
     */
    public function AddHoliday(AddHolidayRequest $body)
    {
      return $this->__soapCall('AddHoliday', array($body));
    }

    /**
     * Adds a shipper
     *
     * @param AddShipperRequest $body
     * @return void
     */
    public function AddShipper(AddShipperRequest $body)
    {
      return $this->__soapCall('AddShipper', array($body));
    }

    /**
     * Deletes holiday
     *
     * @param DeleteHolidayRequest $body
     * @return void
     */
    public function DeleteHoliday(DeleteHolidayRequest $body)
    {
      return $this->__soapCall('DeleteHoliday', array($body));
    }

    /**
     * Deletes a shipper
     *
     * @param DeleteShipperRequest $body
     * @return void
     */
    public function DeleteShipper(DeleteShipperRequest $body)
    {
      return $this->__soapCall('DeleteShipper', array($body));
    }

    /**
     * Executes a hook
     *
     * @param ExecuteHookRequest $body
     * @return void
     */
    public function ExecuteHook(ExecuteHookRequest $body)
    {
      return $this->__soapCall('ExecuteHook', array($body));
    }

    /**
     * Gets category property
     *
     * @param GetCategoryPropertyRequest $body
     * @return void
     */
    public function GetCategoryProperty(GetCategoryPropertyRequest $body)
    {
      return $this->__soapCall('GetCategoryProperty', array($body));
    }

    /**
     * Gets category shipper error status
     *
     * @param GetCategoryShipperErrorStatusRequest $body
     * @return void
     */
    public function GetCategoryShipperErrorStatus(GetCategoryShipperErrorStatusRequest $body)
    {
      return $this->__soapCall('GetCategoryShipperErrorStatus', array($body));
    }

    /**
     * Gets Progistics Management Console component configuration assembly (for internal use only)
     *
     * @param GetComponentConfigurationAssemblyRequest $body
     * @return void
     */
    public function GetComponentConfigurationAssembly(GetComponentConfigurationAssemblyRequest $body)
    {
      return $this->__soapCall('GetComponentConfigurationAssembly', array($body));
    }

    /**
     * Gets holidays
     *
     * @param GetHolidaysRequest $body
     * @return void
     */
    public function GetHolidays(GetHolidaysRequest $body)
    {
      return $this->__soapCall('GetHolidays', array($body));
    }

    /**
     * Gets hooks schema
     *
     * @param GetHooksSchemaRequest $body
     * @return void
     */
    public function GetHooksSchema(GetHooksSchemaRequest $body)
    {
      return $this->__soapCall('GetHooksSchema', array($body));
    }

    /**
     * Gets Server Error Status
     *
     * @param GetServerErrorStatusRequest $body
     * @return void
     */
    public function GetServerErrorStatus(GetServerErrorStatusRequest $body)
    {
      return $this->__soapCall('GetServerErrorStatus', array($body));
    }

    /**
     * Gets shipper configuration data
     *
     * @param GetShipperConfigDataRequest $body
     * @return void
     */
    public function GetShipperConfigData(GetShipperConfigDataRequest $body)
    {
      return $this->__soapCall('GetShipperConfigData', array($body));
    }

    /**
     * Gets shipper configuration schema
     *
     * @param GetShipperConfigSchemaRequest $body
     * @return void
     */
    public function GetShipperConfigSchema(GetShipperConfigSchemaRequest $body)
    {
      return $this->__soapCall('GetShipperConfigSchema', array($body));
    }

    /**
     * Gets shipper control data
     *
     * @param GetShipperControlDataRequest $body
     * @return void
     */
    public function GetShipperControlData(GetShipperControlDataRequest $body)
    {
      return $this->__soapCall('GetShipperControlData', array($body));
    }

    /**
     * Gets shipper control schema
     *
     * @param GetShipperControlSchemaRequest $body
     * @return void
     */
    public function GetShipperControlSchema(GetShipperControlSchemaRequest $body)
    {
      return $this->__soapCall('GetShipperControlSchema', array($body));
    }

    /**
     * Gets shipper error status
     *
     * @param GetShipperErrorStatusRequest $body
     * @return void
     */
    public function GetShipperErrorStatus(GetShipperErrorStatusRequest $body)
    {
      return $this->__soapCall('GetShipperErrorStatus', array($body));
    }

    /**
     * Lists Servers
     *
     * @param ListServersRequest $body
     * @return void
     */
    public function ListServers(ListServersRequest $body)
    {
      return $this->__soapCall('ListServers', array($body));
    }

    /**
     * Registers a shipper
     *
     * @param RegisterShipperRequest $body
     * @return void
     */
    public function RegisterShipper(RegisterShipperRequest $body)
    {
      return $this->__soapCall('RegisterShipper', array($body));
    }

    /**
     * Sets shipper abbreviation
     *
     * @param SetShipperAbbreviationRequest $body
     * @return void
     */
    public function SetShipperAbbreviation(SetShipperAbbreviationRequest $body)
    {
      return $this->__soapCall('SetShipperAbbreviation', array($body));
    }

    /**
     * Sets shipper configuration information
     *
     * @param SetShipperConfigInfoRequest $body
     * @return void
     */
    public function SetShipperConfigInfo(SetShipperConfigInfoRequest $body)
    {
      return $this->__soapCall('SetShipperConfigInfo', array($body));
    }

    /**
     * Sets shipper control information
     *
     * @param SetShipperControlInfoRequest $body
     * @return void
     */
    public function SetShipperControlInfo(SetShipperControlInfoRequest $body)
    {
      return $this->__soapCall('SetShipperControlInfo', array($body));
    }

    /**
     * Sest shipper name/address
     *
     * @param SetShipperNameAddressRequest $body
     * @return void
     */
    public function SetShipperNameAddress(SetShipperNameAddressRequest $body)
    {
      return $this->__soapCall('SetShipperNameAddress', array($body));
    }

    /**
     * Unregisters a shipper
     *
     * @param UnRegisterShipperRequest $body
     * @return void
     */
    public function UnRegisterShipper(UnRegisterShipperRequest $body)
    {
      return $this->__soapCall('UnRegisterShipper', array($body));
    }

}
