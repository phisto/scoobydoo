<?php

ini_set('soap.wsdl_cache_enabled', '0'); 
ini_set('soap.wsdl_cache_ttl', '0');

$MADMIN = @new SoapClient($CONF['soap_url'].'/MADMIN.class.php?wsdl');
$AADMIN = @new SoapClient($CONF['soap_url'].'/AADMIN.class.php?wsdl');


// UNCOMMENT TO DEBUG SOAP
/*
echo "<pre>";
print_r($AADMIN->__getFunctions());
exit();
print_r($AADMIN->getArray());
print_r($AADMIN->getArray2());

print_r($AADMIN->get_categories());
print_r($AADMIN->get_articles());
echo "</pre>";
exit();
// */
