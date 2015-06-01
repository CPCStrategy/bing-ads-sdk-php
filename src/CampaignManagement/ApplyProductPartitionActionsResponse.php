<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
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
     * @var integer[]
     */
    public $AdGroupCriterionIds;
    /**
     * An array of BatchError objects that contain details for any criterion action that was not successfully applied.
     *
     * @var BatchError[]
     */
    public $PartialErrors;
}
