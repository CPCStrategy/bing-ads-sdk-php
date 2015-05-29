<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an error object that identifies the entity with the batch of entities that failed editorial review.
 *
 * @link http://msdn.microsoft.com/en-us/library/cc197190(v=msads.90).aspx EditorialError Data Object
 *
 * @used-by EditorialApiFaultDetail
 */
final class EditorialError extends BatchError
{
    /**
     * Reserved for future use.
     *
     * @var bool
     */
    public $Appealable;
    /**
     * The text that caused the entity to be disapproved.
     *
     * @var string
     */
    public $DisapprovedText;
    /**
     * The element or property of the entity that caused the entity to be disapproved.
     *
     * @var string
     */
    public $Location;
    /**
     * The corresponding country or region for the flagged editorial issue.
     *
     * @var string
     */
    public $PublisherCountry;
    /**
     * A numeric code that identifies the error.
     *
     * @var int
     */
    public $ReasonCode;
}
