<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible search networks on which an ad can display.
 *
 * @link http://msdn.microsoft.com/en-us/library/ff986253(v=msads.90).aspx Network Value Set
 *
 * @used-by AdGroup
 */
final class Network
{
    /** Display ads on owned and operated networks, as well as syndicated search networks. */
    const OWNED_AND_OPERATED_AND_SYNDICATED_SEARCH = 'OwnedAndOperatedAndSyndicatedSearch';
    /** Display ads on only owned and operated networks. */
    const OWNED_AND_OPERATED_ONLY = 'OwnedAndOperatedOnly';
    /** Display ads on only syndicated search networks. */
    const SYNDICATED_SEARCH_ONLY = 'SyndicatedSearchOnly';
}
