<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of a criterion.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj738613(v=msads.90).aspx Criterion Data Object
 *
 * @used-by AdGroupCriterion
 * @used-by CampaignCriterion
 */
class Criterion
{
    /**
     * The type of criterion.
     *
     * @var string
     */
    public $Type;
}
