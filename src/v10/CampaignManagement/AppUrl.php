<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines the operating system platform and URL of the app store download webpage.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt179359(v=msads.100).aspx AppUrl Data Object
 * 
 * @used-by Ad
 * @used-by AppAdExtension
 * @used-by BiddableAdGroupCriterion
 * @used-by ImageAdExtension
 * @used-by Keyword
 * @used-by SiteLink
 */
final class AppUrl
{
    /**
     * Reserved for future use.
     *
     * @var string
     */
    public $OsType;
    /**
     * Reserved for future use.
     *
     * @var string
     */
    public $Url;
}
