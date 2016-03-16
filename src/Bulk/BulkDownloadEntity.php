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
    const Campaigns = 'Campaigns';
    /** Include ad groups in the download data. */
    const AdGroups = 'AdGroups';
    /** Include ads in the download data. */
    const Ads = 'Ads';
    /** Include keywords in the download data. */
    const Keywords = 'Keywords';
    /** Include a campaign's negative keywords in the download data. */
    const CampaignNegativeKeywords = 'CampaignNegativeKeywords';
    /** Include an ad group's negative keywords in the download data. */
    const AdGroupNegativeKeywords = 'AdGroupNegativeKeywords';
    /** Include a campaign's targets in the download data. */
    const CampaignTargets = 'CampaignTargets';
    /** Include an ad group's targets in the download data. */
    const AdGroupTargets = 'AdGroupTargets';
    /** Include a campaign's negative site URLs in the download data. */
    const CampaignNegativeSites = 'CampaignNegativeSites';
    /** Include an ad group's negative site URLs in the download data. */
    const AdGroupNegativeSites = 'AdGroupNegativeSites';
    /** Include a record in the download that represents the association relationship between a campaign and a sitelink ad extension. */
    const CampaignSiteLinksAdExtensions = 'CampaignSiteLinksAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and a product ad extension. */
    const CampaignProductAdExtensions = 'CampaignProductAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and a location ad extension. */
    const CampaignLocationAdExtensions = 'CampaignLocationAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and a call ad extension. */
    const CampaignCallAdExtensions = 'CampaignCallAdExtensions';
    /** Include an ad group's product targets in the download data. */
    const AdGroupProductTargets = 'AdGroupProductTargets';
    /** Include a record in the download that represents the association relationship between an ad group and a sitelink ad extension. */
    const AdGroupSiteLinksAdExtensions = 'AdGroupSiteLinksAdExtensions';
    /** Include location ad extension library items in the download data. */
    const LocationAdExtensions = 'LocationAdExtensions';
    /** Include call ad extension library items in the download data. */
    const CallAdExtensions = 'CallAdExtensions';
    /** Include site links ad extension library items in the download data. */
    const SiteLinksAdExtensions = 'SiteLinksAdExtensions';
    /** Include product ad extension library items in the download data. */
    const ProductAdExtensions = 'ProductAdExtensions';
    /** Include negative keyword list library items in the download data. */
    const NegativeKeywordLists = 'NegativeKeywordLists';
    /** Include the negative keywords of a negative keyword list in the download data. */
    const SharedNegativeKeywords = 'SharedNegativeKeywords';
    /** Include a record in the download that represents the association relationship between a campaign and a negative keyword list. */
    const CampaignNegativeKeywordListAssociations = 'CampaignNegativeKeywordListAssociations';
    /** Include image ad extension library items in the download data. */
    const ImageAdExtensions = 'ImageAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and an image ad extension. */
    const CampaignImageAdExtensions = 'CampaignImageAdExtensions';
    /** Include a record in the download that represents the association relationship between an ad group and an image ad extension. */
    const AdGroupImageAdExtensions = 'AdGroupImageAdExtensions';
    /** Include app ad extension library items in the download data. */
    const AppAdExtensions = 'AppAdExtensions';
    /** Include a record in the download that represents the association relationship between an ad group and an app ad extension. */
    const AdGroupAppAdExtensions = 'AdGroupAppAdExtensions';
    /** Include a record in the download that represents the association relationship between a campaign and an app ad extension. */
    const CampaignAppAdExtensions = 'CampaignAppAdExtensions';
    /** Include an ad group's product partitions in the download data. */
    const AdGroupProductPartitions = 'AdGroupProductPartitions';
    /** Include a campaign's product scopes in the download data. */
    const CampaignProductScopes = 'CampaignProductScopes';
}
