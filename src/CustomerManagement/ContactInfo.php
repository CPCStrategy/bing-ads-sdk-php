<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the contact information for a user.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671639(v=msads.90).aspx ContactInfo Data Object
 *
 * @uses Address
 * @uses EmailFormat
 * @used-by User
 */
final class ContactInfo
{
    /**
     * The address of the user.
     *
     * @var Address
     */
    public $Address;
    /**
     * A value that determines whether the user should be contacted by telephone.
     *
     * @var bool
     */
    public $ContactByPhone;
    /**
     * A value that determines whether the user should be contacted by postal mail.
     *
     * @var bool
     */
    public $ContactByPostalMail;
    /**
     * The email address is used to send the account activation notification to the user, and can contain a maximum of 100 characters.
     *
     * @var string
     */
    public $Email;
    /**
     * The format of the body of an email message to use when correspondence is sent to the user (this does not apply to the activation notification email message).
     *
     * @var EmailFormat
     */
    public $EmailFormat;
    /**
     * The fax telephone number of the user.
     *
     * @var string
     */
    public $Fax;
    /**
     * The home telephone number of the user.
     *
     * @var string
     */
    public $HomePhone;
    /**
     * The system generated identifier of the object.
     *
     * @var int
     */
    public $Id;
    /**
     * The mobile telephone number of the user.
     *
     * @var string
     */
    public $Mobile;
    /**
     * The primary telephone number of the user.
     *
     * @var string
     */
    public $Phone1;
    /**
     * An alternate telephone number for the user.
     *
     * @var string
     */
    public $Phone2;
}
