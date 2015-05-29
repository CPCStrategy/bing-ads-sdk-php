<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the time ranges that you can specify for time of the day targeting.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb672093(v=msads.90).aspx HourRange Value Set
 *
 * @used-by HourTargetBid
 */
final class HourRange
{
    /** Hours from 3:00 A. */
    const THREE_AMTO_SEVEN_AM = 'ThreeAMToSevenAM';
    /** Hours from 7:00 A. */
    const SEVEN_AMTO_ELEVEN_AM = 'SevenAMToElevenAM';
    /** Hours from 11:00 A. */
    const ELEVEN_AMTO_TWO_PM = 'ElevenAMToTwoPM';
    /** Hours from 2:00 P. */
    const TWO_PMTO_SIX_PM = 'TwoPMToSixPM';
    /** Hours from 6:00 P. */
    const SIX_PMTO_ELEVEN_PM = 'SixPMToElevenPM';
    /** Hours from 11:00 P. */
    const ELEVEN_PMTO_THREE_AM = 'ElevenPMToThreeAM';
}
