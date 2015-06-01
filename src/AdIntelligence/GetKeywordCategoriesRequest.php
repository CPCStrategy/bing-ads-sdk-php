<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the keyword categories to which the specified keywords belong.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn336992(v=msads.90).aspx GetKeywordCategories Request Object
 *
 * @used-by BingAdsAdIntelligenceService::GetKeywordCategories
 */
final class GetKeywordCategoriesRequest
{
    /**
     * An array of keywords for which you want to determine the possible keyword categories that each keyword belongs to.
     *
     * @var string[]
     */
    public $Keywords;
    /**
     * The language in which the keywords are written.
     *
     * @var string
     */
    public $Language;
    /**
     * The country code of the country/region to use as the source of the category data.
     *
     * @var string
     */
    public $PublisherCountry;
    /**
     * The number of categories to include in the results.
     *
     * @var int
     */
    public $MaxCategories;
}
