<?php

namespace BingAds\CustomerManagement;

/**
 * Deletes a user.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451276(v=msads.90).aspx DeleteUser Request Object
 * 
 * @used-by BingAdsCustomerManagementService::DeleteUser
 */
final class DeleteUserRequest
{
    public $UserId;
    public $TimeStamp;
}
