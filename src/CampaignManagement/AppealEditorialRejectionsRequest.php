<?php

namespace BingAds\CampaignManagement;

/**
 * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.90).aspx AppealEditorialRejections Request Object
 *
 * @uses EntityType
 * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
 */
final class AppealEditorialRejectionsRequest
{
    /**
     * A list of unique identifiers of the ads or keywords that failed editorial review.
     *
     * @var integer[]
     */
    public $EntityIds;
    /**
     * The type of entities that the entity list contains.
     *
     * @var EntityType
     */
    public $EntityType;
    /**
     * The justification for the appeal.
     *
     * @var string
     */
    public $JustificationText;
}
