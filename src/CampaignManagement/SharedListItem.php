<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base class of a shared list item.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743738(v=msads.90).aspx SharedListItem Data Object
 * 
 * @uses KeyValuePairOfstringstring
 * @used-by AddListItemsToSharedListRequest
 * @used-by AddSharedEntityRequest
 * @used-by GetListItemsBySharedListResponse
 */
class SharedListItem
{
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The type of the shared list item.
     *
     * @var string
     */
    public $Type;
}
