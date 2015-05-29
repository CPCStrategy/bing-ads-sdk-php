<?php

namespace BingAds\AdIntelligence;

/**
 * Defines the possible values that indicate whether all or a subset of an ad group's existing keywords are used to determine the bid landscape.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743748(v=msads.90).aspx AdGroupBidLandscapeType Value Set
 *
 * @used-by AdGroupBidLandscape
 * @used-by AdGroupBidLandscapeInput
 */
final class AdGroupBidLandscapeType
{
    /** All of an ad group's existing keywords are used to determine the bid landscape. */
    const Uniform = 'Uniform';
    /** Only existing keywords that use the ad group's default bid are used to determine the bid landscape. */
    const DefaultBidOnly = 'DefaultBidOnly';
}
