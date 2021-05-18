<?php


namespace MaldoPay\SDK;


abstract class Service
{
    protected $_serrviceId;
    protected $_serviceData = array();
    protected $_type;
    protected $_codeId;

    public function __construct(int $_serrviceId, $_type, $_codeId)
    {
        if($_type != "DEPOSIT" AND $_type != "WITHDRAW")
            throw new \Exception('Only DEPOSIT or WITHDRAW type is allowed for your transaction request.');

        $this->_serrviceId = $_serrviceId;
        $this->_type = $_type;
        $this->_codeId = $_codeId;
    }


    /**
     * @return mixed
     */
    public function getCodeId()
    {
        return $this->_codeId;
    }

    /**
     * @return mixed
     */
    public function getSerrviceId()
    {
        return $this->_serrviceId;
    }

    /**
     * @return mixed
     */
    public function getServiceData()
    {
        return $this->_serviceData;
    }

    public function setServiceData1($serviceData1)
    {
        $this->_serviceData['serviceData1'] = $serviceData1;
    }

    public function setServiceData2($serviceData2)
    {
        $this->_serviceData['serviceData2'] = $serviceData2;
    }

    public function setServiceData3($serviceData3)
    {
        $this->_serviceData['serviceData3'] = $serviceData3;
    }

    public function setServiceData4($serviceData4)
    {
        $this->_serviceData['serviceData4'] = $serviceData4;
    }

    public function setServiceData5($serviceData5)
    {
        $this->_serviceData['serviceData5'] = $serviceData5;
    }

    public function setServiceData6($serviceData6)
    {
        $this->_serviceData['serviceData6'] = $serviceData6;
    }

    public function setServiceData7($serviceData7)
    {
        $this->_serviceData['serviceData7'] = $serviceData7;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }
}