<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the condition of results for one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn518214(v=msads.90).aspx PredicateOperator Value Set
 *
 * @used-by Predicate
 */
final class PredicateOperator
{
    const EQUALS = 'Equals';
    const NOT_EQUALS = 'NotEquals';
    const CONTAINS = 'Contains';
    const IN = 'In';
    const GREATER_THAN_EQUALS = 'GreaterThanEquals';
    const LESS_THAN_EQUALS = 'LessThanEquals';
    const STARTS_WITH = 'StartsWith';
    const NOT_CONTAINS = 'NotContains';
}
