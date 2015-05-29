<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified criterions.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.90).aspx GetAdGroupCriterionsByIds Request Object
 *
 * @uses CriterionType
 * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
 */
final class GetAdGroupCriterionsByIdsRequest
{
    /**
     * The identifier of the account that owns the criterions to get.
     *
     * @var int
     */
    public $AccountId;
    /**
     * A list of unique identifiers that identify the criterions to get.
     *
     * @var integer[]
     */
    public $AdGroupCriterionIds;
    /**
     * The identifier of the ad group that owns the criterions to get.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The types of ad group criterion to get, for example Product.
     *
     * @var CriterionType
     */
    public $CriterionType;
}
