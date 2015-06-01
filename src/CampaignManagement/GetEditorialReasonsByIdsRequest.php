<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.90).aspx GetEditorialReasonsByIds Request Object
 *
 * @uses EntityType
 * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
 */
final class GetEditorialReasonsByIdsRequest
{
    /**
     * The identifier of the account that contains the specified entities.
     *
     * @var int
     */
    public $AccountId;
    /**
     * A list of unique identifiers that identifies the ads or keywords that failed editorial review.
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
}
