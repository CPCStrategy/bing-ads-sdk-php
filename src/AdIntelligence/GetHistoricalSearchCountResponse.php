<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the number of times the normalized term was used in a search during the specified time period.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336988(v=msads.90).aspx GetHistoricalSearchCount Response Object
 *
 * @uses KeywordSearchCount
 * @used-by BingAdsAdIntelligenceService::GetHistoricalSearchCount
 */
final class GetHistoricalSearchCountResponse
{
    /**
     * An array of KeywordSearchCount objects.
     *
     * @var KeywordSearchCount[]
     */
    public $KeywordSearchCounts;
}
