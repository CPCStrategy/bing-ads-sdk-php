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
    public $AccountId;
    public $TimeStamp;
}
