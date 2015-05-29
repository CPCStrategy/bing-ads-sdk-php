<?php

namespace BingAds\Reporting;

/**
 * Defines the rich ad types that you can use to filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh180148(v=msads.90).aspx RichAdSubTypeFilter Value Set
 *
 * @used-by RichAdComponentPerformanceReportFilter
 */
final class RichAdSubTypeFilter
{
    /** An ad that can contain a maximum of two images and four deep links. */
    const RAIS2_IMAGES4_LINKS = 'Rais2Images4Links';
    /** An ad that can contain a maximum of two images, two deep links, and an input form. */
    const RAIS2_IMAGES2_LINKS1_FORM = 'Rais2Images2Links1Form';
    /** A pharmaceutical ad. */
    const RAIS_PHARMA = 'RaisPharma';
    /** An ad that can contain one video and a maximum of four deep links. */
    const RAIS1_VIDEO4_LINKS = 'Rais1Video4Links';
    /** An ad that can contain one video, a maximum of two deep links, and an input form. */
    const RAIS1_VIDEO2_LINKS1_FORM = 'Rais1Video2Links1Form';
    /** An ad that can contain a maximum of four deep links. */
    const RAIS4_LINKS = 'Rais4Links';
    /** A Bing Shopping ad. */
    const RAIS_BING_SHOPPING = 'RaisBingShopping';
}
