<?php

namespace BingAds\Reporting;

/**
 * Defines the status of a report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672100(v=msads.90).aspx ReportRequestStatus Data Object
 * 
 * @uses ReportRequestStatusType
 * @used-by PollGenerateReportResponse
 */
final class ReportRequestStatus
{
    /**
     * The URL from where the report can be downloaded.
     *
     * @var string
     */
    public $ReportDownloadUrl;
    /**
     * The status of a report request.
     *
     * @var ReportRequestStatusType
     */
    public $Status;
}
