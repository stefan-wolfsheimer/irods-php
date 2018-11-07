<?php

class RP_getTempPasswordForOtherOut extends RODSPacket
{
    public function __construct($stringToHashWith = '')
    {
        $packlets = array("stringToHashWith" => $stringToHashWith);
        parent::__construct("getTempPasswordForOtherOut_PI", $packlets);
    }

}
