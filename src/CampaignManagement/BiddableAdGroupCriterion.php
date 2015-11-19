<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the conditions that determine whether product ads in the ad group get served.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj689538(v=msads.90).aspx BiddableAdGroupCriterion Data Object
 *
 * @uses CriterionBid
 * @uses AdGroupCriterionEditorialStatus
 */
final class BiddableAdGroupCriterion extends AdGroupCriterion
{
    /**
     * The bid to use in the auction.
     *
     * @var CriterionBid
     */
    public $CriterionBid;
    /**
     * The URL of the webpage that the user is taken to when they click the ad.
     *
     * @var string
     */
    public $DestinationUrl;
    /**
     * The criterion's editorial review status.
     *
     * @var AdGroupCriterionEditorialStatus
     */
    public $EditorialStatus;
    /**
     * The string to use as the substitution value if DestinationUrl contains {Param1: default}.
     *
     * @var string
     */
    public $Param1;
    /**
     * The string to use as the substitution value if DestinationUrl contains {Param2: default}.
     *
     * @var string
     */
    public $Param2;
    /**
     * The string to use as the substitution value if DestinationUrl contains {Param3: default}.
     *
     * @var string
     */
    public $Param3;
}
