<?php


namespace MaldoPay\SDK;


class Transaction extends Base
{
    private $_transactionRequest;
    public function __construct(TransactionRequest $transactionRequest, $sandbox = false)
    {
        parent::__construct($sandbox);
        $this->_transactionRequest = $transactionRequest;
    }

    public function Create()
    {
        $transactionResponse = $this->_sendCurl('transactions/', $this->_transactionRequest);

        if($this->_transactionRequest->getService()->getCodeId() != $transactionResponse->transaction->codeId)
            throw new \Exception('There was error with your transaction request:'.$transactionResponse->transaction->codeMessage, $transactionResponse->transaction->codeId);

        return $transactionResponse;
    }
}