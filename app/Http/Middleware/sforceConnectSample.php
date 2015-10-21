<?php
define("SOAP_CLIENT_BASEDIR", "../../soapclient");
require_once (SOAP_CLIENT_BASEDIR.'/SforcePartnerClient.php');
require_once (SOAP_CLIENT_BASEDIR.'/SforceHeaderOptions.php');
require_once ('../userAuth.php');

try {
  $mySforceConnection = new SforcePartnerClient();
  $mySoapClient = $mySforceConnection->createConnection(SOAP_CLIENT_BASEDIR.'/partner.wsdl.xml');
  $mylogin = $mySforceConnection->login($USERNAME, $PASSWORD);

  print_r($mySforceConnection->describeSObject('Contact'));

} catch (Exception $e) {
  echo $mySforceConnection->getLastRequest();
  echo $e->faultstring;
}

