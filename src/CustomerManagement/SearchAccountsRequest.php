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
    public $Predicates;
    public $Ordering;
    public $PageInfo;
}
