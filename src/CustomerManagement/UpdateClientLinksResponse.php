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
    /**
     * A list of one or more reasons why the service operation failed, and no client links were added.
     *
     * @var OperationError[]
     */
    public $OperationErrors;
    /**
     * An array of OperationError lists that contain details for any client links that were not successfully added.
     *
     * @var OperationError[][]
     */
    public $PartialErrors;
}
