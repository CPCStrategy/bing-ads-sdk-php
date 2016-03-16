<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains search query statistics of including broad match type keyword bids.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766187(v=msads.90).aspx BroadMatchSearchQueryKPI Data Object
 * 
 * @used-by BroadMatchKeywordOpportunity
 * @used-by BroadMatchSearchQuery
 */
final class BroadMatchSearchQueryKPI
{
    /**
     * The average CTR for the search query.
     *
     * @var float
     */
    public $AverageCTR;
    /**
     * The clicks for the search query.
     *
     * @var float
     */
    public $Clicks;
    /**
     * The impressions for the search query.
     *
     * @var int
     */
    public $Impressions;
    /**
     * The SRPV for the search query.
     *
     * @var int
     */
    public $SRPV;
    /**
     * The search query corresponding to the keyword.
     *
     * @var string
     */
    public $SearchQuery;
}
