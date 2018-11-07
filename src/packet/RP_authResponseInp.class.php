<?php

class RP_authResponseInp extends RODSPacket
{
    public function __construct($response = "", $username = "")
    {
        $packlets = array("response" => $response, "username" => $username);
        parent::__construct("authResponseInp_PI", $packlets);
    }

}
