<?php

namespace BingAds\CustomerManagement;

/**
 * This feature is not supported in sandbox.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn632184(v=msads.90).aspx ClientLinkStatus Value Set
 *
 * @used-by ClientLink
 */
final class ClientLinkStatus
{
    /** The ClientLink object has been added via the AddClientLinks service operation. */
    const LINK_PENDING = 'LinkPending';
    /** The link request has been canceled by the agency. */
    const LINK_CANCELED = 'LinkCanceled';
    /** The link is inactive due to expiry. */
    const LINK_EXPIRED = 'LinkExpired';
    /** The invited client should use this value to accept the link invitation. */
    const LINK_ACCEPTED = 'LinkAccepted';
    /** The link request has been declined by the invited client. */
    const LINK_DECLINED = 'LinkDeclined';
    /** The link process is in progress and either waiting for the billing transition to complete or the specified client link start date has not yet arrived. */
    const LINK_IN_PROGRESS = 'LinkInProgress';
    /** The link is established and the managing customer can access the client account. */
    const ACTIVE = 'Active';
    /** The link process failed to complete successfully. */
    const LINK_FAILED = 'LinkFailed';
    /** The agency should use this value to request an unlink. */
    const UNLINK_REQUESTED = 'UnlinkRequested';
    /** A request to terminate the link has been sent. */
    const UNLINK_PENDING = 'UnlinkPending';
    /** Reserved for future use. */
    const UNLINK_CANCELED = 'UnlinkCanceled';
    /** The unlink process is in progress and waiting for the billing transition to complete. */
    const UNLINK_IN_PROGRESS = 'UnlinkInProgress';
    /** The unlink process has completed and the managing customer can no longer access the client account. */
    const INACTIVE = 'Inactive';
    /** The unlink process failed to complete successfully, for example because the billing transition could not be completed. */
    const UNLINK_FAILED = 'UnlinkFailed';
}
