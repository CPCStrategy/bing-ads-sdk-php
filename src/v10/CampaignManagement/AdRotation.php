<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines an object that specifies the type of ad rotation to apply to the ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj219952(v=msads.100).aspx AdRotation Data Object
 * 
 * @uses AdRotationType
 * @used-by AdGroup
 */
final class AdRotation
{
    /**
     * For future use only.
     *
     * @var \DateTime
     */
    public $EndDate;
    /**
     * For future use only.
     *
     * @var \DateTime
     */
    public $StartDate;
    /**
     * The type of ad rotation to apply to the ad group.
     *
     * @var AdRotationType
     */
    public $Type;
}
