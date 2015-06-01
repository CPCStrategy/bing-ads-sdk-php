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
    /**
     * The status of the upload.
     *
     * @var string
     */
    public $RequestStatus;
    /**
     * The URL of the file that contains the requested results, for example upload error information.
     *
     * @var string
     */
    public $ResultFileUrl;
}
