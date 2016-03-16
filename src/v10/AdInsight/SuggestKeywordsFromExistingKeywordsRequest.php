<?php

namespace BingAds\v10\AdInsight;

/**
 * Suggests keywords that could perform better than the specified keywords.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219311(v=msads.100).aspx SuggestKeywordsFromExistingKeywords Request Object
 * 
 * @used-by BingAdsAdInsightService::SuggestKeywordsFromExistingKeywords
 */
final class SuggestKeywordsFromExistingKeywordsRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountries;
    public $MaxSuggestionsPerKeyword;
    public $SuggestionType;
    public $RemoveDuplicates;
    public $ExcludeBrand;
    public $AdGroupId;
    public $CampaignId;
}
