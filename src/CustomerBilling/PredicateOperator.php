<?php

namespace BingAds\CustomerBilling;

/**
 * Defines the condition of results for insertion orders returned using SearchInsertionOrders.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743753(v=msads.90).aspx PredicateOperator Value Set
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
