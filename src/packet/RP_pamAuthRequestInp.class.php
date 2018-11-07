<?php

class RP_pamAuthRequestInp extends RODSPacket
{
  public function __construct($pamUser="", $pamPassword="", $timeToLive=-1)
  {
    // iRODS 3.3.1 does not accept negative TTL values. If a value of -1 is
    // passed to the server, it will return an invalid temporary password
    // string (in binary, rendering it invalid for the XML parser).
    // On later requests, a "PAM_AUTH_PASSWORD_INVALID_TTL" error may be
    // returned.
    if ($timeToLive === -1) {
      // The closest one can get to an infinite TTL (which I assume is meant
      // by '-1') using iRODS 3.3.1 seems to be two weeks.
      $timeToLive = 14*24;
    }
    $packlets=array("pamUser" => $pamUser, "pamPassword" => $pamPassword, "timeToLive" => $timeToLive);  
    parent::__construct("pamAuthRequestInp_PI",$packlets);
  }
}
