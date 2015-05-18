<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913134(v=msads.90).aspx ApplyProductPartitionActions Request Object
 *
 * @uses AdGroupCriterionAction
 * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
 */
final class ApplyProductPartitionActionsRequest
{
    /**
     * A list of up to 5,000 AdGroupCriterionAction objects that each contain an Action element and either a BiddableAdGroupCriterion or NegativeAdGroupCriterion.
     *
     * @var AdGroupCriterionAction[]
     */
    public $CriterionActions;
}
