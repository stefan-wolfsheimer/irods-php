<?php

class RP_STR extends RODSPacket
{
    public function __construct($myStr = '')
    {
        $packlets = array("myStr" => $myStr);
        parent::__construct("STR_PI", $packlets);
    }

}
