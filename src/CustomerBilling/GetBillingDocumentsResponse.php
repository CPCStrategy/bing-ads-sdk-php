<?php

namespace BingAds\CustomerBilling;

/**
 * Gets the specified billing documents.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocuments Response Object
 * 
 * @uses BillingDocument
 * @used-by BingAdsCustomerBillingService::GetBillingDocuments
 */
final class GetBillingDocumentsResponse
{
    public $BillingDocuments;
}
