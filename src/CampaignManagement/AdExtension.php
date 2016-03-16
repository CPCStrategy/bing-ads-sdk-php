<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of an ad extension.
 *
 * @link http://msdn.microsoft.com/en-us/library/hh527708(v=msads.90).aspx AdExtension Data Object
 * 
 * @uses KeyValuePairOfstringstring
 * @uses AdExtensionStatus
 * @used-by AdExtensionAssociation
 * @used-by AddAdExtensionsRequest
 * @used-by GetAdExtensionsByIdsResponse
 * @used-by UpdateAdExtensionsRequest
 */
class AdExtension
{
    /**
     * The list of key and value strings for forward compatibility.
     *
     * @var KeyValuePairOfstringstring[]
     */
    public $ForwardCompatibilityMap;
    /**
     * The system-generated identifier of the ad extension.
     *
     * @var int
     */
    public $Id;
    /**
     * The status of the ad extension.
     *
     * @var AdExtensionStatus
     */
    public $Status;
    /**
     * The type of ad extension.
     *
     * @var string
     */
    public $Type;
    /**
     * The number of times the contents of the ad extension has been updated.
     *
     * @var int
     */
    public $Version;
}
