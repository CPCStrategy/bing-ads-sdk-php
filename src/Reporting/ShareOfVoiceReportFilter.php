<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the share of voice report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj592908(v=msads.90).aspx ShareOfVoiceReportFilter Data Object
 * 
 * @uses AdDistributionReportFilter
 * @uses BidMatchTypeReportFilter
 * @uses DeliveredMatchTypeReportFilter
 * @uses DeviceTypeReportFilter
 * @used-by ShareOfVoiceReportRequest
 */
final class ShareOfVoiceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium.
     *
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;
    /**
     * The report will include data for only the specified bid match types (as opposed to the delivered match type).
     *
     * @var BidMatchTypeReportFilter
     */
    public $BidMatchType;
    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type).
     *
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed.
     *
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;
    /**
     * The report will include data for only the specified keywords.
     *
     * @var string[]
     */
    public $Keywords;
    /**
     * The report will include data for only websites that used the specified languages.
     *
     * @var string[]
     */
    public $LanguageCode;
}
