<?php

namespace BingAds\Bulk;

/**
 * Gets the status and completion progress of a bulk upload request.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249979(v=msads.100).aspx GetBulkUploadStatus Response Object
 * 
 * @uses OperationError
 * @uses KeyValuePairOfstringstring
 * @used-by BingAdsBulkService::GetBulkUploadStatus
 */
final class GetBulkUploadStatusResponse
{
    public $Errors;
    public $ForwardCompatibilityMap;
    public $PercentComplete;
    public $RequestStatus;
    public $ResultFileUrl;
}
