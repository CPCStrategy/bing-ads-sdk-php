<?php

// This example demonstrates how to download the comma separated value (CSV) file that contains geographical location information 
// that can be used with Bing Ads location targeting.

// The full path to the geographical locations file.

$LocalFile = "c:\\geolocations\\geolocations.csv";

// The temporary location of the downloaded locations file.

$TempFile = "c:\\geolocations\\temp.csv";

// The Url of the geographical locations file available for download.
// This example uses 'en' (English). Supported locales are 'zh-Hant' (Traditional Chinese), 'en' (English), 'fr' (French), 
// 'de' (German), 'it' (Italian), 'pt-BR' (Portuguese - Brazil), and 'es' (Spanish). 

$FileUrl = "https://api.bingads.microsoft.com/Api/SystemCodes/v1/en/GeoLocations.csv";

// The ETag from a previous download, if known. The ETag is not required to run this example. 

$ETag = "<ETagGoesHere>";


try
{
    date_default_timezone_set("UTC");
    $ch = curl_init($FileUrl);
    $fileHandle = fopen($TempFile, 'w+');

    curl_setopt($ch, CURLOPT_FILETIME, true); 
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_FILE, $fileHandle); 
    
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
                
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                     "If-None-Match: " . "\"" . $ETag . "\""
                     ));

    curl_setopt($ch, CURLOPT_HEADERFUNCTION, "HandleHeaderItem");

    $response = curl_exec($ch); 

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);     
 
    curl_close($ch);
    fclose($fileHandle);
    
    if ($httpCode == 200)
    {
        printf("Downloaded the geographical locations to %s.\n", $LocalFile);
        rename($TempFile, $LocalFile);
    }
    else if ($httpCode == 304)
    {
        printf("The locations file has not been modified since last download.\n");
        unlink($TempFile);
    }
}
catch (Exception $e)
{
    print $e->getCode()." ".$e->getMessage()."\n\n";
    print $e->getTraceAsString()."\n\n";
}

function HandleHeaderItem( $curl, $headerItem ) {
    if (strpos($headerItem,'ETag') !== false)
    {
        print "Current " . $headerItem;
    }
    return strlen($headerItem);
}

?>
