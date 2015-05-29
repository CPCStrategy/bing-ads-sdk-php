<?php

namespace BingAds\CustomerBilling;

/**
 * Defines the ascending or descending sort order of results for SearchInsertionOrders.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743751(v=msads.90).aspx SortOrder Value Set
 *
 * @used-by OrderBy
 */
final class SortOrder
{
    const ASCENDING = 'Ascending';
    const DESCENDING = 'Descending';
}
