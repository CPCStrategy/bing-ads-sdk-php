<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913131(v=msads.90).aspx CampaignCriterionType Value Set
 *
 * @used-by AddCampaignCriterionsRequest
 * @used-by DeleteCampaignCriterionsRequest
 * @used-by GetCampaignCriterionsByCampaignIdRequest
 * @used-by GetCampaignCriterionsByIdsRequest
 * @used-by UpdateCampaignCriterionsRequest
 */
final class CampaignCriterionType
{
    /** The criterion identifies a Bing Merchant Center product filter. */
    const ProductScope = 'ProductScope';
}
