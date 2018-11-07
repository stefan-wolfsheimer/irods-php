<?php

class RP_BinBytesBuf extends RODSPacket
{
    public function __construct($buflen = '', $buf = '')
    {
        $packlets = array("buflen" => $buflen, "buf" => $buf);
        parent::__construct("BinBytesBuf_PI", $packlets);
    }

}
