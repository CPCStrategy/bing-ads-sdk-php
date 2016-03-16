<?php

namespace BingAds\CustomerBilling;

/**
 * Gets the specified billing documents.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocuments Request Object
 * 
 * @uses DataType
 * @used-by BingAdsCustomerBillingService::GetBillingDocuments
 */
final class GetBillingDocumentsRequest
{
    public $DocumentIds;
    public $Type;
}
