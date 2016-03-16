<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.100).aspx AppealEditorialRejections Request Object
 * 
 * @uses EntityIdToParentIdAssociation
 * @uses EntityType
 * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
 */
final class AppealEditorialRejectionsRequest
{
    public $EntityIdToParentIdAssociations;
    public $EntityType;
    public $JustificationText;
}
