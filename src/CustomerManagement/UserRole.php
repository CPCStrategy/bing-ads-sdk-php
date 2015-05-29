<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible roles of a user.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee704157(v=msads.90).aspx UserRole Value Set
 *
 * @used-by UserInvitation
 */
final class UserRole
{
    const ADVERTISER_CAMPAIGN_MANAGER = 'AdvertiserCampaignManager';
    const SUPER_ADMIN = 'SuperAdmin';
    const CLIENT_VIEWER = 'ClientViewer';
    const CLIENT_MANAGER = 'ClientManager';
    const PUBLISHER_ADMIN = 'PublisherAdmin';
    const PUBLISHER_ACCOUNT_MANAGER = 'PublisherAccountManager';
    const PUBLISHER_REPORT_USER = 'PublisherReportUser';
    const PUBLISHER_LIST_MANAGER = 'PublisherListManager';
    const PUBLISHER_AD_VIEWER = 'PublisherAdViewer';
    const CLIENT_ADMIN = 'ClientAdmin';
}
