<?php

namespace BingAds\CustomerBilling;

/**
 * Defines a paging object for the list of insertion orders returned using SearchInsertionOrders.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743749(v=msads.90).aspx Paging Data Object
 *
 * @used-by SearchInsertionOrdersRequest
 */
final class Paging
{
    /**
     * The zero-based results page index.
     *
     * @var int
     */
    public $Index;
    /**
     * The page size and the number of results to return in the specified page.
     *
     * @var int
     */
    public $Size;
}
