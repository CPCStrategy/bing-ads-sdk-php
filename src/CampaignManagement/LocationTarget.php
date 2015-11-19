<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that can contain different types of geographical targets, for example lists of city and state targets.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671646(v=msads.100).aspx LocationTarget Data Object
 * 
 * @uses CityTarget
 * @uses CountryTarget
 * @uses IntentOption
 * @uses MetroAreaTarget
 * @uses PostalCodeTarget
 * @uses RadiusTarget
 * @uses StateTarget
 * @used-by Target
 */
final class LocationTarget
{
    /**
     * The cities to target.
     *
     * @var CityTarget
     */
    public $CityTarget;
    /**
     * The countries/regions to target.
     *
     * @var CountryTarget
     */
    public $CountryTarget;
    /**
     * Determines whether the audience must be physically located in the targeted location in order for the ad to display.
     *
     * @var IntentOption
     */
    public $IntentOption;
    /**
     * The metropolitan areas to target.
     *
     * @var MetroAreaTarget
     */
    public $MetroAreaTarget;
    /**
     * The postal codes to target.
     *
     * @var PostalCodeTarget
     */
    public $PostalCodeTarget;
    /**
     * The geographical locations to target.
     *
     * @var RadiusTarget
     */
    public $RadiusTarget;
    /**
     * The states, provinces, or territories to target.
     *
     * @var StateTarget
     */
    public $StateTarget;
}
