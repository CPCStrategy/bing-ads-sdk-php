<?php

namespace BingAds\CustomerManagement;

/**
 * Sends an invitation for a Microsoft account user to manage one or more Bing Ads customer accounts.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn789440(v=msads.90).aspx SendUserInvitation Response Object
 * 
 * @used-by BingAdsCustomerManagementService::SendUserInvitation
 */
final class SendUserInvitationResponse
{
    public $UserInvitationId;
}
