<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the ad distribution for the ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671585(v=msads.90).aspx AdDistribution Value Set
 * 
 * @used-by AdGroup
 */
final class AdDistribution
{
    /** The search network includes Bing. */
    const Search = 'Search';
    /** The content network is the ad distribution network for Bing Ads running in Windows apps. */
    const Content = 'Content';
}
