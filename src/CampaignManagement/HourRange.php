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
    const ThreeAMToSevenAM = 'ThreeAMToSevenAM';
    /** Hours from 7:00 A. */
    const SevenAMToElevenAM = 'SevenAMToElevenAM';
    /** Hours from 11:00 A. */
    const ElevenAMToTwoPM = 'ElevenAMToTwoPM';
    /** Hours from 2:00 P. */
    const TwoPMToSixPM = 'TwoPMToSixPM';
    /** Hours from 6:00 P. */
    const SixPMToElevenPM = 'SixPMToElevenPM';
    /** Hours from 11:00 P. */
    const ElevenPMToThreeAM = 'ElevenPMToThreeAM';
}
