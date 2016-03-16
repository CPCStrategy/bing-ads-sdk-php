<?php

namespace BingAds\CustomerManagement;

/**
 * This feature is not supported in sandbox.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn632185(v=msads.90).aspx UpdateClientLinks Response Object
 * 
 * @uses OperationError
 * @used-by BingAdsCustomerManagementService::UpdateClientLinks
 */
final class UpdateClientLinksResponse
{
    public $OperationErrors;
    public $PartialErrors;
}
