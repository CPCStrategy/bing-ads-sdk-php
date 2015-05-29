<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the bidding model for an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796906(v=msads.90).aspx BiddingModel Value Set
 *
 * @used-by AdGroup
 */
final class BiddingModel
{
    /** The ad group bidding is keyword-based. */
    const KEYWORD = 'Keyword';
    /** The ad group bidding is website-placement-based. */
    const SITE_PLACEMENT = 'SitePlacement';
}
