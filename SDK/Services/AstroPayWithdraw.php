<?php
namespace MaldoPay\SDK\Services;

class AstroPayWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2069;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 301;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}