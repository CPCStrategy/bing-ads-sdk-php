<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible age range values that you can use to target ads to users.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671742(v=msads.90).aspx AgeRange Value Set
 *
 * @used-by AgeTargetBid
 */
final class AgeRange
{
    /** Users from the ages of 18 through 24 years. */
    const EIGHTEEN_TO_TWENTY_FIVE = 'EighteenToTwentyFive';
    /** Users from the ages of 25 through 34 years. */
    const TWENTY_FIVE_TO_THIRTY_FIVE = 'TwentyFiveToThirtyFive';
    /** Users from the ages of 35 through 49 years. */
    const THIRTY_FIVE_TO_FIFTY = 'ThirtyFiveToFifty';
    /** Users from the ages of 50 through 64 years. */
    const FIFTY_TO_SIXTY_FIVE = 'FiftyToSixtyFive';
    /** Users 65 years of age and older. */
    const SIXTY_FIVE_AND_ABOVE = 'SixtyFiveAndAbove';
}
