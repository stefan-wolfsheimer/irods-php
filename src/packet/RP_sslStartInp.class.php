<?php

class RP_sslStartInp extends RODSPacket
{
  public function __construct($arg0="")
  {
    $packlets=array("arg0" => $arg0);  
    parent::__construct("sslStartInp_PI",$packlets);
  }
     
}
