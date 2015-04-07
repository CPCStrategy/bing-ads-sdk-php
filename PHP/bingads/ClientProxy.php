<?php

// Updated on 8/6/2014 1:29:00 PM


namespace BingAds\Proxy;

use DOMDocument;
use DOMXPath;
use SoapHeader;
use SoapClient;

// Define the proxy class for the provided Bing Ads service.

class ClientProxy
{
    private $authenticationToken;
    private $username;
    private $password;
    private $developerToken;
    private $wsdlUrl;
    private $accountId;
    private $customerId;
    private $service;
    private $namespace;

    // Converts long types found in SOAP responses to string types in PHP.

    private function from_long_xml($xmlFragmentString)
    {
        return (string) strip_tags($xmlFragmentString);
    }

    // Converts PHP string types to long types in SOAP requests.

    private function to_long_xml($longVal)
    {
        return '<long>'.$longVal.'</long>';
    }

    public function __construct($wsdl)
    {
        $this->wsdlUrl = $wsdl;
    }

    public static function ConstructWithCredentials($wsdl, $username, $password, $token, $authenticationToken)
    {
        $thisClient = new ClientProxy($wsdl);

        $thisClient->authenticationToken = $authenticationToken;
        $thisClient->username = $username;
        $thisClient->password = $password;
        $thisClient->developerToken = $token;
        $thisClient->service = $thisClient->GetProxy($wsdl);

        return $thisClient;
    }

    public static function ConstructWithAccountId($wsdl, $username, $password, $token, $accountId, $authenticationToken)
    {
        $thisClient = new ClientProxy($wsdl);

        $thisClient->authenticationToken = $authenticationToken;
        $thisClient->username = $username;
        $thisClient->password = $password;
        $thisClient->developerToken = $token;
        $thisClient->accountId = $accountId;
        $thisClient->service = $thisClient->GetProxy($wsdl);

        return $thisClient;
    }

    public static function ConstructWithAccountAndCustomerId($wsdl, $username, $password, $token, $accountId, $customerId, $authenticationToken)
    {
        $thisClient = new ClientProxy($wsdl);

        $thisClient->authenticationToken = $authenticationToken;
        $thisClient->username = $username;
        $thisClient->password = $password;
        $thisClient->developerToken = $token;
        $thisClient->accountId = $accountId;
        $thisClient->customerId = $customerId;
        $thisClient->service = $thisClient->GetProxy($wsdl);

        return $thisClient;
    }

    public function GetAccountId()
    {
        return $this->accountId;
    }
    public function GetCustomerId()
    {
        return $this->customerId;
    }
    public function GetService()
    {
        return $this->service;
    }
    public function GetNamespace()
    {
        return $this->namespace;
    }
    public function GetWsdl()
    {
        return $this->wsdlUrl;
    }

    // This function gets the namespace from the WSDL, so you do
    // not have to hardcode it in the client.

    private function GetServiceNamespace($url)
    {
        $doc = new DOMDocument();
        $doc->Load($url);

        $xpath = new DOMXPath($doc);
        $query = '/*/@targetNamespace';

        $attrs = $xpath->query($query);

        // The query will return only one node in the node list.

        foreach ($attrs as $attr) {
            $namespace = $attr->value;
        }

        return $namespace;
    }

    private function GetProxy($wsdl)
    {
        $this->namespace = $this->GetServiceNamespace($wsdl);

        // Define the SOAP headers. Customer ID is required
        // to get editorial reasons.

        $headers = array();

        $headers[] = new SoapHeader(
                $this->namespace,
                'CustomerAccountId',
                $this->accountId
        );

        $headers[] = new SoapHeader(
                $this->namespace,
                'CustomerId',
                $this->customerId
        );

        $headers[] = new SoapHeader(
                $this->namespace,
                'DeveloperToken',
                $this->developerToken
        );

        $headers[] = new SoapHeader(
                $this->namespace,
                'UserName',
                $this->username
        );

        $headers[] = new SoapHeader(
                $this->namespace,
                'Password',
                $this->password
        );

        $headers[] = new SoapHeader(
                $this->namespace,
                'AuthenticationToken',
                $this->authenticationToken
        );

        // By default, PHP does not return single item arrays as an array type.
        // To force PHP to always return an array for an array type in the
        // response, specify the SOAP_SINGLE_ELEMENT_ARRAYS feature.

        $options = array(
                'trace' => true,
                'exceptions' => true,
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,

                // Map long type to string type. For details, see
                // from_long_xml and to_long_xml callbacks.

                'typemap' => array(
                        array(
                                'type_ns' => 'http://www.w3.org/2001/XMLSchema',
                                'type_name' => 'xs:long',
                                'to_xml' => 'to_long_xml',
                                'from_xml' => 'from_long_xml',
                        ),
                ),
        );

        $proxy = @new SOAPClient($this->wsdlUrl, $options);

        $proxy->__setSoapHeaders($headers);

        return $proxy;
    }
}
