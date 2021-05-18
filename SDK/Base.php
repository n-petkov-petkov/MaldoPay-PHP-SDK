<?php


namespace MaldoPay\SDK;

/**
 * This is base API class that contains basic API-connection methods.
 * @package MaldoPay\SDK
 */
abstract class Base
{
    private $_requestUrl;
    const MALDO_LIVE_URL = "https://api.maldopay.com/json/";
    const MALDO_SANDBOX_URL = "https://api.maldopay.com/json/sandbox/";

    public function __construct($sandbox = false)
    {
        if($sandbox)
            $this->_requestUrl = self::MALDO_SANDBOX_URL;
        else
            $this->_requestUrl = self::MALDO_LIVE_URL;
    }

    protected function _sendCurl($destination = '', MaldoPayRequest $request)
    {
        $curl = curl_init();

        $data = array(
            'json'=>json_encode($request->getRequest())
        );
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->_requestUrl.$destination,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response);
    }

}