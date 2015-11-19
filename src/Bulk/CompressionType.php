<?php

namespace BingAds\Bulk;

/**
 * Defines the possible compression types for the file to download.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt179363(v=msads.100).aspx CompressionType Value Set
 * 
 * @used-by DownloadCampaignsByAccountIdsRequest
 * @used-by DownloadCampaignsByCampaignIdsRequest
 */
final class CompressionType
{
    /** The file should be ZIP compressed. */
    const Zip = 'Zip';
    /** The file should be GZIP compressed. */
    const GZip = 'GZip';
}
