<?php

namespace BingAds\Bulk;

/**
 * This operation is deprecated, and you should use GetDetailedBulkDownloadStatus instead.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.90).aspx GetDownloadStatus Request Object
 * 
 * @used-by BingAdsBulkService::GetDownloadStatus
 */
final class GetDownloadStatusRequest
{
    public $DownloadRequestId;
}
