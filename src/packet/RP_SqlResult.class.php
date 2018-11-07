<?php

class RP_SqlResult extends RODSPacket
{
    public function __construct($attriInx = 0, $reslen = 0, array $value = array())
    {
        $packlets = array("attriInx" => $attriInx, 'reslen' => $reslen, 'value' => $value);
        parent::__construct("SqlResult_PI", $packlets);
    }


}
