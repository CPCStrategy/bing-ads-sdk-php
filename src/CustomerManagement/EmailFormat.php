<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible formats of the body of an email message.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671705(v=msads.90).aspx EmailFormat Value Set
 *
 * @used-by ContactInfo
 */
final class EmailFormat
{
    const Html = 'Html';
    const Text = 'Text';
}
