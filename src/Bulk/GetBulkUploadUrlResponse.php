<?php

namespace BingAds\Bulk;

/**
 * Submits a request for a URL where a bulk upload file may be posted.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249978(v=msads.90).aspx GetBulkUploadUrl Response Object
 * 
 * @used-by BingAdsBulkService::GetBulkUploadUrl
 */
final class GetBulkUploadUrlResponse
{
    public $RequestId;
    public $UploadUrl;
}
