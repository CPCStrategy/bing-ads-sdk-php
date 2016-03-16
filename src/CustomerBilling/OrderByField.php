<?php

namespace BingAds\CustomerBilling;

/**
 * Defines the field order of insertion orders returned using SearchInsertionOrders.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743750(v=msads.90).aspx OrderByField Value Set
 * 
 * @used-by OrderBy
 */
final class OrderByField
{
    /** The order is determined by a predicate identifier. */
    const Id = 'Id';
    /** The order is determined by a predicate name. */
    const Name = 'Name';
    /** The order is determined by a predicate number. */
    const Number = 'Number';
    /** The order is determined by a predicate life cycle status. */
    const LifeCycleStatus = 'LifeCycleStatus';
}
