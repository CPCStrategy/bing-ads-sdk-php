<?php

namespace BingAds\AdInsight;

/**
 * Gets the keyword categories to which the specified keywords belong.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219320(v=msads.100).aspx GetKeywordCategories Response Object
 * 
 * @uses KeywordCategoryResult
 * @used-by BingAdsAdInsightService::GetKeywordCategories
 */
final class GetKeywordCategoriesResponse
{
    public $Result;
}
