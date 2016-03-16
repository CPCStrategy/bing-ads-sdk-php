<?php

namespace BingAds\Reporting;

/**
 * Gets the status of a report request.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.90).aspx PollGenerateReport Request Object
 * 
 * @used-by BingAdsReportingService::PollGenerateReport
 */
final class PollGenerateReportRequest
{
    public $ReportRequestId;
}
