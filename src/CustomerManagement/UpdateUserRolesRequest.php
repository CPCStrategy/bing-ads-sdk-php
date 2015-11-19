<?php

namespace BingAds\CustomerManagement;

/**
 * Updates the roles of the specified user.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451284(v=msads.90).aspx UpdateUserRoles Request Object
 * 
 * @used-by BingAdsCustomerManagementService::UpdateUserRoles
 */
final class UpdateUserRolesRequest
{
    public $CustomerId;
    public $UserId;
    public $NewRoleId;
    public $NewAccountIds;
    public $NewCustomerIds;
    public $DeleteRoleId;
    public $DeleteAccountIds;
    public $DeleteCustomerIds;
}
