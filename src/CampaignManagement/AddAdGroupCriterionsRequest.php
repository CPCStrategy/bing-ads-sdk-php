<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more campaign criterions that help filter product catalog items for a Bing Merchant Center store.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.90).aspx AddAdGroupCriterions Request Object
 *
 * @uses AdGroupCriterion
 * @uses CriterionType
 * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
 */
final class AddAdGroupCriterionsRequest
{
    /**
     * The identifier of the account to add the criterions to.
     *
     * @var int
     */
    public $AccountId;
    /**
     * A list of criterions that determine whether ads in the ad group are served.
     *
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
    /**
     * The type of ad group criterion to add, for example Product.
     *
     * @var CriterionType
     */
    public $CriterionType;
}
