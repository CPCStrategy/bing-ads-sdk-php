<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains the marketplace impact statistics of including broad match type keyword bids.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn766186(v=msads.90).aspx BroadMatchKeywordOpportunity Data Object
 *
 * @uses BroadMatchSearchQueryKPI
 */
final class BroadMatchKeywordOpportunity extends KeywordOpportunity
{
    /**
     * Broad match impression share in the marketplace.
     *
     * @var float
     */
    public $ImpressionShare;
    /**
     * The bid of an existing reference keyword used by the service to offer the keyword opportunity.
     *
     * @var float
     */
    public $ReferenceKeywordBid;
    /**
     * The identifier of an existing reference keyword used by the service to offer the keyword opportunity.
     *
     * @var int
     */
    public $ReferenceKeywordId;
    /**
     * The match type of an existing reference keyword used by the service to offer the keyword opportunity.
     *
     * @var int
     */
    public $ReferenceKeywordMatchType;
    /**
     * A list of up to three broad match search query KPI objects.
     *
     * @var BroadMatchSearchQueryKPI[]
     */
    public $SearchQueryKPIs;
}
