<?php

namespace BingAds\CustomerManagement;

/**
 * Defines an advertiser account.
 *
 * @link http://msdn.microsoft.com/en-us/library/ee704163(v=msads.90).aspx AdvertiserAccount Data Object
 *
 * @uses TaxType
 */
final class AdvertiserAccount extends Account
{
    /**
     * The name of the person to contact regarding this account.
     *
     * @var string
     */
    public $AgencyContactName;
    /**
     * The identifier of the agency that manages an account on behalf of the owner of that account.
     *
     * @var int
     */
    public $AgencyCustomerId;
    /**
     * The identifier of the third party that is responsible for a sales lead.
     *
     * @var int
     */
    public $SalesHouseCustomerId;
    /**
     * For internal use only.
     *
     * @var string
     */
    public $TaxId;
    /**
     * For internal use only.
     *
     * @var TaxType
     */
    public $TaxType;
    /**
     * The identifier of a backup payment instrument to use to settle the account.
     *
     * @var int
     */
    public $BackUpPaymentInstrumentId;
    /**
     * A customer specified amount for settling against the selected payment instrument.
     *
     * @var float
     */
    public $BillingThresholdAmount;
}
