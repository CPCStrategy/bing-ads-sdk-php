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
    /**
     * The identifier of the user to delete.
     *
     * @var int
     */
    public $UserId;
    /**
     * The time-stamp value that the operation uses to reconcile the update.
     *
     * @var base64Binary
     */
    public $TimeStamp;
}
