<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the tactic and channel report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg262855(v=msads.90).aspx TacticChannelReportFilter Data Object
 *
 * @used-by TacticChannelReportRequest
 */
final class TacticChannelReportFilter
{
    /**
     * The report will include data for only the specified channels.
     *
     * @var integer[]
     */
    public $ChannelIds;
    /**
     * The report will include data for only the specified tactics.
     *
     * @var integer[]
     */
    public $TacticIds;
    /**
     * The report will include data for only the specified ad groups.
     *
     * @var integer[]
     */
    public $ThirdPartyAdGroupIds;
    /**
     * The report will include data for only the specified campaigns.
     *
     * @var integer[]
     */
    public $ThirdPartyCampaignIds;
}
