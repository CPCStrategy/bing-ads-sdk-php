<?php

namespace BingAds\CustomerManagement;

/**
 * For internal use only.
 *
 * @link http://msdn.microsoft.com/en-us/library/ff728418(v=msads.90).aspx ServiceLevel Value Set
 *
 * @used-by Customer
 */
final class ServiceLevel
{
    /** For internal use only. */
    const SELF_SERVE = 'SelfServe';
    /** For internal use only. */
    const SELF_SERVE_TRUSTED = 'SelfServeTrusted';
    /** For internal use only. */
    const PREMIUM = 'Premium';
    /** For internal use only. */
    const INTERNAL = 'Internal';
    /** For internal use only. */
    const SELECT = 'Select';
}
