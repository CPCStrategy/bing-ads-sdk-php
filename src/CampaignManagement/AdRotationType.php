<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible ad rotation types that you can apply to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj219947(v=msads.90).aspx AdRotationType Value Set
 *
 * @used-by AdRotation
 */
final class AdRotationType
{
    /** Favor the best performing ads. */
    const OptimizeForClicks = 'OptimizeForClicks';
    /** Rotate ads evenly into the auction. */
    const RotateAdsEvenly = 'RotateAdsEvenly';
}
