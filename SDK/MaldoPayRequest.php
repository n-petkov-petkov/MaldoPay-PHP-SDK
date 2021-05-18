<?php


namespace MaldoPay\SDK;


abstract class MaldoPayRequest
{
    protected $_request;
    protected function _setRequest(array $requestObject)
    {
        $this->_request = $requestObject;
    }
    public function getRequest()
    {
        return $this->_request;
    }
}