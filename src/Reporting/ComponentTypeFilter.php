<?php

namespace BingAds\Reporting;

/**
 * Defines the possible components of a rich ad that you can use to filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh180146(v=msads.90).aspx ComponentTypeFilter Value Set
 *
 * @used-by RichAdComponentPerformanceReportFilter
 */
final class ComponentTypeFilter
{
    /** The title of the ad that contains a hyperlink to a destination URL. */
    const BASIC = 'Basic';
    /** A hyperlink to a webpage inside the destination website. */
    const DEEPLINK = 'Deeplink';
    /** An entry form on the ad that gathers data from the user. */
    const FORM = 'Form';
    /** An image in the ad that contains a hyperlink to a destination URL. */
    const IMAGE = 'Image';
    /** The icon that displays next to the display URL. */
    const FAVORITE_ICON = 'FavoriteIcon';
    /** A video embedded in the ad that the user can click to play. */
    const VIDEO = 'Video';
    /** A link in a pharmaceutical ad that links to additional drug information. */
    const TITLED_LINK = 'TitledLink';
    const UNKNOWN = 'Unknown';
}
