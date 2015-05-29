<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base class of a shared list.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743734(v=msads.90).aspx SharedList Data Object
 *
 * @used-by AddListItemsToSharedListRequest
 * @used-by DeleteListItemsFromSharedListRequest
 * @used-by GetListItemsBySharedListRequest
 */
class SharedList extends SharedEntity
{
    /**
     * The number of SharedListItem objects that are added to this shared list.
     *
     * @var int
     */
    public $ItemCount;
}
