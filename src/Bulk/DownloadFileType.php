<?php

namespace BingAds\Bulk;

/**
 * Defines the file formats for a download request.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj919219(v=msads.90).aspx DownloadFileType Value Set
 *
 * @used-by DownloadCampaignsByAccountIdsRequest
 * @used-by DownloadCampaignsByCampaignIdsRequest
 */
final class DownloadFileType
{
    /** The file format is comma separated values (CSV). */
    const Csv = 'Csv';
    /** The file format is tab separated values (TSV). */
    const Tsv = 'Tsv';
}
