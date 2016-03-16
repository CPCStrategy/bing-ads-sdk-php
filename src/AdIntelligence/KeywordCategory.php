<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains a keyword category and a confidence score.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh921730(v=msads.90).aspx KeywordCategory Data Object
 * 
 * @used-by KeywordCategoryResult
 */
final class KeywordCategory
{
    /**
     * The keyword category that the keyword might belong to.
     *
     * @var string
     */
    public $Category;
    /**
     * A score from 0.
     *
     * @var float
     */
    public $ConfidenceScore;
}
