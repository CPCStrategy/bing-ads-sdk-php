<?php
// Generated on 8/15/2014 5:44:38 AM

namespace BingAds\Optimizer
{
    use DateTime;

    final class OptimizerServiceSettings
    {
        const ServiceNamespace = 'https://bingads.microsoft.com/Optimizer/v9';
        const ProductionEndpoint = 'https://api.bingads.microsoft.com/Api/Advertiser/Optimizer/v9/OptimizerService.svc';
        const SandboxEndpoint = 'https://api.sandbox.bingads.microsoft.com/Api/Advertiser/Optimizer/v9/OptimizerService.svc';
    }

    /**
     * Defines the possible values of a campaign budget point.
     * @link http://msdn.microsoft.com/en-us/library/dn434661(v=msads.90).aspx BudgetPointType Value Set
     * 
     * @used-by BudgetPoint
     */
    final class BudgetPointType
    {
        /** The budget point includes the current budget. */
        const Current = 'Current';

        /** The budget point includes the proposed budget which is estimated to yield the maximum number of clicks. */
        const Maximum = 'Maximum';

        /** The budget point includes a proposed budget other than current, maximum, or suggested. */
        const Other = 'Other';

        /** The budget point includes the optimal suggested budget. */
        const Suggested = 'Suggested';
    }

    /**
     * Defines the possible bid opportunity types you can request when calling GetBidOpportunities.
     * @link http://msdn.microsoft.com/en-us/library/dn766183(v=msads.90).aspx BidOpportunityType Value Set
     * 
     * @used-by GetBidOpportunitiesRequest
     */
    final class BidOpportunityType
    {
        /** The bid opportunity may lead to ads shown in one of the first page positions of search results. */
        const FirstPage = 'FirstPage';

        /** The bid opportunity may lead to increased traffic. */
        const IncreaseTraffic = 'IncreaseTraffic';

        /** The bid opportunity may lead to ads shown in one of the mainline positions of search results. */
        const MainLine = 'MainLine';

        /** The bid opportunity may lead to ads shown in the first mainline position of search results. */
        const MainLine1 = 'MainLine1';
    }

    /**
     * Defines the possible keyword opportunity types you can request when calling GetKeywordOpportunities.
     * @link http://msdn.microsoft.com/en-us/library/dn766184(v=msads.90).aspx KeywordOpportunityType Value Set
     * 
     * @used-by GetKeywordOpportunitiesRequest
     */
    final class KeywordOpportunityType
    {
        /** The keyword opportunity will be suggested based on the marketplace impact of adding keywords with the broad match type. */
        const BroadMatch = 'BroadMatch';

        /** The keyword opportunity will be suggested based on the full context of the campaign, including existing keywords, landing page, and ad copy. */
        const CampaignContext = 'CampaignContext';
    }

    final class OpportunityAction
    {
        const Accept = 'Accept';
        const Reject = 'Reject';
    }

    /**
     * Defines the possible types of campaign budgets.
     * @link http://msdn.microsoft.com/en-us/library/hh418067(v=msads.90).aspx BudgetLimitType Value Set
     * 
     * @used-by BudgetOpportunity
     */
    final class BudgetLimitType
    {
        /** A daily budget that is spent until it is depleted. */
        const DailyBudgetAccelerated = 'DailyBudgetAccelerated';

        /** A daily budget that is spread throughout the day. */
        const DailyBudgetStandard = 'DailyBudgetStandard';

        /** A monthly budget that is spent until it is depleted. */
        const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169130(v=msads.90).aspx AdApiError Data Object
     * 
     * @used-by AdApiFaultDetail
     */
    final class AdApiError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that contains additional details about the error.
         * @var string
         */
        public $Detail;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines the base object from which all fault detail objects derive.
     * @link http://msdn.microsoft.com/en-us/library/dn169132(v=msads.90).aspx ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         * @var string
         */
        public $TrackingId;
    }

    /**
     * Defines a fault object that operations return when generic errors occur, such as an authentication error.
     * @link http://msdn.microsoft.com/en-us/library/dn169129(v=msads.90).aspx AdApiFaultDetail Data Object
     * 
     * @uses AdApiError
     */
    final class AdApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of AdApiError objects that contains the details that explain why the service operation failed.
         * @var AdApiError[]
         */
        public $Errors;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link http://msdn.microsoft.com/en-us/library/dn169127(v=msads.90).aspx ApiFaultDetail Data Object
     * 
     * @uses BatchError
     * @uses OperationError
     */
    final class ApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * An array of OperationError objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

    class AppliedResult
    {
        public $OpportunityKey;
        public $Code;
        public $Message;
    }

    /**
     * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/dn169131(v=msads.90).aspx BatchError Data Object
     * 
     * @used-by ApiFaultDetail
     */
    final class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * This is the base class from which opportunity objects derive.
     * @link http://msdn.microsoft.com/en-us/library/hh418063(v=msads.90).aspx Opportunity Data Object
     */
    class Opportunity
    {
        /**
         * The date by when the suggested opportunity expires.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * An identifier that uniquely identifies the opportunity.
         * @var string
         */
        public $OpportunityKey;
    }

    /**
     * Defines an object that contains the suggested bid with estimated clicks and impressions opportunities.
     * @link http://msdn.microsoft.com/en-us/library/hh802384(v=msads.90).aspx BidOpportunity Data Object
     * 
     * @used-by GetBidOpportunitiesResponse
     */
    final class BidOpportunity extends Opportunity
    {
        /**
         * The identifier of the ad group that owns the keyword.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The current keyword bid amount specified for the match type in the MatchType element.
         * @var double
         */
        public $CurrentBid;

        /**
         * The estimated clicks opportunities corresponding to the suggested bid.
         * @var double
         */
        public $EstimatedIncreaseInClicks;

        /**
         * The estimated increase in spend corresponding to the suggested bid.
         * @var double
         */
        public $EstimatedIncreaseInCost;

        /**
         * The estimated impressions opportunities corresponding to the suggested bid.
         * @var integer
         */
        public $EstimatedIncreaseInImpressions;

        /**
         * The identifier of the keyword to which the bid opportunity applies.
         * @var integer
         */
        public $KeywordId;

        /**
         * The match type to which the suggested bid value applies.
         * @var string
         */
        public $MatchType;

        /**
         * The suggested bid based on the last 7 days of performance history for the corresponding ad group.
         * @var double
         */
        public $SuggestedBid;
    }

    /**
     * Defines an object that contains the key used to identify the opportunity to be applied.
     * @link http://msdn.microsoft.com/en-us/library/dn766182(v=msads.90).aspx OpportunityModifier Data Object
     * 
     * @used-by ApplyOpportunitiesRequest
     * @used-by ApplyOpportunityModifiersRequest
     */
    class OpportunityModifier
    {
        /**
         * An identifier that uniquely identifies the opportunity to modify.
         * @var string
         */
        public $OpportunityKey;
    }

    /**
     * Defines a bid opportunity modifier object.
     * @link http://msdn.microsoft.com/en-us/library/dn766190(v=msads.90).aspx BidOpportunityModifier Data Object
     */
    final class BidOpportunityModifier extends OpportunityModifier
    {
        /**
         * The new bid amount that you want to apply instead of the suggested opportunity.
         * @var double
         */
        public $Bid;
    }

    /**
     * Defines an object that contains a suggested keyword and bid value.
     * @link http://msdn.microsoft.com/en-us/library/jj649133(v=msads.90).aspx KeywordOpportunity Data Object
     * 
     * @used-by GetKeywordOpportunitiesResponse
     */
    class KeywordOpportunity extends Opportunity
    {
        /**
         * The identifier of the ad group to apply the suggested keyword to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign that owns the ad group.
         * @var integer
         */
        public $CampaignId;

        /**
         * An indicator of competitive bids for this keyword relative to all search keywords.
         * @var double
         */
        public $Competition;

        /**
         * The match type that the suggested bid applies to.
         * @var integer
         */
        public $MatchType;

        /**
         * The estimated monthly volume of user search queries that may match the suggested keyword for the corresponding MatchType element.
         * @var integer
         */
        public $MonthlySearches;

        /**
         * The suggested bid that may result in your ads serving on the first page of the search query results.
         * @var double
         */
        public $SuggestedBid;

        /**
         * The suggested keyword.
         * @var string
         */
        public $SuggestedKeyword;
    }

    /**
     * Defines an object that contains the marketplace impact statistics of including broad match type keyword bids.
     * @link http://msdn.microsoft.com/en-us/library/dn766186(v=msads.90).aspx BroadMatchKeywordOpportunity Data Object
     * 
     * @uses BroadMatchSearchQueryKPI
     */
    final class BroadMatchKeywordOpportunity extends KeywordOpportunity
    {
        public $AverageCPC;

        /**
         * Broad match average CTR in the marketplace.
         * @var double
         */
        public $AverageCTR;

        /**
         * Broad match click share in the marketplace.
         * @var double
         */
        public $ClickShare;

        /**
         * Estimated increase in clicks if the opportunity is applied.
         * @var double
         */
        public $EstimatedIncreaseInClicks;

        /**
         * Estimated increase in cost if the opportunity is applied.
         * @var double
         */
        public $EstimatedIncreaseInCost;

        /**
         * Estimated increase in impressions if the opportunity is applied.
         * @var integer
         */
        public $EstimatedIncreaseInImpressions;

        /**
         * Broad match impression share in the marketplace.
         * @var double
         */
        public $ImpressionShare;

        /**
         * The bid of an existing reference keyword used by the service to offer the keyword opportunity.
         * @var double
         */
        public $ReferenceKeywordBid;

        /**
         * The identifier of an existing reference keyword used by the service to offer the keyword opportunity.
         * @var integer
         */
        public $ReferenceKeywordId;

        /**
         * The match type of an existing reference keyword used by the service to offer the keyword opportunity.
         * @var integer
         */
        public $ReferenceKeywordMatchType;

        /**
         * A list of up to three broad match search query KPI objects.
         * @var BroadMatchSearchQueryKPI[]
         */
        public $SearchQueryKPIs;
    }

    final class BroadMatchOpportunity extends Opportunity
    {
        public $AccountId;
        public $AccountName;
        public $AdGroupId;
        public $AdGroupName;
        public $AverageCPC;
        public $AverageCTR;
        public $CPCAdvantage;
        public $CampaignId;
        public $CampaignName;
        public $ClickShare;
        public $Clicks;
        public $ImpressionShare;
        public $Impressions;
        public $Keyword;
        public $MainLineImpressionShare;
        public $MainLineImpressions;
        public $ReferenceKeywordBid;
        public $ReferenceKeywordId;
        public $ReferenceKeywordMatchType;
        public $SuggestedBid;
    }

    /**
     * Defines a broad match opportunity modifier object.
     * @link http://msdn.microsoft.com/en-us/library/dn766192(v=msads.90).aspx BroadMatchOpportunityModifier Data Object
     */
    final class BroadMatchOpportunityModifier extends OpportunityModifier
    {
        /**
         * The new bid amount that you want to apply instead of the suggested opportunity.
         * @var double
         */
        public $Bid;
    }

    final class BroadMatchSearchQuery
    {
        public $AccountId;
        public $AccountName;
        public $Keyword;
        public $SearchQueryKPIs;
    }

    /**
     * Defines an object that contains search query statistics of including broad match type keyword bids.
     * @link http://msdn.microsoft.com/en-us/library/dn766187(v=msads.90).aspx BroadMatchSearchQueryKPI Data Object
     * 
     * @used-by BroadMatchKeywordOpportunity
     * @used-by BroadMatchSearchQuery
     */
    final class BroadMatchSearchQueryKPI
    {
        /**
         * The average CTR for the search query.
         * @var double
         */
        public $AverageCTR;

        /**
         * The clicks for the search query.
         * @var double
         */
        public $Clicks;

        /**
         * The impressions for the search query.
         * @var integer
         */
        public $Impressions;

        /**
         * The SRPV for the search query.
         * @var integer
         */
        public $SRPV;

        /**
         * The search query corresponding to the keyword.
         * @var string
         */
        public $SearchQuery;
    }

    /**
     * Defines an object that contains daily impressions and clicks estimates for one of the last 15 days.
     * @link http://msdn.microsoft.com/en-us/library/dn434658(v=msads.90).aspx BudgetLandscapePoint Data Object
     * 
     * @used-by BudgetPoint
     */
    final class BudgetLandscapePoint
    {
        /**
         * Represents one day within the last 15 days.
         * @var \DateTime
         */
        public $BudgetLandscapePointDate;

        /**
         * The real historical campaign clicks performance for the day, if the budget on the corresponding day is equal to your current budget.
         * @var double
         */
        public $Clicks;

        /**
         * The estimated clicks performance for the day , given the provided BudgetAmount element of the BudgetPoint object.
         * @var double
         */
        public $EstimatedClicks;

        /**
         * The estimated impressions performance for the day, given the provided BudgetAmount element of the BudgetPoint object.
         * @var integer
         */
        public $EstimatedImpressions;

        /**
         * The real historical campaign impressions performance for the day, if the budget on the corresponding day is equal to your current budget.
         * @var integer
         */
        public $Impressions;
    }

    /**
     * Defines an object that contains the suggested budget with estimated clicks and impressions opportunities.
     * @link http://msdn.microsoft.com/en-us/library/hh418054(v=msads.90).aspx BudgetOpportunity Data Object
     * 
     * @uses BudgetLimitType
     * @used-by GetBudgetOpportunitiesResponse
     */
    final class BudgetOpportunity extends Opportunity
    {
        /**
         * The type of budget that the campaign uses.
         * @var BudgetLimitType
         */
        public $BudgetType;

        /**
         * The identifier of the campaign to which the suggested budget applies.
         * @var integer
         */
        public $CampaignId;

        /**
         * The campaign's current budget.
         * @var double
         */
        public $CurrentBudget;

        /**
         * The estimated clicks opportunities corresponding to the suggested budget.
         * @var double
         */
        public $IncreaseInClicks;

        /**
         * The estimated impressions opportunities corresponding to the suggested budget.
         * @var integer
         */
        public $IncreaseInImpressions;

        /**
         * The estimated percentage increase in clicks corresponding to the suggested budget.
         * @var integer
         */
        public $PercentageIncreaseInClicks;

        /**
         * The estimated percentage increase in impressions corresponding to the suggested budget.
         * @var integer
         */
        public $PercentageIncreaseInImpressions;

        /**
         * The suggested budget based on the last 15 days of performance history for the corresponding campaign.
         * @var double
         */
        public $RecommendedBudget;
    }

    /**
     * Defines a budget opportunity modifier object.
     * @link http://msdn.microsoft.com/en-us/library/dn766189(v=msads.90).aspx BudgetOpportunityModifier Data Object
     */
    final class BudgetOpportunityModifier extends OpportunityModifier
    {
        /**
         * The new budget amount that you want to apply instead of the suggested opportunity.
         * @var double
         */
        public $Budget;
    }

    /**
     * Defines an object that contains a budget amount and an estimate of daily impressions, clicks, and cost for this budget amount averaged over the last 15 days.
     * @link http://msdn.microsoft.com/en-us/library/dn434659(v=msads.90).aspx BudgetPoint Data Object
     * 
     * @uses BudgetLandscapePoint
     * @uses BudgetPointType
     * @used-by CampaignBudgetLandscape
     */
    final class BudgetPoint
    {
        /**
         * A potential new budget.
         * @var double
         */
        public $BudgetAmount;

        /**
         * The list of budget landscape points with daily impressions and clicks estimates for the last 15 days.
         * @var BudgetLandscapePoint[]
         */
        public $BudgetLandscapePoints;

        /**
         * The type of budget relative to a list of budget points.
         * @var BudgetPointType
         */
        public $BudgetPointType;

        /**
         * The estimated average daily clicks for the given budget amount.
         * @var double
         */
        public $EstimatedAvgDailyClicks;

        /**
         * The estimated average daily cost for the given budget amount.
         * @var double
         */
        public $EstimatedAvgDailyCost;

        /**
         * The estimated average daily impressions for the given budget amount.
         * @var double
         */
        public $EstimatedAvgDailyImpressions;
    }

    /**
     * Defines an object that contains a list of budget points for a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn434660(v=msads.90).aspx CampaignBudgetLandscape Data Object
     * 
     * @uses BudgetPoint
     * @used-by GetBudgetLandscapeResponse
     */
    final class CampaignBudgetLandscape extends Opportunity
    {
        /**
         * The date when data for budget points were most recently updated by the system.
         * @var \DateTime
         */
        public $BaseDate;

        /**
         * The list of budget points, including budget point type and budget landscape points.
         * @var BudgetPoint[]
         */
        public $BudgetPoints;

        /**
         * The identifier of the campaign corresponding to the list of budget points.
         * @var integer
         */
        public $CampaignId;
    }

    final class KeywordAppliedResult extends AppliedResult
    {
        public $KeywordId;
    }

    /**
     * Defines a keyword opportunity modifier object.
     * @link http://msdn.microsoft.com/en-us/library/dn766191(v=msads.90).aspx KeywordOpportunityModifier Data Object
     */
    final class KeywordOpportunityModifier extends OpportunityModifier
    {
        /**
         * The identifier of the ad group that you want to apply the opportunity instead of the ad group suggested by the original opportunity.
         * @var integer
         */
        public $AdGroupId;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169126(v=msads.90).aspx OperationError Data Object
     * 
     * @used-by ApiFaultDetail
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Applies the recommended opportunities that the get opportunities operations returned, for example the OpportunityKeys returned by the GetBidOpportunities operation.
     * @link http://msdn.microsoft.com/en-us/library/dn376334(v=msads.90).aspx ApplyOpportunities Request Object
     * 
     * @uses OpportunityModifier
     * @used-by BingAdsOptimizerService::ApplyOpportunities
     */
    final class ApplyOpportunitiesRequest
    {
        /**
         * The identifier of the account that owns the entities to apply the opportunities to.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of opportunity objects identifying the opportunities that you want to apply.
         * @var string[]
         */
        public $OpportunityKeys;

        /**
         * An array of modifiers that overrides the available opportunity keys.
         * @var OpportunityModifier[]
         */
        public $OpportunityModifiers;
    }

    /**
     * Applies the recommended opportunities that the get opportunities operations returned, for example the OpportunityKeys returned by the GetBidOpportunities operation.
     * @link http://msdn.microsoft.com/en-us/library/dn376334(v=msads.90).aspx ApplyOpportunities Response Object
     * 
     * @used-by BingAdsOptimizerService::ApplyOpportunities
     */
    final class ApplyOpportunitiesResponse
    {
    }

    final class ApplyOpportunityModifiersRequest
    {
        public $AccountId;
        public $Action;
        public $Opportunities;
    }

    final class ApplyOpportunityModifiersResponse
    {
        public $AppliedResults;
    }

    /**
     * Gets the keyword bid opportunities of the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn376337(v=msads.90).aspx GetBidOpportunities Request Object
     * 
     * @uses BidOpportunityType
     * @used-by BingAdsOptimizerService::GetBidOpportunities
     */
    final class GetBidOpportunitiesRequest
    {
        /**
         * The identifier of the account that owns the campaign specified in the CampaignId element.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the ad group for which you want to determine keyword bid opportunities.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign that owns the ad group specified in the AdGroupId element.
         * @var integer
         */
        public $CampaignId;

        /**
         * Determines the type or types of bid opportunities corresponding to your ad position goals.
         * @var BidOpportunityType
         */
        public $OpportunityType;
    }

    /**
     * Gets the keyword bid opportunities of the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn376337(v=msads.90).aspx GetBidOpportunities Response Object
     * 
     * @uses BidOpportunity
     * @used-by BingAdsOptimizerService::GetBidOpportunities
     */
    final class GetBidOpportunitiesResponse
    {
        /**
         * An array of BidOpportunity objects that identifies the keywords whose clicks and impressions may increase if you were to apply the suggested match-type bid value.
         * @var BidOpportunity[]
         */
        public $Opportunities;
    }

    final class GetBroadMatchOpportunitiesRequest
    {
        public $AccountId;
        public $AdGroupId;
        public $CampaignId;
    }

    final class GetBroadMatchOpportunitiesResponse
    {
        public $Opportunities;
    }

    final class GetBroadMatchSearchQueriesRequest
    {
        public $AccountId;
        public $AdGroupId;
        public $CampaignId;
    }

    final class GetBroadMatchSearchQueriesResponse
    {
        public $SearchQueries;
    }

    /**
     * Gets the campaign budget landscape and corresponding budget points for the specified campaign in an account.
     * @link http://msdn.microsoft.com/en-us/library/dn434657(v=msads.90).aspx GetBudgetLandscape Request Object
     * 
     * @used-by BingAdsOptimizerService::GetBudgetLandscape
     */
    final class GetBudgetLandscapeRequest
    {
        /**
         * The identifier of the account for which you want to discover a list of campaign budget suggestions.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the campaign for which you want to discover a list of campaign budget suggestions.
         * @var integer
         */
        public $CampaignId;
    }

    /**
     * Gets the campaign budget landscape and corresponding budget points for the specified campaign in an account.
     * @link http://msdn.microsoft.com/en-us/library/dn434657(v=msads.90).aspx GetBudgetLandscape Response Object
     * 
     * @uses CampaignBudgetLandscape
     * @used-by BingAdsOptimizerService::GetBudgetLandscape
     */
    final class GetBudgetLandscapeResponse
    {
        /**
         * A list of CampaignBudgetLandscape objects that identify one or more campaigns with suggested budget points.
         * @var CampaignBudgetLandscape[]
         */
        public $CampaignBudgetLandscapes;
    }

    /**
     * Gets the campaign budget opportunities of the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn376335(v=msads.90).aspx GetBudgetOpportunities Request Object
     * 
     * @used-by BingAdsOptimizerService::GetBudgetOpportunities
     */
    final class GetBudgetOpportunitiesRequest
    {
        /**
         * The identifier of the account for which you want to discover possible campaign budget opportunities.
         * @var integer
         */
        public $AccountId;
    }

    /**
     * Gets the campaign budget opportunities of the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn376335(v=msads.90).aspx GetBudgetOpportunities Response Object
     * 
     * @uses BudgetOpportunity
     * @used-by BingAdsOptimizerService::GetBudgetOpportunities
     */
    final class GetBudgetOpportunitiesResponse
    {
        /**
         * An array of BudgetOpportunity objects that identify the campaigns whose clicks and impressions may increase if you were to apply the suggested budget.
         * @var BudgetOpportunity[]
         */
        public $Opportunities;
    }

    /**
     * Gets a list of keyword suggestions that are relevant to the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn376336(v=msads.90).aspx GetKeywordOpportunities Request Object
     * 
     * @uses KeywordOpportunityType
     * @used-by BingAdsOptimizerService::GetKeywordOpportunities
     */
    final class GetKeywordOpportunitiesRequest
    {
        /**
         * The identifier of the account that owns the specified campaign.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the ad group to get keyword suggestions for.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign that owns the specified ad group.
         * @var integer
         */
        public $CampaignId;

        /**
         * Determines the type or types of keyword opportunities that you want.
         * @var KeywordOpportunityType
         */
        public $OpportunityType;
    }

    /**
     * Gets a list of keyword suggestions that are relevant to the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn376336(v=msads.90).aspx GetKeywordOpportunities Response Object
     * 
     * @uses KeywordOpportunity
     * @used-by BingAdsOptimizerService::GetKeywordOpportunities
     */
    final class GetKeywordOpportunitiesResponse
    {
        /**
         * A list of KeywordOpportunity objects that identifies a suggested keyword and bid value.
         * @var KeywordOpportunity[]
         */
        public $Opportunities;
    }
}
