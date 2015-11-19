<?php

namespace BingAds\CampaignManagement;

/**
 * Represents a date.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671903(v=msads.100).aspx Date Data Object
 * 
 * @used-by AdGroup
 */
final class Date
{
    /**
     * Specifies the day of the month.
     *
     * @var int
     */
    public $Day;
    /**
     * Specifies the month.
     *
     * @var int
     */
    public $Month;
    /**
     * Specifies the year.
     *
     * @var int
     */
    public $Year;
}
