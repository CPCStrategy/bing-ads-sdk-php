<?php

namespace BingAds\CampaignManagement;

/**
 * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913134(v=msads.100).aspx ApplyProductPartitionActions Request Object
 * 
 * @uses AdGroupCriterionAction
 * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
 */
final class ApplyProductPartitionActionsRequest
{
    public $CriterionActions;
}
