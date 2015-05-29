<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the keyword and a list of keyword categories that the keyword might belong to.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh921731(v=msads.90).aspx KeywordCategoryResult Data Object
 *
 * @uses KeywordCategory
 * @used-by GetKeywordCategoriesResponse
 */
final class KeywordCategoryResult
{
    /**
     * The keyword being categorized.
     *
     * @var string
     */
    public $Keyword;
    /**
     * An array of KeywordCategory objects that contains a keyword category and a score that indicates the confidence that the keyword belongs to that keyword category.
     *
     * @var KeywordCategory[]
     */
    public $KeywordCategories;
}
