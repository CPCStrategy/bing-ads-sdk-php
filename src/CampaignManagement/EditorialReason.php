<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
 *
 * @link http://msdn.microsoft.com/en-us/library/ff728493(v=msads.90).aspx EditorialReason Data Object
 * 
 * @used-by EditorialReasonCollection
 */
final class EditorialReason
{
    /**
     * The component of the ad or keyword that failed editorial review.
     *
     * @var string
     */
    public $Location;
    /**
     * A list of countries where the ad or keyword failed editorial review.
     *
     * @var string[]
     */
    public $PublisherCountries;
    /**
     * A code that identifies the reason for the failure.
     *
     * @var int
     */
    public $ReasonCode;
    /**
     * The term that failed editorial review.
     *
     * @var string
     */
    public $Term;
}
