<?php

namespace BingAds\CustomerManagement;

/**
 * Deletes an account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451272(v=msads.90).aspx DeleteAccount Request Object
 *
 * @used-by BingAdsCustomerManagementService::DeleteAccount
 */
final class DeleteAccountRequest
{
    /**
     * The identifier of the account to delete.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The time-stamp value that the operation uses to reconcile the update.
     *
     * @var base64Binary
     */
    public $TimeStamp;
}
