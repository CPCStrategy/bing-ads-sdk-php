<?php

namespace BingAds\CustomerManagement;

/**
 * Searches for accounts that match a specified criteria.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743757(v=msads.90).aspx SearchAccounts Request Object
 *
 * @uses Predicate
 * @uses OrderBy
 * @uses Paging
 * @used-by BingAdsCustomerManagementService::SearchAccounts
 */
final class SearchAccountsRequest
{
    /**
     * Determines the request conditions.
     *
     * @var Predicate[]
     */
    public $Predicates;
    /**
     * Determines the order of results by the specified property of an account.
     *
     * @var OrderBy[]
     */
    public $Ordering;
    /**
     * Determines the index and size of results per page.
     *
     * @var Paging
     */
    public $PageInfo;
}
