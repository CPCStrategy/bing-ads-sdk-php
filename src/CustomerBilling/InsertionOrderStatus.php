<?php

namespace BingAds\CustomerBilling;

/**
 * Defines the possible status values of an InsertionOrder.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743761(v=msads.90).aspx InsertionOrderStatus Value Set
 *
 * @used-by InsertionOrder
 */
final class InsertionOrderStatus
{
    /** A super admin of the bill-to customer added the insertion order, and the insertion order is pending account manager approval. */
    const PENDING_SYSTEM_REVIEW = 'PendingSystemReview';
    /** An account manager added the insertion order, and the insertion order is pending approval from the super admin of the bill-to customer. */
    const PENDING_USER_REVIEW = 'PendingUserReview';
    /** The insertion order is active, which means that the account and its campaigns will begin showing ads once the start date is reached. */
    const ACTIVE = 'Active';
    /** Either the super admin of the bill-to customer or the account manager declined the insertion order. */
    const DECLINED = 'Declined';
    /** The end date or spend limit of the insertion order is reached, which means that the insertion order is expired or inactive. */
    const EXPIRED = 'Expired';
    /** Either the super admin of the bill-to customer or the account manager canceled the insertion order. */
    const CANCELED = 'Canceled';
}
