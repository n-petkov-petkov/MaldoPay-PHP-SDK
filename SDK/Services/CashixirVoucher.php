<?php
namespace MaldoPay\SDK\Services;

class CashixirVoucher extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2021;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 301;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}