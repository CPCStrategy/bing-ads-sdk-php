<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671765(v=msads.90).aspx BatchError Data Object
 * 
 * @uses KeyValuePairOfstringstring
 * @used-by ApiFaultDetail
 * @used-by BatchErrorCollection
 * @used-by EditorialApiFaultDetail
 * @used-by AddAdsResponse
 * @used-by AddKeywordsResponse
 * @used-by AddListItemsToSharedListResponse
 * @used-by AddSharedEntityResponse
 * @used-by ApplyProductPartitionActionsResponse
 * @used-by DeleteAdsResponse
 * @used-by DeleteCampaignCriterionsResponse
 * @used-by DeleteKeywordsResponse
 * @used-by DeleteListItemsFromSharedListResponse
 * @used-by DeleteMediaResponse
 * @used-by DeleteSharedEntitiesResponse
 * @used-by DeleteSharedEntityAssociationsResponse
 * @used-by GetAdsByIdsResponse
 * @used-by GetCampaignCriterionsByIdsResponse
 * @used-by GetKeywordsByIdsResponse
 * @used-by GetMediaAssociationsResponse
 * @used-by GetMediaMetaDataByIdsResponse
 * @used-by GetNegativeKeywordsByEntityIdsResponse
 * @used-by GetSharedEntityAssociationsByEntityIdsResponse
 * @used-by GetSharedEntityAssociationsBySharedEntityIdsResponse
 * @used-by SetSharedEntityAssociationsResponse
 * @used-by UpdateAdsResponse
 * @used-by UpdateKeywordsResponse
 * @used-by UpdateSharedEntitiesResponse
 */
class BatchError
{
    /**
     * A numeric error code that identifies the error.
     *
     * @var int
     */
    public $Code;
    /**
     * A message that provides additional details about the batch error.
     *
     * @var string
     */
    public $Details;
    /**
     * A symbolic string constant that identifies the error.
     *
     * @var string
     */
    public $ErrorCode;
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The zero-based index of the item in the batch of items in the request message that failed.
     *
     * @var int
     */
    public $Index;
    /**
     * A message that describes the error.
     *
     * @var string
     */
    public $Message;
    /**
     * Reserved for future use.
     *
     * @var string
     */
    public $Type;
}
