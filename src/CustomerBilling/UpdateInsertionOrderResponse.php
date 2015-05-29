<?php

namespace BingAds\CustomerBilling;

/**
 * Updates an insertion order within the specified account.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743760(v=msads.90).aspx UpdateInsertionOrder Response Object
 *
 * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
 */
final class UpdateInsertionOrderResponse
{
    /**
     * Identifies the server time in UTC when the insertion order was last modified.
     *
     * @var \DateTime
     */
    public $LastModifiedTime;
}
