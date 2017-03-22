<?php

namespace Williams\ConnectshipBundle\Service;

use Williams\ConnectshipBundle\AMP\AMPServices;
use Williams\ConnectshipBundle\AMP\DataDictionary;
use Williams\ConnectshipBundle\AMP\ListCarriersRequest;
use Williams\ConnectshipBundle\AMP\SearchRequest;

class ConnectshipService {

    private $client;

    public function __construct($wsdl_url) {
        $this->client = new AMPServices(array('soap_version' => SOAP_1_2), $wsdl_url);
    }

    /**
     * 
     * @param string $ucc
     * @return string
     */
    public function getTrackingNumberByUcc($ucc) {
        
        $service = $this->client;
        
        $carriersResponse = $service->ListCarriers(new ListCarriersRequest(null, null, null, null));

        foreach ($carriersResponse->getResult()->getResultData()->getItem() as $carrier) {
            $searchRequest = new SearchRequest($carrier->getSymbol(), null, null, null, null, null, null);
            $searchRequest->setFilters(array('consigneeReference' => $ucc));
            $searchResponse = $service->Search($searchRequest);
            $item = $searchResponse->getResult()->getResultData()->getItem();
            if ($item !== null && $item[0]->getResultData()->getTrackingNumber() != null) {
                return $item[0]->getResultData()->getTrackingNumber();
            }
        }
        
    }
    
    /**
     * 
     * @param string $ucc
     * @return DataDictionary[]
     */
    public function getShippingDataByUcc($ucc) {
        
        $service = $this->client;
        
        $carriersResponse = $service->ListCarriers(new ListCarriersRequest(null, null, null, null));

        foreach ($carriersResponse->getResult()->getResultData()->getItem() as $carrier) {
            $searchRequest = new SearchRequest($carrier->getSymbol(), null, null, null, null, null, null);
            $searchRequest->setFilters(array('consigneeReference' => $ucc));
            $searchResponse = $service->Search($searchRequest);
            return $searchResponse->getResult()->getResultData()->getItem();
        }
        
    }
    
    /**
     * 
     * @param string $trackingNumber
     * @return DataDictionary[]
     */
    public function getShippingDataByTrackingNumber($trackingNumber) {
        
        $service = $this->client;
        
        $carriersResponse = $service->ListCarriers(new ListCarriersRequest(null, null, null, null));

        foreach ($carriersResponse->getResult()->getResultData()->getItem() as $carrier) {
            $searchRequest = new SearchRequest($carrier->getSymbol(), null, null, null, null, null, null);
            $searchRequest->setFilters(array('trackingNumber' => $trackingNumber));
            $searchResponse = $service->Search($searchRequest);
            return $searchResponse->getResult()->getResultData()->getItem();
        }
        
    }

}
