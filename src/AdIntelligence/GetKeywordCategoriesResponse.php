<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the keyword categories to which the specified keywords belong.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336992(v=msads.90).aspx GetKeywordCategories Response Object
 *
 * @uses KeywordCategoryResult
 * @used-by BingAdsAdIntelligenceService::GetKeywordCategories
 */
final class GetKeywordCategoriesResponse
{
    /**
     * An array of KeywordCategoryResult objects.
     *
     * @var KeywordCategoryResult[]
     */
    public $Result;
}
