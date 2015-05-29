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
    /**
     * The identifier of the customer whose accounts you want to get.
     *
     * @var int
     */
    public $CustomerId;
    /**
     * The criteria to use to filter the list of accounts.
     *
     * @var string
     */
    public $AccountFilter;
    /**
     * A nonzero positive integer that specifies the number of accounts to return in the result.
     *
     * @var int
     */
    public $TopN;
    /**
     * A value that determines whether to return advertiser accounts or publisher accounts.
     *
     * @var ApplicationType
     */
    public $ApplicationScope;
}
