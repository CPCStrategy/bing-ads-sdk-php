<?php

namespace BingAds\CustomerManagement;

/**
 * This feature is not supported in sandbox.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn632187(v=msads.90).aspx AddClientLinks Response Object
 * 
 * @uses OperationError
 * @used-by BingAdsCustomerManagementService::AddClientLinks
 */
final class AddClientLinksResponse
{
    public $OperationErrors;
    public $PartialErrors;
}
