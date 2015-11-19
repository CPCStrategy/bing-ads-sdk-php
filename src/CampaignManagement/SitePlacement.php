<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a website placement bid.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd797248(v=msads.90).aspx SitePlacement Data Object
 * 
 * @uses Bid
 * @uses SitePlacementStatus
 * @used-by AddSitePlacementsRequest
 * @used-by GetSitePlacementsByAdGroupIdResponse
 * @used-by GetSitePlacementsByIdsResponse
 * @used-by UpdateSitePlacementsRequest
 */
final class SitePlacement
{
    /**
     * The bid for text ad space on the specified publisher's website.
     *
     * @var Bid
     */
    public $Bid;
    /**
     * A system-generated identifier that identifies this object.
     *
     * @var int
     */
    public $Id;
    /**
     * The identifier of the publisher website where you want to display your text ads.
     *
     * @var int
     */
    public $PlacementId;
    /**
     * The status of this site placement bid.
     *
     * @var SitePlacementStatus
     */
    public $Status;
    /**
     * The URL of the website where you want your text ads to display.
     *
     * @var string
     */
    public $Url;
}
