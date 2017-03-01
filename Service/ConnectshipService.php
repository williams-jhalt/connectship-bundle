<?php

namespace Williams\ConnectshipBundle\Service;

class ConnectshipService {

    private $client;

    public function __construct($wsdl_url) {
        $this->client = new AMPServices(array('soap_version' => SOAP_1_2), $wsdl_url);
    }

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

}