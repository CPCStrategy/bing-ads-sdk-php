<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible intent options for location targeting, for example to target people in, searching for, or viewing pages about your targeted location.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743742(v=msads.90).aspx IntentOption Value Set
 *
 * @used-by LocationTarget2
 */
final class IntentOption
{
    /** Show ads to people in, searching for, or viewing pages about your targeted location. */
    const PEOPLE_IN_OR_SEARCHING_FOR_OR_VIEWING_PAGES = 'PeopleInOrSearchingForOrViewingPages';
    /** Show ads to people in your targeted location. */
    const PEOPLE_IN = 'PeopleIn';
    /** Show ads to people searching for or viewing pages about your targeted location. */
    const PEOPLE_SEARCHING_FOR_OR_VIEWING_PAGES = 'PeopleSearchingForOrViewingPages';
}
