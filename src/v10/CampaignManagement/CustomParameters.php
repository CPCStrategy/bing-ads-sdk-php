<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines a collection of key and value custom parameters for URL tracking.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt179361(v=msads.100).aspx CustomParameters Data Object
 * 
 * @uses CustomParameter
 * @used-by Ad
 * @used-by AdGroup
 * @used-by AppAdExtension
 * @used-by BiddableAdGroupCriterion
 * @used-by Campaign
 * @used-by ImageAdExtension
 * @used-by Keyword
 * @used-by SiteLink
 */
final class CustomParameters
{
    /**
     * The collection of key and value custom parameters for URL tracking.
     *
     * @var CustomParameter[]
     */
    public $Parameters;
}
