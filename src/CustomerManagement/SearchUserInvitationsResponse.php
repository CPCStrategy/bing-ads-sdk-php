<?php

namespace BingAds\CustomerManagement;

/**
 * Searches for user invitations that match a specified criteria.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn771300(v=msads.90).aspx SearchUserInvitations Response Object
 * 
 * @uses UserInvitation
 * @used-by BingAdsCustomerManagementService::SearchUserInvitations
 */
final class SearchUserInvitationsResponse
{
    public $UserInvitations;
}
