<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines a specific geographical radius target with bid adjustment.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.100).aspx RadiusTargetBid Data Object
 * 
 * @uses DistanceUnit
 * @used-by RadiusTarget
 */
final class RadiusTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted geographical location radius.
     *
     * @var int
     */
    public $BidAdjustment;
    /**
     * Reserved for future use.
     *
     * @var int
     */
    public $Id;
    /**
     * Reserved for future use.
     *
     * @var bool
     */
    public $IsExcluded;
    /**
     * The latitude, in degrees, of the target location.
     *
     * @var float
     */
    public $LatitudeDegrees;
    /**
     * The longitude, in degrees, of the target location.
     *
     * @var float
     */
    public $LongitudeDegrees;
    /**
     * The name of the geographical location being targeted.
     *
     * @var string
     */
    public $Name;
    /**
     * The radius that specifies the area surrounding the geographical location to target.
     *
     * @var float
     */
    public $Radius;
    /**
     * The unit of measurement for the specified radius, for example kilometers or miles.
     *
     * @var DistanceUnit
     */
    public $RadiusUnit;
}
