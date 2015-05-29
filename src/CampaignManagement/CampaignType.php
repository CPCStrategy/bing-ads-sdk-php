<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible campaign types.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913129(v=msads.90).aspx CampaignType Value Set
 *
 * @used-by Campaign
 * @used-by GetCampaignsByAccountIdRequest
 * @used-by GetCampaignsByIdsRequest
 */
final class CampaignType
{
    /** The campaign is a search and content campaign. */
    const SearchAndContent = 'SearchAndContent';
    /** The campaign is a Bing Shopping campaign. */
    const Shopping = 'Shopping';
}
