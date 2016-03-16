<?php

namespace BingAds\Reporting;

/**
 * Defines an ad group to include in the report.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671622(v=msads.90).aspx AdGroupReportScope Data Object
 * 
 * @used-by AccountThroughAdGroupReportScope
 */
final class AdGroupReportScope
{
    /**
     * The identifier of the account that the ad group belongs to.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The identifier of the campaign that the ad group belongs to.
     *
     * @var int
     */
    public $CampaignId;
    /**
     * The identifier of the ad group to limit the scope to.
     *
     * @var int
     */
    public $AdGroupId;
}
