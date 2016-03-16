<?php

namespace BingAds\Bulk;

/**
 * Gets the status and completion progress of a bulk upload request.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn574758(v=msads.90).aspx GetDetailedBulkUploadStatus Response Object
 * 
 * @uses OperationError
 * @uses KeyValuePairOfstringstring
 * @used-by BingAdsBulkService::GetDetailedBulkUploadStatus
 */
final class GetDetailedBulkUploadStatusResponse
{
    public $Errors;
    public $ForwardCompatibilityMap;
    public $PercentComplete;
    public $RequestStatus;
    public $ResultFileUrl;
}
