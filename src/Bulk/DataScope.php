<?php

namespace BingAds\Bulk;

/**
 * Defines the scope or types of data to download.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249976(v=msads.90).aspx DataScope Value Set
 *
 * @used-by DownloadCampaignsByAccountIdsRequest
 * @used-by DownloadCampaignsByCampaignIdsRequest
 */
final class DataScope
{
    /** Download the entity attributes records. */
    const ENTITY_DATA = 'EntityData';
    /** Download the performance data fields for the corresponding entity records. */
    const ENTITY_PERFORMANCE_DATA = 'EntityPerformanceData';
    /** Download the quality score fields for the corresponding entity records. */
    const QUALITY_SCORE_DATA = 'QualityScoreData';
    /** Download the bid suggestions records. */
    const BID_SUGGESTIONS_DATA = 'BidSuggestionsData';
}
