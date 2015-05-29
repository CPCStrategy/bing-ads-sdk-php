<?php

namespace BingAds\Reporting;

/**
 * Defines the types of entities by which you can filter the report data.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh912355(v=msads.90).aspx ChangeEntityReportFilter Value Set
 *
 * @used-by SearchCampaignChangeHistoryReportFilter
 */
final class ChangeEntityReportFilter
{
    /** The report will include data for accounts that have been added or deleted, or that have had account elements updated. */
    const ACCOUNT = 'Account';
    /** The report will include data for campaigns that have been added or deleted, or that have had campaign elements updated. */
    const CAMPAIGN = 'Campaign';
    /** The report will include data for ad groups that have been added or deleted, or that have had ad group elements updated. */
    const AD_GROUP = 'AdGroup';
    /** The report will include data for ads that have been added or deleted, or that have had ad elements updated. */
    const AD = 'Ad';
    /** The report will include data for keywords that have been added or deleted, or that have had keyword elements updated. */
    const KEYWORD = 'Keyword';
}
