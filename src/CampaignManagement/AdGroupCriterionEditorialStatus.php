<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the editorial review status values of an ad group criterion.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn195643(v=msads.90).aspx AdGroupCriterionEditorialStatus Value Set
 *
 * @used-by BiddableAdGroupCriterion
 */
final class AdGroupCriterionEditorialStatus
{
    /** The criterion passed editorial review. */
    const ACTIVE = 'Active';
    /** The criterion failed editorial review. */
    const DISAPPROVED = 'Disapproved';
    /** The criterion is undergoing editorial review. */
    const INACTIVE = 'Inactive';
    /** The criterion passed editorial review in one or more markets, and one or more elements of the criterion is undergoing editorial review in another market. */
    const ACTIVE_LIMITED = 'ActiveLimited';
}
