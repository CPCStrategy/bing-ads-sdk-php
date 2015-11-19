<?php

namespace BingAds\Bulk;

/**
 * This operation is deprecated, and you should use GetDetailedBulkUploadStatus instead.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249979(v=msads.90).aspx GetBulkUploadStatus Response Object
 * 
 * @used-by BingAdsBulkService::GetBulkUploadStatus
 */
final class GetBulkUploadStatusResponse
{
    public $RequestStatus;
    public $ResultFileUrl;
}
