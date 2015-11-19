<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values that indicate the progress of determining the latitude and longitude values of a business.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796820(v=msads.90).aspx BusinessGeoCodeStatus Value Set
 *
 * @used-by LocationAdExtension
 */
final class BusinessGeoCodeStatus
{
    /** In the process of determining the latitude and longitude of the business. */
    const Pending = 'Pending';
    /** Successfully determined the latitude and longitude of the business. */
    const Complete = 'Complete';
    /** Unable to determine the latitude and longitude of the business, possibly because the address did not resolve. */
    const Invalid = 'Invalid';
    /** Unable to determine the latitude and longitude of the business. */
    const Failed = 'Failed';
}
