<?php
namespace MaldoPay\SDK\Services;

class AliPay extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2087;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 301;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}