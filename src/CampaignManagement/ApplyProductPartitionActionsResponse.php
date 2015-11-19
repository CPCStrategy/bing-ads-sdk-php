<?php

namespace BingAds\CampaignManagement;

/**
 * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913134(v=msads.90).aspx ApplyProductPartitionActions Response Object
 * 
 * @uses BatchError
 * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
 */
final class ApplyProductPartitionActionsResponse
{
    /**
     * A list of identifiers that identify the criterion that had the action applied.
     *
     * @var int[]
     */
    public $AdGroupCriterionIds;
    /**
     * An array of BatchError objects that contain details for any criterion action that was not successfully applied.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
