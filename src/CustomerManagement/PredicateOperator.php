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
    const Equals = 'Equals';
    const NotEquals = 'NotEquals';
    const Contains = 'Contains';
    const In = 'In';
    const GreaterThanEquals = 'GreaterThanEquals';
    const LessThanEquals = 'LessThanEquals';
    const StartsWith = 'StartsWith';
    const NotContains = 'NotContains';
}
