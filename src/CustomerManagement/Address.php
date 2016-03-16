<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a postal address.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671505(v=msads.90).aspx Address Data Object
 * 
 * @used-by ContactInfo
 * @used-by Customer
 */
final class Address
{
    /**
     * The city, which can contain a maximum of 35 characters.
     *
     * @var string
     */
    public $City;
    /**
     * The country/region code.
     *
     * @var string
     */
    public $CountryCode;
    /**
     * The system generated identifier of the address object.
     *
     * @var int
     */
    public $Id;
    /**
     * The first line of the address, which can contain a maximum of 35 characters.
     *
     * @var string
     */
    public $Line1;
    /**
     * The second line of the address, which can contain a maximum of 35 characters.
     *
     * @var string
     */
    public $Line2;
    /**
     * The third line of the address, which can contain a maximum of 35 characters.
     *
     * @var string
     */
    public $Line3;
    /**
     * The fourth line of the address, which can contain a maximum of 35 characters.
     *
     * @var string
     */
    public $Line4;
    /**
     * The Postal or ZIP Code, which can contain a maximum of 10 characters.
     *
     * @var string
     */
    public $PostalCode;
    /**
     * The state or province.
     *
     * @var string
     */
    public $StateOrProvince;
    public $TimeStamp;
}
