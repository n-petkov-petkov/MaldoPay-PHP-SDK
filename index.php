<?php
require_once './SDK/Loader.php';

$authRequest = new \MaldoPay\SDK\AuthRequest(
    81433,
    15,
    "Ivan",
    "Ivanov",
    "127.0.0.1",
    1235,
    345435345322,
    "test@abv.bg",
    "Etropole",
    "1980-01-01",
    100,
    "Test"
);

$Autohrization = new \MaldoPay\SDK\Authorization($authRequest);

$cepBankService = new \MaldoPay\SDK\Services\Cepbank();
$cepBankService->setServiceData1("2104144157120047");
$cepBankService->setServiceData2("5");

$transactionRequest = new \MaldoPay\SDK\TransactionRequest(
    $Autohrization,
    $cepBankService,
    12980,
    'cep_bank_live_111511',
    50,
    "test",
    "test.bg",
    "test.bg",
    "test.bg",
    "test.bg"
);


$transaction = new \MaldoPay\SDK\Transaction($transactionRequest);
var_dump($transaction->Create());
