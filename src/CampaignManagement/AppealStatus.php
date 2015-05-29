<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the values that you use to determine whether an editorial rejection is appealable.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj631643(v=msads.90).aspx AppealStatus Value Set
 *
 * @used-by EditorialReasonCollection
 */
final class AppealStatus
{
    /** The editorial rejection is appealable. */
    const APPEALABLE = 'Appealable';
    /** The editorial rejection is appealable and an appeal has been submitted. */
    const APPEAL_PENDING = 'AppealPending';
    /** The editorial rejection is not appealable. */
    const NOT_APPEALABLE = 'NotAppealable';
}
