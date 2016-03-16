<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines an object that contains a list of identifiers, for example negative keyword identifiers.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743736(v=msads.100).aspx IdCollection Data Object
 * 
 * @used-by AddNegativeKeywordsToEntitiesResponse
 */
final class IdCollection
{
    /**
     * A list of identifiers, for example negative keyword identifiers.
     *
     * @var int[]
     */
    public $Ids;
}
