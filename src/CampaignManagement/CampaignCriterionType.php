<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible types of campaign criterions.
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
