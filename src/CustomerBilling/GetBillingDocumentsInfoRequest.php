<?php

namespace BingAds\CustomerBilling;

/**
 * Gets a list of objects that contains billing document identification information, for example the billing document identifier, amount, and account identifier.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451271(v=msads.90).aspx GetBillingDocumentsInfo Request Object
 *
 * @used-by BingAdsCustomerBillingService::GetBillingDocumentsInfo
 */
final class GetBillingDocumentsInfoRequest
{
    /**
     * A list of identifiers of the accounts whose billing document information you want to get.
     *
     * @var integer[]
     */
    public $AccountIds;
    /**
     * The start date to use for specifying the billing documents to get.
     *
     * @var \DateTime
     */
    public $StartDate;
    /**
     * The end date to use for specifying the billing documents to get.
     *
     * @var \DateTime
     */
    public $EndDate;
}
