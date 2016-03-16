<?php

namespace BingAds\v10\AdInsight;

/**
 * Gets the keyword categories to which the specified keywords belong.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219320(v=msads.100).aspx GetKeywordCategories Request Object
 * 
 * @used-by BingAdsAdInsightService::GetKeywordCategories
 */
final class GetKeywordCategoriesRequest
{
    public $Keywords;
    public $Language;
    public $PublisherCountry;
    public $MaxCategories;
}
