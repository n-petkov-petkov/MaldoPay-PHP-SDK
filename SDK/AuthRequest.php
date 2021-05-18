<?php


namespace MaldoPay\SDK;

class AuthRequest extends MaldoPayRequest
{
    public $_auth;

    /**
     * AuthRequest constructor.
     * @param int $clientId
     * @param int $brandId
     * @param $firstName
     * @param $lastName
     * @param $ipAddr
     * @param $playerId
     * @param $phone
     * @param $emailAddress
     * @param $city
     * @param $birthDate
     * @param int $postCode
     * @param string $address
     * @param string $currencyCode
     * @param string $languageCode
     * @param string $countryCode
     */
    public function __construct(
        int $clientId,
        int $brandId,
        $firstName,
        $lastName,
        $ipAddr,
        $playerId,
        $phone,
        $emailAddress,
        $city,
        $birthDate,
        $postCode = 0,
        $address = "",
        $currencyCode = "TRY",
        $languageCode = "TR",
        $countryCode = "TR"
    )
    {

        $this->_auth['auth']['clientId'] = $clientId;
        $this->_auth['auth']['brandId'] = $brandId;
        $this->_auth['auth']['request']['firstName'] = $firstName;
        $this->_auth['auth']['request']['lastName'] = $lastName;
        $this->_auth['auth']['request']['ipAddr'] = $ipAddr;
        $this->_auth['auth']['request']['address'] = $address;
        $this->_auth['auth']['request']['playerId'] = $playerId;
        $this->_auth['auth']['request']['birthDate'] = $birthDate;
        $this->_auth['auth']['request']['city'] = $city;
        $this->_auth['auth']['request']['postCode'] = $postCode;
        $this->_auth['auth']['request']['countryCode'] = $countryCode;
        $this->_auth['auth']['request']['phone'] = $phone;
        $this->_auth['auth']['request']['emailAddress'] = $emailAddress;
        $this->_auth['auth']['request']['currencyCode'] = $currencyCode;
        $this->_auth['auth']['request']['languageCode'] = $languageCode;

        $this->_setRequest($this->_auth);
    }

    /**
     * @return mixed
     */
    public function getAuth()
    {
        return $this->_auth;
    }
}