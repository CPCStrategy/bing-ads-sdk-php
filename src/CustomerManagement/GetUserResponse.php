<?php

namespace BingAds\CustomerManagement;

/**
 * Gets the details of a user.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451280(v=msads.90).aspx GetUser Response Object
 * 
 * @uses User
 * @used-by BingAdsCustomerManagementService::GetUser
 */
final class GetUserResponse
{
    public $User;
    public $Roles;
    public $Accounts;
    public $Customers;
}
