<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a collection of ad extensions that failed editorial review.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj134393(v=msads.90).aspx AdExtensionEditorialReasonCollection Data Object
 * 
 * @uses AdExtensionEditorialReason
 * @used-by GetAdExtensionsEditorialReasonsResponse
 */
final class AdExtensionEditorialReasonCollection
{
    /**
     * The identifier of the ad extension that failed editorial review.
     *
     * @var int
     */
    public $AdExtensionId;
    /**
     * A list of AdExtensionEditorialReason objects that identify the component of an ad extension that failed editorial review, and the reason for the failure.
     *
     * @var AdExtensionEditorialReason[]
     */
    public $Reasons;
}
