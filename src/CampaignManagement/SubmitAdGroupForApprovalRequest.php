<?php

namespace BingAds\CampaignManagement;

/**
 * Submits an ad group for editorial review and updates the ad group status from Draft to Active.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277516(v=msads.90).aspx SubmitAdGroupForApproval Request Object
 * 
 * @used-by BingAdsCampaignManagementService::SubmitAdGroupForApproval
 */
final class SubmitAdGroupForApprovalRequest
{
    /**
     * The identifier of the ad group that is being submitted for editorial review.
     *
     * @var int
     */
    public $AdGroupId;
}
