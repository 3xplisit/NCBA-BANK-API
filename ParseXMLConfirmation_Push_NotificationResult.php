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

//we see the namespaces extracted is: Array ( [soapenv] => http://schemas.xmlsoap.org/soap/envelope/ )

//3. we need to register the namespaces first for us to iterate through the nodes using xpath();
$initializeXml->registerXPathNamespace("soapenv","http://schemas.xmlsoap.org/soap/envelope/");

//4. We now need to access the Body tag for us to be able to extract the XML values
$extractValues = $initializeXml->xpath("soapenv:Body");

//let us see the output here..
//using foreach let us iterate through the Body tag values
foreach($extractValues as $values){

    //5. we now extract the values from the XML easily like this

    $result = $values->NCBAPaymentNotificationResult->Result;
    echo $result;
}

