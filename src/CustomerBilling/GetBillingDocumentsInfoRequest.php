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
    public $AccountIds;
    public $StartDate;
    public $EndDate;
}
