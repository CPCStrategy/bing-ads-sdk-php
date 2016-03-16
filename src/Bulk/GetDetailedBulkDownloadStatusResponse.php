<?php

namespace BingAds\Bulk;

/**
 * Gets the status of a bulk download request.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn600289(v=msads.90).aspx GetDetailedBulkDownloadStatus Response Object
 * 
 * @uses OperationError
 * @uses KeyValuePairOfstringstring
 * @used-by BingAdsBulkService::GetDetailedBulkDownloadStatus
 */
final class GetDetailedBulkDownloadStatusResponse
{
    public $Errors;
    public $ForwardCompatibilityMap;
    public $PercentComplete;
    public $RequestStatus;
    public $ResultFileUrl;
}
