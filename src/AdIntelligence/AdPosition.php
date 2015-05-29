<?php

namespace BingAds\AdIntelligence;

/**
 * Defines the possible positions of an ad in the search results or on a content-based webpage.
 *
 * @link http://msdn.microsoft.com/en-us/library/gg712236(v=msads.90).aspx AdPosition Value Set
 *
 * @used-by KeywordKPI
 * @used-by GetHistoricalKeywordPerformanceRequest
 */
final class AdPosition
{
    /** Indicates all search result positions. */
    const ALL = 'All';
    /** The first ad to appear at the top of the search results page. */
    const MAIN_LINE1 = 'MainLine1';
    /** The second ad to appear at the top of the search results page. */
    const MAIN_LINE2 = 'MainLine2';
    /** The third ad to appear at the top of the search results page. */
    const MAIN_LINE3 = 'MainLine3';
    /** The fourth ad to appear at the top of the search results page. */
    const MAIN_LINE4 = 'MainLine4';
    /** The first ad to appear on the right side of the first search results page. */
    const SIDE_BAR1 = 'SideBar1';
    /** The second ad to appear on the right side of the first search results page. */
    const SIDE_BAR2 = 'SideBar2';
    /** The third ad to appear on the right side of the first search results page. */
    const SIDE_BAR3 = 'SideBar3';
    /** The fourth ad to appear on the right side of the first search results page. */
    const SIDE_BAR4 = 'SideBar4';
    /** The fifth ad to appear on the right side of the first search results page. */
    const SIDE_BAR5 = 'SideBar5';
    /** The sixth ad to appear on the right side of the first search results page. */
    const SIDE_BAR6 = 'SideBar6';
    /** The seventh ad to appear on the right side of the first search results page. */
    const SIDE_BAR7 = 'SideBar7';
    /** The eighth ad to appear on the right side of the first search results page. */
    const SIDE_BAR8 = 'SideBar8';
    /** The ninth ad to appear on the right side of the first search results page. */
    const SIDE_BAR9 = 'SideBar9';
    /** The tenth ad to appear on the right side of the first search results page. */
    const SIDE_BAR10 = 'SideBar10';
    /** Aggregates the data for all supported positions. */
    const AGGREGATE = 'Aggregate';
}
