<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a negative keyword with match type.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743739(v=msads.100).aspx NegativeKeyword Data Object
 * 
 * @uses MatchType
 * @used-by EntityNegativeKeyword
 */
final class NegativeKeyword extends SharedListItem
{
    /**
     * The system-generated identifier of the negative keyword.
     *
     * @var int
     */
    public $Id;
    /**
     * The type of match to compare the negative keyword and the user's search term.
     *
     * @var MatchType
     */
    public $MatchType;
    /**
     * The negative keyword text.
     *
     * @var string
     */
    public $Text;
}
