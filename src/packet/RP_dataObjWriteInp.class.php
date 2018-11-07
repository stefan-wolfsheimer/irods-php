<?php

class RP_dataObjWriteInp extends RODSPacket
{
    public function __construct($dataObjInx = -1, $len = 0)
    {
        $packlets = array("dataObjInx" => $dataObjInx,
            'len' => $len);
        parent::__construct("dataObjWriteInp_PI", $packlets);
    }

}
