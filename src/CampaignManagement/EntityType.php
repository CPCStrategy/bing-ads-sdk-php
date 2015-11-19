<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible types of entities.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj622172(v=msads.100).aspx EntityType Value Set
 * 
 * @used-by AppealEditorialRejectionsRequest
 * @used-by GetEditorialReasonsByIdsRequest
 */
final class EntityType
{
    /** The entity is a Campaign object. */
    const Campaign = 'Campaign';
    /** The entity is an AdGroup object. */
    const AdGroup = 'AdGroup';
    /** The entity is a Target object. */
    const Target = 'Target';
    /** The entity is an Ad object or an object that derives from it, such as the TextAd object. */
    const Ad = 'Ad';
    /** The entity is a Keyword object. */
    const Keyword = 'Keyword';
    /** For future use. */
    const AdExtension = 'AdExtension';
    const AdGroupCriterion = 'AdGroupCriterion';
}
