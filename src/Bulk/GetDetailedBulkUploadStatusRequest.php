<?php

namespace BingAds\Bulk;

/**
 * Gets the status and completion progress of a bulk upload request.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn574758(v=msads.90).aspx GetDetailedBulkUploadStatus Request Object
 *
 * @used-by BingAdsBulkService::GetDetailedBulkUploadStatus
 */
final class GetDetailedBulkUploadStatusRequest
{
    /**
     * The identifier of the upload request.
     *
     * @var string
     */
    public $RequestId;
}
