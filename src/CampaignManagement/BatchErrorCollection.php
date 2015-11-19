<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an error object that contains batch error details for the top level list index and a list of batch errors corresponding to the nested list index.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743731(v=msads.90).aspx BatchErrorCollection Data Object
 * 
 * @uses BatchError
 * @used-by AddCampaignCriterionsResponse
 * @used-by AddNegativeKeywordsToEntitiesResponse
 * @used-by DeleteNegativeKeywordsFromEntitiesResponse
 * @used-by UpdateCampaignCriterionsResponse
 */
final class BatchErrorCollection
{
    /**
     * A list of batch errors corresponding to the nested list index.
     *
     * @var BatchError[]
     */
    public $BatchErrors;
    /**
     * A numeric error code that identifies the error for the top level list index.
     *
     * @var int
     */
    public $Code;
    /**
     * A message that provides additional details about the batch error for the top level list index.
     *
     * @var string
     */
    public $Details;
    /**
     * A symbolic string constant that identifies the error for the top level list index.
     *
     * @var string
     */
    public $ErrorCode;
    /**
     * The zero-based top level list index in the request message that failed.
     *
     * @var int
     */
    public $Index;
    /**
     * A message that describes the error for the top level list index.
     *
     * @var string
     */
    public $Message;
}
