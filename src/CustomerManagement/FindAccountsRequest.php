<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of accounts owned by the specified customer that match the specified filter criteria.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451274(v=msads.90).aspx FindAccounts Request Object
 * 
 * @uses ApplicationType
 * @used-by BingAdsCustomerManagementService::FindAccounts
 */
final class FindAccountsRequest
{
    public $CustomerId;
    public $AccountFilter;
    public $TopN;
    public $ApplicationScope;
}
