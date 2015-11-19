<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible application types.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee704168(v=msads.90).aspx ApplicationType Value Set
 * 
 * @used-by User
 * @used-by FindAccountsRequest
 * @used-by FindAccountsOrCustomersInfoRequest
 * @used-by GetCustomersInfoRequest
 * @used-by SearchCustomersRequest
 * @used-by SignupCustomerRequest
 */
final class ApplicationType
{
    /** An advertiser application. */
    const Advertiser = 'Advertiser';
}
