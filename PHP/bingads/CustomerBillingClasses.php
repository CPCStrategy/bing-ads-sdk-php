<?php

// Generated on 2/25/2015 6:14:25 AM


namespace BingAds\CustomerBilling
{
    use DateTime;

    final class CustomerBillingServiceSettings
    {
        const ServiceNamespace = 'https://bingads.microsoft.com/Billing/v9';
        const ProductionEndpoint = 'https://clientcenter.api.bingads.microsoft.com/Api/Billing/v9/CustomerBillingService.svc';
        const SandboxEndpoint = 'https://clientcenter.api.sandbox.bingads.microsoft.com/Api/Billing/v9/CustomerBillingService.svc';
    }

    /**
     * Defines the possible formats in which to generate the billing document.
     *
     * @link http://msdn.microsoft.com/en-us/library/ee704172(v=msads.90).aspx DataType Value Set
     *
     * @used-by BillingDocument
     * @used-by GetBillingDocumentsRequest
     * @used-by GetDisplayInvoicesRequest
     */
    final class DataType
    {
        /** Use XML format. */
        const Xml = 'Xml';

        /** Use PDF format. */
        const Pdf = 'Pdf';
    }

    /**
     * Defines the possible status values of an InsertionOrder.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743761(v=msads.90).aspx InsertionOrderStatus Value Set
     *
     * @used-by InsertionOrder
     */
    final class InsertionOrderStatus
    {
        /** A super admin of the bill-to customer added the insertion order, and the insertion order is pending account manager approval. */
        const PendingSystemReview = 'PendingSystemReview';

        /** An account manager added the insertion order, and the insertion order is pending approval from the super admin of the bill-to customer. */
        const PendingUserReview = 'PendingUserReview';

        /** The insertion order is active, which means that the account and its campaigns will begin showing ads once the start date is reached. */
        const Active = 'Active';

        /** Either the super admin of the bill-to customer or the account manager declined the insertion order. */
        const Declined = 'Declined';

        /** The end date or spend limit of the insertion order is reached, which means that the insertion order is expired or inactive. */
        const Expired = 'Expired';

        /** Either the super admin of the bill-to customer or the account manager canceled the insertion order. */
        const Canceled = 'Canceled';
    }

    /**
     * Defines the condition of results for insertion orders returned using SearchInsertionOrders.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743753(v=msads.90).aspx PredicateOperator Value Set
     *
     * @used-by Predicate
     */
    final class PredicateOperator
    {
        const Equals = 'Equals';
        const NotEquals = 'NotEquals';
        const Contains = 'Contains';
        const In = 'In';
        const GreaterThanEquals = 'GreaterThanEquals';
        const LessThanEquals = 'LessThanEquals';
        const StartsWith = 'StartsWith';
        const NotContains = 'NotContains';
    }

    /**
     * Defines the field order of insertion orders returned using SearchInsertionOrders.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743750(v=msads.90).aspx OrderByField Value Set
     *
     * @used-by OrderBy
     */
    final class OrderByField
    {
        /** The order is determined by a predicate identifier. */
        const Id = 'Id';

        /** The order is determined by a predicate name. */
        const Name = 'Name';

        /** The order is determined by a predicate number. */
        const Number = 'Number';

        /** The order is determined by a predicate life cycle status. */
        const LifeCycleStatus = 'LifeCycleStatus';
    }

    /**
     * Defines the ascending or descending sort order of results for SearchInsertionOrders.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743751(v=msads.90).aspx SortOrder Value Set
     *
     * @used-by OrderBy
     */
    final class SortOrder
    {
        const Ascending = 'Ascending';
        const Descending = 'Descending';
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn169104(v=msads.90).aspx AdApiError Data Object
     *
     * @used-by AdApiFaultDetail
     */
    final class AdApiError
    {
        /**
         * A numeric error code that identifies the error.
         *
         * @var int
         */
        public $Code;

        /**
         * A message that contains additional details about the error.
         *
         * @var string
         */
        public $Detail;

        /**
         * A symbolic string constant that identifies the error.
         *
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         *
         * @var string
         */
        public $Message;
    }

    /**
     * Defines the base object from which all fault detail objects derive.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn169107(v=msads.90).aspx ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         *
         * @var string
         */
        public $TrackingId;
    }

    /**
     * Defines a fault object that operations return when generic errors occur, such as an authentication error.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn169105(v=msads.90).aspx AdApiFaultDetail Data Object
     *
     * @uses AdApiError
     */
    final class AdApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of AdApiError objects that contains the details that explain why the service operation failed.
         *
         * @var AdApiError[]
         */
        public $Errors;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn169108(v=msads.90).aspx ApiFault Data Object
     *
     * @uses OperationError
     */
    class ApiFault extends ApplicationFault
    {
        public $OperationErrors;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn169102(v=msads.90).aspx ApiBatchFault Data Object
     *
     * @uses BatchError
     */
    final class ApiBatchFault extends ApiFault
    {
        /**
         * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail.
         *
         * @var BatchError[]
         */
        public $BatchErrors;
    }

    /**
     * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn169101(v=msads.90).aspx BatchError Data Object
     *
     * @used-by ApiBatchFault
     */
    final class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         *
         * @var int
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         *
         * @var string
         */
        public $Details;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         *
         * @var int
         */
        public $Index;

        /**
         * A message that describes the error.
         *
         * @var string
         */
        public $Message;
    }

    /**
     * Defines a billing document.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn469177(v=msads.90).aspx BillingDocument Data Object
     *
     * @uses DataType
     * @used-by GetBillingDocumentsResponse
     * @used-by GetDisplayInvoicesResponse
     * @used-by GetKOHIOInvoicesResponse
     */
    final class BillingDocument
    {
        /**
         * The billing document.
         *
         * @var base64Binary
         */
        public $Data;

        /**
         * The identifier of the billing document.
         *
         * @var int
         */
        public $Id;

        /**
         * The format of the billing document.
         *
         * @var DataType
         */
        public $Type;
    }

    /**
     * Defines a billing document identification object that contains information about a billing document, such as the billing document identifier, billing document amount, and account identifier.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn469176(v=msads.90).aspx BillingDocumentInfo Data Object
     *
     * @used-by GetBillingDocumentsInfoResponse
     */
    final class BillingDocumentInfo
    {
        /**
         * The identifier of the account for which the billing document was generated.
         *
         * @var int
         */
        public $AccountId;

        /**
         * The account name.
         *
         * @var string
         */
        public $AccountName;

        /**
         * The account number.
         *
         * @var string
         */
        public $AccountNumber;

        /**
         * The amount of the billing document.
         *
         * @var float
         */
        public $Amount;

        /**
         * The currency of the billing document.
         *
         * @var string
         */
        public $CurrencyCode;

        /**
         * The date of the billing document.
         *
         * @var \DateTime
         */
        public $DocumentDate;

        /**
         * An identifier of the billing document.
         *
         * @var int
         */
        public $DocumentId;
    }

    /**
     * Defines an insertion order.
     *
     * @link http://msdn.microsoft.com/en-us/library/ff728378(v=msads.90).aspx InsertionOrder Data Object
     *
     * @uses InsertionOrderStatus
     * @used-by AddInsertionOrderRequest
     * @used-by GetInsertionOrdersByAccountResponse
     * @used-by SearchInsertionOrdersResponse
     * @used-by UpdateInsertionOrderRequest
     */
    final class InsertionOrder
    {
        /**
         * The identifier of the account to which the insertion order applies.
         *
         * @var int
         */
        public $AccountId;

        /**
         * The running balance of the insertion order.
         *
         * @var float
         */
        public $BalanceAmount;

        /**
         * A code that identifies the country/region in which the account operates.
         *
         * @var string
         */
        public $BookingCountryCode;

        /**
         * A description of the insertion order.
         *
         * @var string
         */
        public $Comment;

        /**
         * The date that the insertion order expires.
         *
         * @var \DateTime
         */
        public $EndDate;

        /**
         * A system generated identifier that identifies the insertion order.
         *
         * @var int
         */
        public $InsertionOrderId;

        /**
         * An identifier of the last user to update the insertion order.
         *
         * @var int
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that the insertion order was last updated.
         *
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * A percentage of the budget that has been spent.
         *
         * @var float
         */
        public $NotificationThreshold;

        /**
         * Internal use only.
         *
         * @var int
         */
        public $ReferenceId;

        /**
         * The budget for this insertion order.
         *
         * @var float
         */
        public $SpendCapAmount;

        /**
         * The date that the insertion order can begin accruing charges.
         *
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The friendly name that can be used to reference this insertion order.
         *
         * @var string
         */
        public $Name;

        /**
         * The status of the insertion order.
         *
         * @var InsertionOrderStatus
         */
        public $Status;

        /**
         * A purchase order value that can be used to reference this insertion order in monthly invoices.
         *
         * @var string
         */
        public $PurchaseOrder;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn169103(v=msads.90).aspx OperationError Data Object
     *
     * @used-by ApiFault
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error.
         *
         * @var int
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         *
         * @var string
         */
        public $Details;

        /**
         * A message that describes the error.
         *
         * @var string
         */
        public $Message;
    }

    /**
     * Defines an order for the list of insertion orders returned using SearchInsertionOrders.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743752(v=msads.90).aspx OrderBy Data Object
     *
     * @uses OrderByField
     * @uses SortOrder
     * @used-by SearchInsertionOrdersRequest
     */
    final class OrderBy
    {
        /**
         * Determines the field to order the results.
         *
         * @var OrderByField
         */
        public $Field;

        /**
         * Determines whether the results are ascending or descending.
         *
         * @var SortOrder
         */
        public $Order;
    }

    /**
     * Defines a paging object for the list of insertion orders returned using SearchInsertionOrders.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743749(v=msads.90).aspx Paging Data Object
     *
     * @used-by SearchInsertionOrdersRequest
     */
    final class Paging
    {
        /**
         * The zero-based results page index.
         *
         * @var int
         */
        public $Index;

        /**
         * The page size and the number of results to return in the specified page.
         *
         * @var int
         */
        public $Size;
    }

    /**
     * Defines a predicate for the list of insertion orders returned using SearchInsertionOrders.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743756(v=msads.90).aspx Predicate Data Object
     *
     * @uses PredicateOperator
     * @used-by SearchInsertionOrdersRequest
     */
    final class Predicate
    {
        /**
         * The name of the element for the object you are searching.
         *
         * @var string
         */
        public $Field;

        /**
         * Defines the relationship between the field and the value.
         *
         * @var PredicateOperator
         */
        public $Operator;

        /**
         * The string to search in the specified field.
         *
         * @var string
         */
        public $Value;
    }

    /**
     * Adds an insertion order to the specified account.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743758(v=msads.90).aspx AddInsertionOrder Request Object
     *
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::AddInsertionOrder
     */
    final class AddInsertionOrderRequest
    {
        /**
         * An insertion order to add to the account specified in the InsertionOrder object.
         *
         * @var InsertionOrder
         */
        public $InsertionOrder;
    }

    /**
     * Adds an insertion order to the specified account.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743758(v=msads.90).aspx AddInsertionOrder Response Object
     *
     * @used-by BingAdsCustomerBillingService::AddInsertionOrder
     */
    final class AddInsertionOrderResponse
    {
        /**
         * A long value that represents the identifier for the insertion order that was added.
         *
         * @var int
         */
        public $InsertionOrderId;

        /**
         * Identifies the server time in UTC when the insertion order was added.
         *
         * @var \DateTime
         */
        public $CreateTime;
    }

    /**
     * Gets the amount spent by the account in the specified month.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpend Request Object
     *
     * @used-by BingAdsCustomerBillingService::GetAccountMonthlySpend
     */
    final class GetAccountMonthlySpendRequest
    {
        public $AccountId;
        public $MonthYear;
    }

    /**
     * Gets the amount spent by the account in the specified month.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpend Response Object
     *
     * @used-by BingAdsCustomerBillingService::GetAccountMonthlySpend
     */
    final class GetAccountMonthlySpendResponse
    {
        /**
         * The amount spent by the account in the specified period.
         *
         * @var float
         */
        public $Amount;
    }

    /**
     * Gets the specified billing documents.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocuments Request Object
     *
     * @uses DataType
     * @used-by BingAdsCustomerBillingService::GetBillingDocuments
     */
    final class GetBillingDocumentsRequest
    {
        /**
         * A list of identifiers of the billing documents to get.
         *
         * @var integer[]
         */
        public $DocumentIds;

        /**
         * The format to use to generate the billing document.
         *
         * @var DataType
         */
        public $Type;
    }

    /**
     * Gets the specified billing documents.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocuments Response Object
     *
     * @uses BillingDocument
     * @used-by BingAdsCustomerBillingService::GetBillingDocuments
     */
    final class GetBillingDocumentsResponse
    {
        /**
         * The list of billing documents that were retrieved.
         *
         * @var BillingDocument[]
         */
        public $BillingDocuments;
    }

    /**
     * Gets a list of objects that contains billing document identification information, for example the billing document identifier, amount, and account identifier.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn451271(v=msads.90).aspx GetBillingDocumentsInfo Request Object
     *
     * @used-by BingAdsCustomerBillingService::GetBillingDocumentsInfo
     */
    final class GetBillingDocumentsInfoRequest
    {
        /**
         * A list of identifiers of the accounts whose billing document information you want to get.
         *
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The start date to use for specifying the billing documents to get.
         *
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The end date to use for specifying the billing documents to get.
         *
         * @var \DateTime
         */
        public $EndDate;
    }

    /**
     * Gets a list of objects that contains billing document identification information, for example the billing document identifier, amount, and account identifier.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn451271(v=msads.90).aspx GetBillingDocumentsInfo Response Object
     *
     * @uses BillingDocumentInfo
     * @used-by BingAdsCustomerBillingService::GetBillingDocumentsInfo
     */
    final class GetBillingDocumentsInfoResponse
    {
        /**
         * The list of billing document information objects that were retrieved.
         *
         * @var BillingDocumentInfo[]
         */
        public $BillingDocumentsInfo;
    }

    final class GetDisplayInvoicesRequest
    {
        public $InvoiceIds;
        public $Type;
    }

    final class GetDisplayInvoicesResponse
    {
        public $BillingDocuments;
    }

    /**
     * Gets a list of insertion orders for the specified account.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccount Request Object
     *
     * @used-by BingAdsCustomerBillingService::GetInsertionOrdersByAccount
     */
    final class GetInsertionOrdersByAccountRequest
    {
        /**
         * The identifier of the account that contains the insertion orders to get.
         *
         * @var int
         */
        public $AccountId;

        /**
         * A list of identifiers of the insertion orders to get.
         *
         * @var integer[]
         */
        public $InsertionOrderIds;
    }

    /**
     * Gets a list of insertion orders for the specified account.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccount Response Object
     *
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::GetInsertionOrdersByAccount
     */
    final class GetInsertionOrdersByAccountResponse
    {
        /**
         * A list of insertion orders.
         *
         * @var InsertionOrder[]
         */
        public $InsertionOrders;
    }

    final class GetKOHIOInvoicesRequest
    {
        public $InvoiceIds;
    }

    final class GetKOHIOInvoicesResponse
    {
        public $BillingDocuments;
    }

    /**
     * Searches for insertion orders that match a specified criteria.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743759(v=msads.90).aspx SearchInsertionOrders Request Object
     *
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerBillingService::SearchInsertionOrders
     */
    final class SearchInsertionOrdersRequest
    {
        /**
         * Determines the request conditions.
         *
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results by the specified property of an account.
         *
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of results per page.
         *
         * @var Paging
         */
        public $PageInfo;
    }

    /**
     * Searches for insertion orders that match a specified criteria.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743759(v=msads.90).aspx SearchInsertionOrders Response Object
     *
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::SearchInsertionOrders
     */
    final class SearchInsertionOrdersResponse
    {
        /**
         * A list of insertion orders that meet the specified criteria.
         *
         * @var InsertionOrder[]
         */
        public $InsertionOrders;
    }

    /**
     * Updates an insertion order within the specified account.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743760(v=msads.90).aspx UpdateInsertionOrder Request Object
     *
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
     */
    final class UpdateInsertionOrderRequest
    {
        /**
         * An insertion order to update within the account specified in the InsertionOrder object.
         *
         * @var InsertionOrder
         */
        public $InsertionOrder;
    }

    /**
     * Updates an insertion order within the specified account.
     *
     * @link http://msdn.microsoft.com/en-us/library/dn743760(v=msads.90).aspx UpdateInsertionOrder Response Object
     *
     * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
     */
    final class UpdateInsertionOrderResponse
    {
        /**
         * Identifies the server time in UTC when the insertion order was last modified.
         *
         * @var \DateTime
         */
        public $LastModifiedTime;
    }
}
