<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more campaign criterions that help filter product catalog items for a Bing Merchant Center store.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.90).aspx AddAdGroupCriterions Response Object
 *
 * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
 */
final class AddAdGroupCriterionsResponse
{
    /**
     * A list of identifiers that identify the criterion that were added.
     *
     * @var integer[]
     */
    public $AdGroupCriterionIds;
}
