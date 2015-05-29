<?php

namespace BingAds\Optimizer;

/**
 * Defines the possible values of a campaign budget point.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn434661(v=msads.90).aspx BudgetPointType Value Set
 *
 * @used-by BudgetPoint
 */
final class BudgetPointType
{
    /** The budget point includes the current budget. */
    const CURRENT = 'Current';
    /** The budget point includes the optimal suggested budget. */
    const SUGGESTED = 'Suggested';
    /** The budget point includes the proposed budget which is estimated to yield the maximum number of clicks. */
    const MAXIMUM = 'Maximum';
    /** The budget point includes a proposed budget other than current, maximum, or suggested. */
    const OTHER = 'Other';
}
