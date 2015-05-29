<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the pricing model for an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/cc580680(v=msads.90).aspx PricingModel Value Set
 *
 * @used-by AdGroup
 */
final class PricingModel
{
    /** The pricing model is cost-per-click (CPC). */
    const CPC = 'Cpc';
    /** The pricing model is cost per thousand-impressions (CPM). */
    const CPM = 'Cpm';
}
