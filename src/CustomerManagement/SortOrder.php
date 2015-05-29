<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the ascending or descending sort order of results for one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn452061(v=msads.90).aspx SortOrder Value Set
 *
 * @used-by OrderBy
 */
final class SortOrder
{
    const Ascending = 'Ascending';
    const Descending = 'Descending';
}
