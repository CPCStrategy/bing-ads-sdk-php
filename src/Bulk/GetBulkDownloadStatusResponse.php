<?php

namespace BingAds\Bulk;

/**
 * Gets the status of a bulk download request.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.100).aspx GetBulkDownloadStatus Response Object
 * 
 * @uses OperationError
 * @uses KeyValuePairOfstringstring
 * @used-by BingAdsBulkService::GetBulkDownloadStatus
 */
final class GetBulkDownloadStatusResponse
{
    public $Errors;
    public $ForwardCompatibilityMap;
    public $PercentComplete;
    public $RequestStatus;
    public $ResultFileUrl;
}
