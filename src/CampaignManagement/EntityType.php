<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible types of entities.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj622172(v=msads.90).aspx EntityType Value Set
 *
 * @used-by AppealEditorialRejectionsRequest
 * @used-by GetEditorialReasonsByIdsRequest
 */
final class EntityType
{
    /** The entity is a Campaign object. */
    const CAMPAIGN = 'Campaign';
    /** The entity is an AdGroup object. */
    const AD_GROUP = 'AdGroup';
    /** The entity is a Target object. */
    const TARGET = 'Target';
    /** The entity is an Ad object or an object that derives from it, such as the TextAd object. */
    const AD = 'Ad';
    /** The entity is a Keyword object. */
    const KEYWORD = 'Keyword';
    /** For future use. */
    const AD_EXTENSION = 'AdExtension';
    const AD_GROUP_CRITERION = 'AdGroupCriterion';
}
