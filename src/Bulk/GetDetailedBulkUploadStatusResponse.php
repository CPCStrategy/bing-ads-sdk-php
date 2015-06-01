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
    /**
     * An array of OperationError objects corresponding to errors encountered during the system processing of the bulk file after your HTTP POST upload completed.
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
     * The progress completion percentage for system processing of the uploaded bulk file.
     *
     * @var int
     */
    public $PercentComplete;
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
