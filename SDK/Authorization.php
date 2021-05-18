<?php


namespace MaldoPay\SDK;


class Authorization extends Base
{
    private $_token;
    private $_clientId;
    private $_brandId;
    private $_ipAddr;
    private $_currencyCode;

    public function __construct(AuthRequest $authRequest, $sandbox = false)
    {
        parent::__construct($sandbox);
        $this->CreateAuthToken($authRequest);
    }

    private function CreateAuthToken(AuthRequest $authRequest)
    {
        $authResponse = $this->_sendCurl('auth/',$authRequest);
        if(isset($authResponse->transaction->codeId) AND $authResponse->transaction->codeId != 0)
            throw new \Exception('There was error in Auth Request: ' . $authResponse->transaction->codeMessage,
                $authResponse->transaction->codeId);

        $this->_token = $authResponse->response->token;
        $this->_clientId = $authRequest->getAuth()['auth']['clientId'];
        $this->_brandId = $authRequest->getAuth()['auth']['brandId'];
        $this->_ipAddr = $authRequest->getAuth()['auth']['request']['ipAddr'];
        $this->_currencyCode = $authRequest->getAuth()['auth']['request']['currencyCode'];
    }

    public function getToken()
    {
        return $this->_token;
    }

    public function getClientId()
    {
        return $this->_clientId;
    }

    public function getBrandId()
    {
        return $this->_brandId;
    }

    /**
     * @return mixed
     */
    public function getIpAddr()
    {
        return $this->_ipAddr;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->_currencyCode;
    }
}