<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines the conditions that determine whether product ads in the ad group get served.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj689538(v=msads.100).aspx BiddableAdGroupCriterion Data Object
 * 
 * @uses CriterionBid
 * @uses AdGroupCriterionEditorialStatus
 * @uses AppUrl
 * @uses CustomParameters
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
    public $EditorialStatus;
    /**
     * Reserved for future use.
     *
     * @var AppUrl[]
     */
    public $FinalAppUrls;
    /**
     * Reserved for future use.
     *
     * @var string[]
     */
    public $FinalMobileUrls;
    /**
     * Reserved for future use.
     *
     * @var string[]
     */
    public $FinalUrls;
    /**
     * Reserved for future use.
     *
     * @var string
     */
    public $TrackingUrlTemplate;
    /**
     * Reserved for future use.
     *
     * @var CustomParameters
     */
    public $UrlCustomParameters;
}
