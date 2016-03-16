<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.90).aspx GetCustomersInfo Request Object
 * 
 * @uses ApplicationType
 * @used-by BingAdsCustomerManagementService::GetCustomersInfo
 */
final class GetCustomersInfoRequest
{
    public $CustomerNameFilter;
    public $TopN;
    public $ApplicationScope;
}
