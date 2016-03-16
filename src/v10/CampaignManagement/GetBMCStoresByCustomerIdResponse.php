<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Gets the Bing Merchant Center stores for the specified customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.100).aspx GetBMCStoresByCustomerId Response Object
 * 
 * @uses BMCStore
 * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
 */
final class GetBMCStoresByCustomerIdResponse
{
    public $BMCStores;
}
