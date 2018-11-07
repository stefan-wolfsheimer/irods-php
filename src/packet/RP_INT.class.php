<?php

class RP_INT extends RODSPacket
{
    public function __construct($myStr = '')
    {
        $packlets = array("myStr" => $myStr);
        parent::__construct("INT_PI", $packlets);
    }

}
