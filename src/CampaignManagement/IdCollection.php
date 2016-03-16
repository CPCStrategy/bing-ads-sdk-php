<?php

namespace BingAds\CampaignManagement;

/**
 * Currently this feature is only available in production for pilot participants, and will be generally available for all advertisers in Q3 2014.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743736(v=msads.90).aspx IdCollection Data Object
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
