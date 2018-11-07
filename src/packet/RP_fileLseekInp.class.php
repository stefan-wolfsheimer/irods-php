<?php

class RP_fileLseekInp extends RODSPacket
{
    public function __construct($fileInx = -1, $offset = 0, $whence = 0)
    {
        $packlets = array("fileInx" => $fileInx, "offset" => $offset,
            'whence' => $whence);
        parent::__construct("fileLseekInp_PI", $packlets);
    }

}
