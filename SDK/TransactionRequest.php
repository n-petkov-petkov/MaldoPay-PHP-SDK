<?php


namespace MaldoPay\SDK;


class TransactionRequest extends MaldoPayRequest
{
    private $_transaction;
    private $_service;
    /**
     * TransactionRequest constructor.
     * @param Authorization $authorization
     * @param Service $service
     * @param $integrationId
     * @param $referenceOrderId
     * @param $amount
     * @param $reason
     * @param string $landingSuccess
     * @param string $landingPending
     * @param string $landingDeclined
     * @param string $landingFailed
     * @param string $chainMode
     * @param string $bonusCode
     */
    public function __construct(Authorization $authorization, Service $service,
        $integrationId,
        $referenceOrderId,
        $amount,
        $reason,
        $landingSuccess = '',
        $landingPending = '',
        $landingDeclined = '',
        $landingFailed = '',
        $chainMode = '',
        $bonusCode = ''
    )
    {
        $this->_transaction['transaction']['clientId'] = $authorization->getClientId();
        $this->_transaction['transaction']['brandId'] = $authorization->getBrandId();
        $this->_transaction['transaction']['integrationId'] = $integrationId;
        $this->_transaction['transaction']['landingPages']['landingSuccess'] = $landingSuccess;
        $this->_transaction['transaction']['landingPages']['landingPending'] = $landingPending;
        $this->_transaction['transaction']['landingPages']['landingDeclined'] = $landingDeclined;
        $this->_transaction['transaction']['landingPages']['landingFailed'] = $landingFailed;
        $this->_transaction['transaction']['request']['serviceId'] = $service->getSerrviceId();
        $this->_transaction['transaction']['request']['currencyCode'] = $authorization->getCurrencyCode();
        $this->_transaction['transaction']['request']['type'] = $service->getType();
        $this->_transaction['transaction']['request']['token'] = $authorization->getToken();
        $this->_transaction['transaction']['request']['ipAddr'] = $authorization->getIpAddr();
        $this->_transaction['transaction']['request']['amount'] = $amount;
        $this->_transaction['transaction']['request']['reason'] = $reason;
        $this->_transaction['transaction']['request']['referenceOrderId'] = $referenceOrderId;
        $this->_transaction['transaction']['request']['chainMode'] = $chainMode;
        $this->_transaction['transaction']['request']['bonusCode'] = $bonusCode;
        $this->_transaction['transaction']['request']['bonusCode'] = $bonusCode;
        if (array_key_exists("serviceData1",$service->getServiceData()))
            $this->_transaction['transaction']['request']['serviceData']['serviceData1']
                = $service->getServiceData()['serviceData1'];
        if (array_key_exists("serviceData2",$service->getServiceData()))
            $this->_transaction['transaction']['request']['serviceData']['serviceData2']
                = $service->getServiceData()['serviceData2'];
        if (array_key_exists("serviceData3",$service->getServiceData()))
            $this->_transaction['transaction']['request']['serviceData']['serviceData3']
                = $service->getServiceData()['serviceData3'];
        if (array_key_exists("serviceData4",$service->getServiceData()))
            $this->_transaction['transaction']['request']['serviceData']['serviceData4']
                = $service->getServiceData()['serviceData4'];
        if (array_key_exists("serviceData5",$service->getServiceData()))
            $this->_transaction['transaction']['request']['serviceData']['serviceData5']
                = $service->getServiceData()['serviceData5'];
        if (array_key_exists("serviceData6",$service->getServiceData()))
            $this->_transaction['transaction']['request']['serviceData']['serviceData6']
                = $service->getServiceData()['serviceData6'];
        if (array_key_exists("serviceData7",$service->getServiceData()))
            $this->_transaction['transaction']['request']['serviceData']['serviceData7']
                = $service->getServiceData()['serviceData7'];

        $this->_service = $service;
        $this->_setRequest($this->_transaction);
    }

    /**
     * @return Service
     */
    public function getService()
    {
        return $this->_service;
    }
}