<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the types of targeting that you can use to target your ads to users.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671789(v=msads.90).aspx Target Data Object
 *
 * @uses AgeTarget
 * @uses DayTarget
 * @uses DeviceOSTarget
 * @uses KeyValuePairOfstringstring
 * @uses GenderTarget
 * @uses HourTarget
 * @uses LocationTarget
 * @used-by AddTargetsToLibraryRequest
 * @used-by GetTargetsByAdGroupIdsResponse
 * @used-by GetTargetsByCampaignIdsResponse
 * @used-by GetTargetsByIdsResponse
 * @used-by UpdateTargetsInLibraryRequest
 */
final class Target
{
    /**
     * Targets ads to users within one or more age ranges.
     *
     * @var AgeTarget
     */
    public $Age;
    /**
     * Targets ads to run on specific days of the week.
     *
     * @var DayTarget
     */
    public $Day;
    /**
     * Targets ads to serve on specific devices.
     *
     * @var DeviceOSTarget
     */
    public $DeviceOS;
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * Targets ads to men only or women only.
     *
     * @var GenderTarget
     */
    public $Gender;
    /**
     * Targets ads to run at specific times of the day.
     *
     * @var HourTarget
     */
    public $Hour;
    /**
     * A system-generated identifier that identifies this target object.
     *
     * @var int
     */
    public $Id;
    /**
     * Determines whether the target library contains this target object.
     *
     * @var bool
     */
    public $IsLibraryTarget;
    /**
     * Targets ads to users within a specific location; for example, users within a certain radius of your business or within a specific state.
     *
     * @var LocationTarget
     */
    public $Location;
    /**
     * The name of the target.
     *
     * @var string
     */
    public $Name;
}
