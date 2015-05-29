<?php

namespace BingAds\CampaignManagement;

/**
 * This feature is currently in pilot and will be generally available soon.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn913119(v=msads.90).aspx ItemAction Value Set
 *
 * @used-by AdGroupCriterionAction
 */
final class ItemAction
{
    /** The requested action is to add the item, for example add the ProductPartition. */
    const ADD = 'Add';
    /** The requested action is to delete the item, for example delete the ProductPartition. */
    const DELETE = 'Delete';
    /** The requested action is to update the item, for example update the ProductPartition. */
    const UPDATE = 'Update';
}
