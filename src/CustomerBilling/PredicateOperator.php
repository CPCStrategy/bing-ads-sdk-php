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
    const Equals = 'Equals';
    const NotEquals = 'NotEquals';
    const Contains = 'Contains';
    const In = 'In';
    const GreaterThanEquals = 'GreaterThanEquals';
    const LessThanEquals = 'LessThanEquals';
    const StartsWith = 'StartsWith';
    const NotContains = 'NotContains';
}
