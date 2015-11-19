<?php

namespace BingAds\CustomerManagement;

/**
 * This feature is not supported in sandbox.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn632186(v=msads.90).aspx SearchClientLinks Response Object
 * 
 * @uses ClientLink
 * @used-by BingAdsCustomerManagementService::SearchClientLinks
 */
final class SearchClientLinksResponse
{
    public $ClientLinks;
}
