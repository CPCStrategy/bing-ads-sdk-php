<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that you can use to determine the component of an ad extension that failed editorial review, and the reason for the failure.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj134398(v=msads.90).aspx AdExtensionEditorialReason Data Object
 *
 * @used-by AdExtensionEditorialReasonCollection
 */
final class AdExtensionEditorialReason
{
    /**
     * The component of the ad extension that failed editorial review.
     *
     * @var string
     */
    public $Location;
    /**
     * The list of publisher countries whose editorial guidelines do not allow the specified term.
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
