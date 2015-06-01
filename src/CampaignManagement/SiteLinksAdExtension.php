<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an ad extension that specifies one or more site links to add to a text ad.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj134387(v=msads.90).aspx SiteLinksAdExtension Data Object
 *
 * @uses SiteLink
 */
final class SiteLinksAdExtension extends AdExtension
{
    /**
     * A list of site links.
     *
     * @var SiteLink[]
     */
    public $SiteLinks;
}
