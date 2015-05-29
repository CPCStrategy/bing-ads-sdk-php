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
    /**
     * An array of OperationError objects corresponding to errors encountered during the system processing of the bulk file after your download request was submitted.
     *
     * @var OperationError[]
     */
    public $Errors;
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The progress completion percentage for system processing of the bulk download file.
     *
     * @var int
     */
    public $PercentComplete;
    /**
     * The status of the download.
     *
     * @var string
     */
    public $RequestStatus;
    /**
     * The URL that contains the download data.
     *
     * @var string
     */
    public $ResultFileUrl;
}
