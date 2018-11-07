<?php

class RP_authRequestOut extends RODSPacket
{
    public function __construct($challenge = "")
    {
        $packlets = array("challenge" => $challenge);
        parent::__construct("authRequestOut_PI", $packlets);
    }

}
