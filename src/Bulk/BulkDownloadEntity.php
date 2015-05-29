<?php

namespace BingAds\Bulk;

/**
 * Defines the entities that may be downloaded in bulk.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249982(v=msads.90).aspx BulkDownloadEntity Value Set
 *
 * @used-by DownloadCampaignsByAccountIdsRequest
 * @used-by DownloadCampaignsByCampaignIdsRequest
 */
final class BulkDownloadEntity
{
    /** Include campaigns in the download data. */
    const CAMPAIGNS = 'Campaigns';
    /** Include ad groups in the download data. */
    const AD_GROUPS = 'AdGroups';
    /** Include ads in the download data. */
    const ADS = 'Ads';
    /** Include keywords in the download data. */
    const KEYWORDS = 'Keywords';
    /** Include a campaign's negative keywords in the download data. */
    const CAMPAIGN_NEGATIVE_KEYWORDS = 'CampaignNegativeKeywords';
    /** Include an ad group's negative keywords in the download data. */
    const AD_GROUP_NEGATIVE_KEYWORDS = 'AdGroupNegativeKeywords';
    /** Include a campaign's targets in the download data. */
    const CAMPAIGN_TARGETS = 'CampaignTargets';
    /** Include an ad group's targets in the download data. */
    const AD_GROUP_TARGETS = 'AdGroupTargets';
    /** Include a campaign's negative site URLs in the download data. */
    const CAMPAIGN_NEGATIVE_SITES = 'CampaignNegativeSites';
    /** Include an ad group's negative site URLs in the download data. */
    const AD_GROUP_NEGATIVE_SITES = 'AdGroupNegativeSites';
    /** Include a record in the download that represents the association relationship between a campaign and a sitelink ad extension. */
    const CAMPAIGN_SITE_LINKS_AD_EXTENSIONS = 'CampaignSiteLinksAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and a product ad extension. */
    const CAMPAIGN_PRODUCT_AD_EXTENSIONS = 'CampaignProductAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and a location ad extension. */
    const CAMPAIGN_LOCATION_AD_EXTENSIONS = 'CampaignLocationAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and a call ad extension. */
    const CAMPAIGN_CALL_AD_EXTENSIONS = 'CampaignCallAdExtensions';
    /** Include an ad group's product targets in the download data. */
    const AD_GROUP_PRODUCT_TARGETS = 'AdGroupProductTargets';
    /** Include a record in the download that represents the association relationship between an ad group and a sitelink ad extension. */
    const AD_GROUP_SITE_LINKS_AD_EXTENSIONS = 'AdGroupSiteLinksAdExtensions';
    /** Include location ad extension library items in the download data. */
    const LOCATION_AD_EXTENSIONS = 'LocationAdExtensions';
    /** Include call ad extension library items in the download data. */
    const CALL_AD_EXTENSIONS = 'CallAdExtensions';
    /** Include site links ad extension library items in the download data. */
    const SITE_LINKS_AD_EXTENSIONS = 'SiteLinksAdExtensions';
    /** Include product ad extension library items in the download data. */
    const PRODUCT_AD_EXTENSIONS = 'ProductAdExtensions';
    /** Include negative keyword list library items in the download data. */
    const NEGATIVE_KEYWORD_LISTS = 'NegativeKeywordLists';
    /** Include the negative keywords of a negative keyword list in the download data. */
    const SHARED_NEGATIVE_KEYWORDS = 'SharedNegativeKeywords';
    /** Include a record in the download that represents the association relationship between a campaign and a negative keyword list. */
    const CAMPAIGN_NEGATIVE_KEYWORD_LIST_ASSOCIATIONS = 'CampaignNegativeKeywordListAssociations';
    /** Include image ad extension library items in the download data. */
    const IMAGE_AD_EXTENSIONS = 'ImageAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and an image ad extension. */
    const CAMPAIGN_IMAGE_AD_EXTENSIONS = 'CampaignImageAdExtensions';
    /** Include a record in the download that represents the association relationship between an ad group and an image ad extension. */
    const AD_GROUP_IMAGE_AD_EXTENSIONS = 'AdGroupImageAdExtensions';
    /** Include app ad extension library items in the download data. */
    const APP_AD_EXTENSIONS = 'AppAdExtensions';
    /** Include a record in the download that represents the association relationship between an ad group and an app ad extension. */
    const AD_GROUP_APP_AD_EXTENSIONS = 'AdGroupAppAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and an app ad extension. */
    const CAMPAIGN_APP_AD_EXTENSIONS = 'CampaignAppAdExtensions';
}
