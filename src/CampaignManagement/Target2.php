<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the types of targeting that you can use to target your ads to users.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743781(v=msads.90).aspx Target2 Data Object
 *
 * @uses AgeTarget
 * @uses DayTimeTarget
 * @uses DeviceOSTarget
 * @uses KeyValuePairOfstringstring
 * @uses GenderTarget
 * @uses LocationTarget2
 * @uses NetworkTarget
 * @used-by AddTargetsToLibrary2Request
 * @used-by GetTargetsByAdGroupIds2Response
 * @used-by GetTargetsByCampaignIds2Response
 * @used-by GetTargetsByIds2Response
 * @used-by UpdateTargetsInLibrary2Request
 */
final class Target2
{
    /**
     * Targets ads to users within one or more age ranges.
     *
     * @var AgeTarget
     */
    public $Age;
    /**
     * Targets ads to run on specific days and hours of the week.
     *
     * @var DayTimeTarget
     */
    public $DayTime;
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
     * @var LocationTarget2
     */
    public $Location;
    /**
     * The name of the target.
     *
     * @var string
     */
    public $Name;
    /**
     * Targets ads to users within a specific search network.
     *
     * @var NetworkTarget
     */
    public $Network;
}
