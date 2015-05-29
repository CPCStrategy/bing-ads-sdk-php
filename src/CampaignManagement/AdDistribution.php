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
    /** The ad group contains search ads. */
    const Search = 'Search';
    /** The ads are displayed on Microsoft-owned websites, as well as on participating partner websites. */
    const Content = 'Content';
}
