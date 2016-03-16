<?php

namespace BingAds\CustomerBilling;

/**
 * Defines an insertion order.
 *
 * @link http://msdn.microsoft.com/en-us/library/ff728378(v=msads.90).aspx InsertionOrder Data Object
 * 
 * @uses InsertionOrderStatus
 * @used-by AddInsertionOrderRequest
 * @used-by GetInsertionOrdersByAccountResponse
 * @used-by SearchInsertionOrdersResponse
 * @used-by UpdateInsertionOrderRequest
 */
final class InsertionOrder
{
    /**
     * The identifier of the account to which the insertion order applies.
     *
     * @var int
     */
    public $AccountId;
    /**
     * The running balance of the insertion order.
     *
     * @var float
     */
    public $BalanceAmount;
    /**
     * A code that identifies the country/region in which the account operates.
     *
     * @var string
     */
    public $BookingCountryCode;
    /**
     * A description of the insertion order.
     *
     * @var string
     */
    public $Comment;
    /**
     * The date that the insertion order expires.
     *
     * @var \DateTime
     */
    public $EndDate;
    /**
     * A system generated identifier that identifies the insertion order.
     *
     * @var int
     */
    public $InsertionOrderId;
    /**
     * An identifier of the last user to update the insertion order.
     *
     * @var int
     */
    public $LastModifiedByUserId;
    /**
     * The date and time that the insertion order was last updated.
     *
     * @var \DateTime
     */
    public $LastModifiedTime;
    /**
     * A percentage of the budget that has been spent.
     *
     * @var float
     */
    public $NotificationThreshold;
    /**
     * Internal use only.
     *
     * @var int
     */
    public $ReferenceId;
    /**
     * The budget for this insertion order.
     *
     * @var float
     */
    public $SpendCapAmount;
    /**
     * The date that the insertion order can begin accruing charges.
     *
     * @var \DateTime
     */
    public $StartDate;
    /**
     * The friendly name that can be used to reference this insertion order.
     *
     * @var string
     */
    public $Name;
    /**
     * The status of the insertion order.
     *
     * @var InsertionOrderStatus
     */
    public $Status;
    /**
     * A purchase order value that can be used to reference this insertion order in monthly invoices.
     *
     * @var string
     */
    public $PurchaseOrder;
}
