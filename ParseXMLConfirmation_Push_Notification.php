<?php 

$loadXml = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
<soapenv:Header/>
<soapenv:Body>
 <NCBAPaymentNotificationResult>
 <Result>OK</Result>
 </NCBAPaymentNotificationResult>
</soapenv:Body>
</soapenv:Envelope>';

//1. We initialize an instance of SimpleXMLElement

$initializeXml = new SimpleXMLElement($loadXml);

//2. We extract all namespaces from the xml, and from the looks we can only see one

$extractNamespaces = $initializeXml->getNamespaces(true);

print_r($extractNamespaces);
